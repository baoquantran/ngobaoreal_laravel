<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use App\Http\Requests\ReProduct;
use Session;
use DB;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $status = DB::table('status')
         ->get();

         $room = DB::table('room')
         ->get();
         \View::share(compact('room','status'));
     }

    public function index()
    {
        $project = DB::table('product')
    ->join('room', 'product.id_room', '=', 'room.id_room')
    ->join('status', 'product.id_status', '=', 'status.id_status')
    ->select('product.id_pro', 'product.img', 'product.name', 'product.address', 'room.name AS name_room', 'name_status','product.kygui')
    ->get();
        return view('admin.manage.project.list',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

       
        
        return view('admin.manage.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pro = new ProductModel;
        $pro->name = trim(strip_tags($request['name']));
        $pro->address = $request['address'];
        $pro->slug = $request['slug'];
        $pro->from_price =  (int)$request['from_price'];
        $pro->to_price =  (int)$request['to_price'];
        $pro->hide =  (int)$request['hide'];
        $pro->id_room = $request['id_room'];
        $pro->id_status = $request['id_status'];
        $pro->tongquan = $request['tongquan'];
        $pro->vitri = $request['vitri'];
        $pro->tienich = $request['tienich'];
        $pro->matbang = $request['matbang'];
        $pro->thanhtoan = $request['thanhtoan'];
        $pro->kygui = $request['kygui'];
  
        if($request->hasFile('img__new'))
        {
            $file = $request->file('img__new');
            $extension = $file->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            $file->move('admin/uploads/images/products/', $file_name);
            $pro->img = 'admin/uploads/images/products/'.$file_name;
        }
        
        $pro->save();

        return redirect(route('project.index'))->with('status', 'Thêm sản phẩm thành công');
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
        return view('admin.manage.project.update_project');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
