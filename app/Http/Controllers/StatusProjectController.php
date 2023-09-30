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
        return view('admin.manage.statusproject.list');
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
        $name = $request['name'];
        $hidden = $request['hidden'];

        DB::table('status')
        ->insert([
            'name'=> $name,
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
    public function edit(string $id)
    {
        return view('admin.manage.statusproject.update');
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
