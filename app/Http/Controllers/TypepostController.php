<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class TypepostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typepost = DB::table('cate_post')->get();
  
        return view('admin.manage.typepost.list', compact('typepost'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manage.typepost.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request['name'];
        $hidden = $request['hidden'];
        $catep_slug = Str::slug($request['catep_slug']);
        

        DB::table('cate_post')
        ->insert([
            'name'=> $name,
            'hidden' =>$hidden,
            'catep_slug' => $catep_slug
        ]);
        return redirect('/dashboard/type-post');
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
        $typepost = DB::table('cate_post')->where('id_cp', $id)->first();
        if ($typepost==null){
            $request->session()->flash('thongbao','Không có loại này: '. $id);
            return redirect('/dashboard/type-post');
        }
        return view('admin.manage.typepost.update',compact('typepost'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request['name'];
        $hidden = (int) $request['hidden'];
        DB::table('cate_post')->where('id_cp', $id)
        ->update([
            'name'=>$name,
            'hidden'=>$hidden
        ]);
        return redirect('/dashboard/type-post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request, string $id)
    {
        $sosp = DB::table('post')->where('id_post', $id)->count();
        if ($sosp>0) {
            $request->session()->flash('thongbao','Không xóa loại tin, vì có bài viết trong loại tin này ');
            return redirect('/dashboard/type-post');
        }else {
            DB::table('cate_post')->where('id_cp', $id)->delete();
            $request->session()->flash('thongbao', 'Đã xóa loại tin');
            return redirect('/dashboard/type-post');
        }
       
    }
}
