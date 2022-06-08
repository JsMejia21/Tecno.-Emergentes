<?php

namespace App\Http\Controllers;

use App\Models\ventas;
use Illuminate\Http\Request;

class ventasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataproduct=ventas::all();
        return view('ventas.indexvent', compact('dataproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.createvent');
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
        ventas::insert($dataProducts);
        //return response()->json($dataProducts);
        return redirect('ventas/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show(ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = ventas::findOrFail($id);
        return view('ventas.editvent', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos = ventas::findOrFail($id);
        $productos->update($request->all());
        return redirect('ventas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataprod = ventas::find($id);
        $dataprod->delete();
        return redirect('ventas/');
    }
}
