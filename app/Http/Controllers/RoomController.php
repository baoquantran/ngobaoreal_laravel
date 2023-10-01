<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room = DB:: table('room')->get();
        return view('admin.manage.room.list',compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manage.room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request['name'];
        $hidden = $request['hidden'];
        $number = $request['number'];

        DB::table('room')
        ->insert([
            'name'=> $name,
            'hidden' =>$hidden,
            'number' =>$number
        ]);
        return redirect('/dashboard/room');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $room = DB::table('room')->where('id_room', $id)->first();
        if ($room==null){
            $request->session()->flash('thongbao','Không có loại này: '. $id);
            return redirect('/dashboard/room');
        }
        return view('admin.manage.room.update' ,compact('room'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request['name'];
        $hidden = $request['hidden'];
        $number = $request['number'];
        DB::table('room')->where('id_room', $id)
        ->update([
            'name'=> $name,
            'hidden' =>$hidden,
            'number' =>$number
        ]);
        return redirect('/dashboard/room');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request, string $id)
    {
        $sosp = DB::table('product')->where('id_pro', $id)->count();
        if ($sosp>0) {
            $request->session()->flash('thongbao','Không xóa loại, vì có dự án trong loại này');
            return redirect('/dashboard/room');
        }else {
            DB::table('room')->where('id_room', $id)->delete();
            $request->session()->flash('thongbao', 'Đã xóa loại');
            return redirect('/dashboard/room');
        }
       
    }
}
