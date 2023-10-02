<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        
        $role = DB::table('roles')
            ->get();
        View::share(compact('role'));
    }


    public function index()
    {
        $user = DB::table('users')
        ->join('roles','users.role_id','=','roles.id')
        ->select('users.*','roles.*', 'roles.name as name_role','users.name as name_users')
        ->get();
        return view('admin.manage.user.list',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manage.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = trim(strip_tags($request['name']));
        $user->phone = $request['phone'];
        $user->address = $request['address'];
        $user->role_id = (int) $request['role_id'];
        $user->email = $request['email'];
        $user->password = $request['password'];


        if ($request->hasFile('img__new')) {
            $file = $request->file('img__new');
            $extension = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extension;
            $file->move('admin/uploads/images/users/', $file_name);
            $user->img = 'admin/uploads/images/users/' . $file_name;
        }

        $user->save();

        return redirect(route('user.index'))->with('thongbao', 'Thêm người dùng thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $user = DB::table('users')->where('id_user', $id)->first();
        if ($user==null){
            $request->session()->flash('thongbao','Không có user này: '. $id);
            return redirect('/dashboard/user');
        }
        return view('admin.manage.user.update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name = trim(strip_tags($request['name']));
        $user->phone = $request['phone'];
        $user->address = $request['address'];
        $user->role_id = (int) $request['role_id'];
        $user->email = $request['email'];
        $user->password = $request['password'];


        if ($request->hasFile('img__new')) {
            $file = $request->file('img__new');
            $extension = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extension;
            $file->move('admin/uploads/images/users/', $file_name);
            $user->img = 'admin/uploads/images/users/' . $file_name;
        }

        $user->save();

        return redirect(route('user.index'))->with('thongbao', 'Sửa người dùng thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $sosp = \DB::table('users')->where('id_user', $id)->count();
        if ($sosp==0) {
            $request->session()->flash('thongbao','User phẩm không tồn tại');
            return redirect('/dashboard/user');
        }
        \DB::table('users')->where('id_user', $id)->delete();
        $request->session()->flash('thongbao', 'Đã xóa user');
        return redirect('/dashboard/user');
    }
}
