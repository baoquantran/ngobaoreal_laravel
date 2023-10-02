<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\baogia;
use Illuminate\Support\Facades\DB;


class baoGiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Đếm số lượng bản ghi có status bằng 0
        $countZeroStatus = baogia::where('status', 0)->count();
        $countBaogia = baogia::count();

        // Lấy danh sách bản ghi
        $data_baogia = baogia::get();

        return view('admin.manage.baogia.list', [
            'data_baogia' => $data_baogia,
            'countZeroStatus' => $countZeroStatus,
            'countBaogia' => $countBaogia,
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
            $baogia = new baogia;
            $baogia->name = $request['name'];
            $baogia->email = $request['email'];
            $baogia->phone = $request['phone'];
            $baogia->note = $request['note'];
            $baogia->save();

            return response()->json([
                'success' => true,
                'message' => 'Gửi thông tin thành công!'
            ]);
        } else {
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
        $xuly = baogia::find($id);
        $xuly->update([
            'status' => 1,
        ]);
        return redirect()->route('baogia.index');
    }
    public function check(Request $request, string $id)
    {
        $xuly = baogia::find($id);
        $xuly->update([
            'status' => 2,
        ]);
        return redirect()->route('baogia.index');
    }
    public function destroy(string $id)
    {
        //
        $xuly = baogia::find($id);
        $xuly->delete();
        return redirect()->route('baogia.index');
    }
}