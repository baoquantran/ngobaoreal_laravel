<?php

namespace App\Http\Controllers;
// use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StatusProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = DB::table('status')->get();
  
        return view('admin.manage.statusproject.list', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manage.statusproject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name_status = $request['name_status'];
        $hidden = $request['hidden'];

        DB::table('status')
        ->insert([
            'name_status'=> $name_status,
            'hidden' =>$hidden
        ]);
        return redirect('/dashboard/status-project');
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
        $status = DB::table('status')->where('id_status', $id)->first();
        if ($status==null){
            $request->session()->flash('thongbao','Không có loại này: '. $id);
            return redirect('/dashboard/status-project');
        }
        return view('admin.manage.statusproject.update' ,compact('status'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name_status = $request['name_status'];
        $hidden = (int) $request['hidden'];
        DB::table('status')->where('id_status', $id)
        ->update(['name_status'=>$name_status,'hidden'=>$hidden]);
        return redirect('/dashboard/status-project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request, string $id)
    {
        $sosp = DB::table('product')->where('id_pro', $id)->count();
        if ($sosp>=0) {
            $request->session()->flash('thongbao','Không xóa trạng thái, vì có dự án trong trạng thái này ');
            return redirect('/dashboard/status-project');
        }else {
            DB::table('status')->where('id_status', $id)->delete();
            $request->session()->flash('thongbao', 'Đã xóa loại');
            return redirect('/dashboard/status-project');
        }
       
    }
    }
