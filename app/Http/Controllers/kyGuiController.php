<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kygui;

class kyGuiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Đếm số lượng bản ghi có status bằng 0
        $countZeroStatus = kygui::where('status', 0)->count();
        $countKygui = kygui::count();

        // Lấy danh sách bản ghi
        $data_kygui = kygui::get();

        return view('admin.manage.kygui.list', [
            'data_kygui' => $data_kygui,
            'countZeroStatus' => $countZeroStatus,
            'countKygui' => $countKygui,
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
            $kygui = new kygui;
            $kygui->name = $request['name'];
            $kygui->email = $request['email'];
            $kygui->phone = $request['phone'];
            $kygui->type = $request['options'];
            $kygui->save();
            // return redirect()->route('MASTERISECENTERPOINT');
            return response()->json([
                'success' => true,
                'message' => 'Gửi thông tin thành công!'
            ]);
        } else {
            // return redirect()->route('MASTERISECENTERPOINT');
            return response()->json([
                'success' => false,
                'message' => 'Vui lòng nhập đủ thông tin'
            ]);
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
        $xuly = kygui::find($id);
        $xuly->update([
            'status' => 1,
        ]);
        return redirect()->route('kygui.index');
    }
    public function check(Request $request, string $id)
    {
        $xuly = kygui::find($id);
        $xuly->update([
            'status' => 2,
        ]);
        return redirect()->route('kygui.index');
    }
    public function destroy(string $id)
    {
        //
        $xuly = kygui::find($id);
        $xuly->delete();
        return redirect()->route('kygui.index');
    }
}
