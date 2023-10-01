<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Session;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        

        $typepost = DB::table('cate_post')
            ->get();
        View::share(compact('typepost'));
    }

    public function index()
    {
        $post = DB::table('post')
        ->join('cate_post', 'post.id_cp', '=', 'cate_post.id_cp')
        ->select('post.*','cate_post.*', 'post.updated_at as new_updated_at', 'post.created_at as new_created_at')
        ->get();

        return view('admin.manage.post.list', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manage.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new = new PostModel;
        $new->title = trim(strip_tags($request['title']));
        $new->slug = $request['slug'];
        $new->subtitle = $request['vitri'];
        $new->hidden = (int) $request['hidden'];
        $new->content = $request['tongquan'];
        $new->id_cp = (int) $request['typepost'];

        if ($request->hasFile('img__new')) {
            $file = $request->file('img__new');
            $extension = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extension;
            $file->move('admin/uploads/images/news/', $file_name);
            $new->img = 'admin/uploads/images/news/' . $file_name;
        }

        $new->save();

        return redirect(route('post.index'))->with('thongbao', 'Thêm tin thành công');
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
        
        $post = DB::table('post')->where('id_post', $id)->first();
        if ($post==null){
            $request->session()->flash('thongbao','Không có tin này: '. $id);
            return redirect('/dashboard/post');
        }
        return view('admin.manage.post.update',compact('post'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $new = PostModel::find($id);
        $new->title = trim(strip_tags($request['title']));
        $new->slug = $request['slug'];
        $new->subtitle = $request['vitri'];
        $new->hidden = (int) $request['hidden'];
        $new->content = $request['tongquan'];
        $new->id_cp = (int) $request['typepost'];
        $new->hot = (int) $request['hot'];

        if ($request->hasFile('img__new')) {
            $file = $request->file('img__new');
            $extension = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extension;
            $file->move('admin/uploads/images/news/', $file_name);
            $new->img = 'admin/uploads/images/news/' . $file_name;
        }

        $new->save();

        return redirect(route('post.index'))->with('thongbao', 'Cập nhật tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request, string $id)
    {
        $sosp = \DB::table('post')->where('id_post', $id)->count();
        if ($sosp==0) {
            $request->session()->flash('thongbao','Tin không tồn tại');
            return redirect('/dashboard/post');
        }
        \DB::table('post')->where('id_post', $id)->delete();
        $request->session()->flash('thongbao', 'Đã xóa sản phẩm');
        return redirect('/dashboard/post');
    }
    
}
