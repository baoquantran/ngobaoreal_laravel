<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function __construct()
    {
        $catepost = DB::table('cate_post')->get();
        $status = DB::table('status')
        ->get();
        $local = DB::table('local')->get();
        $product = DB::table('status')
        ->join('product','product.id_status','=','status.id_status')
        ->select('product.*','status.*')
        ->get();
        $postpp = DB::table('post')
        ->join('cate_post','cate_post.id_cp','=','post.id_cp')
        ->where('post.hidden', '=', '1')
        ->get();
        $post = DB::table('post')
        ->orderBy('created_at','DESC')
        ->limit(4)
        ->get();
        $kygui = DB::table('product')->where('kygui','1')->get();
        $posthot = DB::table('post')
        ->where('hot', '=', '0')
        ->get();
        View::share(compact('catepost','status','product','local','postpp','post','posthot','kygui'));
    }

    function index(){
        $district = DB::table('local')->where('parent_id','!=','0')->get();
        $city = DB::table('local')->where('parent_id','=','0')->get();
        $status = DB::table('status')->get();
        $loai = DB::table('room')->get();
        $all = DB::table('product')
            ->join('local as local1', 'local1.id_local', '=', 'product.id_local1')
            ->join('local as local2', 'local2.id_local', '=', 'product.id_local2')
            ->join('status', 'status.id_status', '=', 'product.id_status')
            ->join('room', 'room.id_room', '=', 'product.id_room')
            ->select('local1.*', 'local2.*', 'product.*', 'room.*', 'status.*', 'room.name AS name_room', 'local1.name AS name_local1','local2.name AS name_local2', 'product.name AS name_product')
            ->get();
    
        $sell = DB::table('product')
            ->join('local as local1', 'local1.id_local', '=', 'product.id_local1')
            ->join('local as local2', 'local2.id_local', '=', 'product.id_local2')
            ->join('status', 'status.id_status', '=', 'product.id_status')
            ->join('room', 'room.id_room', '=', 'product.id_room')
            ->select('local1.*', 'local2.*', 'product.*', 'room.*', 'status.*', 'room.name AS name_room', 'local1.name AS name_local1','local2.name AS name_local2', 'product.name AS name_product')
            ->where('product.id_status','=','2')
            ->get();
        $lease = DB::table('product')
            ->join('local as local1', 'local1.id_local', '=', 'product.id_local1')
            ->join('local as local2', 'local2.id_local', '=', 'product.id_local2')
            ->join('status', 'status.id_status', '=', 'product.id_status')
            ->join('room', 'room.id_room', '=', 'product.id_room')
            ->select('local1.*', 'local2.*', 'product.*', 'room.*', 'status.*', 'room.name AS name_room', 'local1.name AS name_local1','local2.name AS name_local2', 'product.name AS name_product')
            ->where('product.id_status','=','1')
            ->get();
        $leaseandsell = DB::table('product')
            ->join('local as local1', 'local1.id_local', '=', 'product.id_local1')
            ->join('local as local2', 'local2.id_local', '=', 'product.id_local2')
            ->join('status', 'status.id_status', '=', 'product.id_status')
            ->join('room', 'room.id_room', '=', 'product.id_room')
            ->select('local1.*', 'local2.*', 'product.*', 'room.*', 'status.*', 'room.name AS name_room', 'local1.name AS name_local1','local2.name AS name_local2', 'product.name AS name_product')
            ->where('product.id_status','=','3')
            ->get();
        
        return view('client.clients.index', compact('all', 'sell','lease','leaseandsell','district','city','loai','status'));
    }
    public function search(Request $request)
    {
        // Retrieve the values selected in the form's dropdowns.
        $city = $request->input('city');
        $district = $request->input('district');
        $status = $request->input('status');
        $loai = $request->input('loai');

        // Perform the search using your model. Modify this as per your database structure.
        $results = DB::table('product')
        ->join('local as local1', 'local1.id_local', '=', 'product.id_local1')
            ->join('local as local2', 'local2.id_local', '=', 'product.id_local2')
            ->join('status', 'status.id_status', '=', 'product.id_status')
            ->join('room', 'room.id_room', '=', 'product.id_room')
            ->select('local1.*', 'local2.*', 'product.*', 'room.*', 'status.*', 'room.name AS name_room', 'local1.name AS name_local1','local2.name AS name_local2', 'product.name AS name_product')
            ->where('product.id_local1', $city)
            ->where('product.id_local2', $district)
            ->where('product.id_status', $status)
            ->where('product.id_room', $loai)
            ->get();

        // Pass the results to a view to display them.
        return view('client.clients.search', compact('results'));
    }
    function gioithieu(){
        return view('client.clients.about');
    }
    function baiviet(string $ctSlug){
        
        $cateID = DB::table('cate_post')->where('catep_slug',$ctSlug)->value('id_cp');
        if($cateID == null) 
        return redirect('/')->with('alert', 'Sản phẩm không tồn tại ở cửa hàng chúng tôi! Mời bạn tham khảo các sản phẩm khác!');
        $postpb = DB::table('post')
        ->join('cate_post','cate_post.id_cp','post.id_cp')
        ->select('post.*','cate_post.*','post.created_at AS ngaydang')
        ->orderBy('ngaydang','desc')
        ->limit(4)->get();


        $postmain = DB::table('post')
        ->join('cate_post','cate_post.id_cp','post.id_cp')
        ->where('post.id_cp',$cateID)
        ->select('post.*','cate_post.*','post.created_at AS ngaydang')
        ->get();

        $postnoibat = DB::table('post')->orderBy('created_at','desc')->limit(10)->get();

        return view('client.clients.blog',compact('postmain','postpb','postnoibat'));
    }
    function baiviets(){
        
       
        $postpb = DB::table('post')
        ->join('cate_post','cate_post.id_cp','post.id_cp')
        ->select('post.*','cate_post.*','post.created_at AS ngaydang')
        ->orderBy('ngaydang','desc')
        ->limit(4)->get();


        $postmain = DB::table('post')
        ->join('cate_post','cate_post.id_cp','post.id_cp')
        ->select('post.*','cate_post.*','post.created_at AS ngaydang')
        ->get();

        $postnoibat = DB::table('post')->orderBy('created_at','desc')->limit(10)->get();

        return view('client.clients.blogmain',compact('postmain','postpb','postnoibat'));
    }
    function baivietdetail(string $ctSlug,string $postSlug = ''){
        
        $postId = DB::table('post')->where('slug', $postSlug)->value('id_post');
        
        $cateID = DB::table('cate_post')->where('catep_slug',$ctSlug)->value('id_cp');

        if($postId == null && $cateID == null) 
        return redirect('/')->with('alert', 'Sản phẩm không tồn tại ở cửa hàng chúng tôi! Mời bạn tham khảo các sản phẩm khác!');

        $postDetail = DB::table('post')->where('id_post',$postId)->first();
        
        $postlq = DB::table('post')
        ->join('cate_post','cate_post.id_cp','post.id_cp')
        ->where('post.id_cp',$cateID)
        ->select('post.*','cate_post.*','post.created_at AS ngaydang')
        ->limit(10)->get();
       

        return view('client.clients.blog-single', compact('postDetail','postlq'));
    }
    function duan(){
        $project = DB::table('product')
        ->join('local as local1', 'local1.id_local', '=', 'product.id_local1')
        ->join('local as local2', 'local2.id_local', '=', 'product.id_local2')
        ->join('status', 'status.id_status', '=', 'product.id_status')
        ->join('room', 'room.id_room', '=', 'product.id_room')
        ->select('local1.*', 'local2.*', 'product.*', 'room.*', 'status.*', 'room.name AS name_room', 'local1.name AS name_local1','local2.name AS name_local2', 'product.name AS name_product')
        ->where('hide','=','1')
        ->get();

        $developing = DB::table('product')
        ->join('local as local1', 'local1.id_local', '=', 'product.id_local1')
        ->join('local as local2', 'local2.id_local', '=', 'product.id_local2')
        ->join('status', 'status.id_status', '=', 'product.id_status')
        ->join('room', 'room.id_room', '=', 'product.id_room')
        ->select('local1.*', 'local2.*', 'product.*', 'room.*', 'status.*', 'room.name AS name_room', 'local1.name AS name_local1','local2.name AS name_local2', 'product.name AS name_product')
        ->where('progress','0')
        ->get();

        $complete = DB::table('product')
        ->join('local as local1', 'local1.id_local', '=', 'product.id_local1')
        ->join('local as local2', 'local2.id_local', '=', 'product.id_local2')
        ->join('status', 'status.id_status', '=', 'product.id_status')
        ->join('room', 'room.id_room', '=', 'product.id_room')
        ->select('local1.*', 'local2.*', 'product.*', 'room.*', 'status.*', 'room.name AS name_room', 'local1.name AS name_local1','local2.name AS name_local2', 'product.name AS name_product')
        ->where('progress','1')
        ->get();

        return view('client.clients.duan',compact('project','complete','developing'));
    }
    function duandetail(string $proSlug){

        $proID = DB::table('product')->where('slug',$proSlug)->value('id_pro');

        if($proID == null) 
        
        return redirect('/')->with('alert', 'Sản phẩm không tồn tại ở cửa hàng chúng tôi! Mời bạn tham khảo các sản phẩm khác!');

        $project = DB::table('product')
        ->join('local as local1', 'local1.id_local', '=', 'product.id_local1')
        ->join('local as local2', 'local2.id_local', '=', 'product.id_local2')
        ->join('status', 'status.id_status', '=', 'product.id_status')
        ->join('room', 'room.id_room', '=', 'product.id_room')
        ->select('local1.*', 'local2.*', 'product.*', 'room.*', 'status.*', 'room.name AS name_room', 'local1.name AS name_local1','local2.name AS name_local2', 'product.name AS name_product')
        ->where('id_pro',$proID)
        ->first();

        return view('client.clients.duan-single',compact('project'));
    }
    function tuyendung(){
        return view('client.clients.tuyendung');
    }
    function lienhe(){
        return view('client.clients.contact');
    }
    function masterisecentralpoint(){
        return view('client.kygui.MASTERISECENTERPOINT');
    }
    function lumiereboulevard(){
        return view('client.kygui.lumiere-boulevard');
    }
    function kygui(){
        return view('client.kygui.kygui');
    }
    function lumimeRiverside(){
        return view('client.kygui.Lumiere-Riverside');
    }
    function delasol(){
        return view('client.kygui.delasol');
    }
    function themarq(){
        return view('client.kygui.themarq');
    }
    
}
