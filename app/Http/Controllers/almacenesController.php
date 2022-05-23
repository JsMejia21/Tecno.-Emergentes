<?php

namespace App\Http\Controllers;

use App\Models\almacenes;
use Illuminate\Http\Request;

class almacenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataproduct=almacenes::all();
        return view('almacenes.indexalma', compact('dataproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacenes.createalma');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataProducts = $request->except('_token','saveitem');
        almacenes::insert($dataProducts);
        //return response()->json($dataProducts);
        return redirect('almacenes/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\almacenes  $almacenes
     * @return \Illuminate\Http\Response
     */
    public function show(almacenes $almacenes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\almacenes  $almacenes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = almacenes::findOrFail($id);
        return view('almacenes.editalma', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\almacenes  $almacenes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos = almacenes::findOrFail($id);
        $productos->update($request->all());
        return redirect('almacenes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\almacenes  $almacenes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataprod = almacenes::find($id);
        $dataprod->delete();
        return redirect('almacenes/');
    }
}
