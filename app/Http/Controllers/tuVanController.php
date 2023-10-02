<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tuvan;

class tuVanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Đếm số lượng bản ghi có status bằng 0
        $countZeroStatus = tuvan::where('status', 0)->count();
        $countTuvan = tuvan::count();

        // Lấy danh sách bản ghi
        $data_tuvan = tuvan::get();

        return view('admin.manage.tuvan.list', [
            'data_tuvan' => $data_tuvan,
            'countZeroStatus' => $countZeroStatus,
            'countTuvan' => $countTuvan,
            // Truyền biến này vào view
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request['name'] !== null && $request['phone'] !== null) {
            $tuvan = new tuvan;
            $tuvan->name = $request['name'];
            $tuvan->email = $request['email'];
            $tuvan->phone = $request['phone'];
            $tuvan->note = $request['note'];
            $tuvan->save();
            return redirect()->route('lien-he');
            // return response()->json([
            //     'success' => true,
            //     'message' => 'Gửi thông tin thành công!'
            // ]);
        } else {
            return redirect()->route('lien-he');
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Vui lòng nhập đủ thông tin'
            // ]);
        }
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $xuly = tuvan::find($id);
        $xuly->update([
            'status' => 1,
        ]);
        return redirect()->route('tuvan.index');
    }
    public function check(Request $request, string $id)
    {
        $xuly = tuvan::find($id);
        $xuly->update([
            'status' => 2,
        ]);
        return redirect()->route('tuvan.index');
    }
    public function destroy(string $id)
    {
        //
        $xuly = tuvan::find($id);
        $xuly->delete();
        return redirect()->route('tuvan.index');
    }
}