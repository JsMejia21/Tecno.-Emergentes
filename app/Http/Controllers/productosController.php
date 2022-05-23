<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataproduct=productos::all();
        return view('productos.index', compact('dataproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'imaProd' => 'required|image|mimes:jpeg,png,jpg|max:1024'
        ]);

        $dataProducts = $request->all();

         if($request->hasfile('imaProd')) {
             $imagen = $request->file('imaProd');
             $rutaGuardarImg = "img/";
             $imagenNombre = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $uploadSuccess = $request->file('imaProd')->move($rutaGuardarImg, $imagenNombre);
             $nombre = $rutaGuardarImg . $imagenNombre;
             $dataProducts['imaProd'] = $nombre;           
         }
        //var_dump($nombre );
        //var_dump($dataProducts['imaProd'] );
        
        $dataProducts = $request->except('_token','saveitem');
        productos::insert($dataProducts);
        //return response()->json($dataProducts);
        return redirect('productos/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(productos $productos, $id)
    {
        $productos = productos::findOrFail($id);
        return view('productos.edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataProducts = $request->all();

        if($imagen = $request->file('imaProd')) {
            $rutaGuardarImg = 'img/';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $dataProducts['imaProd'] = "$imagenProducto";             
        }else{
            unset($dataProducts['imaProd']);
         }

        $dataProducts = productos::findOrFail($id);
        $dataProducts->update($request->all());
        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataprod = productos::find($id);
        $dataprod->delete();
        return redirect('productos/');
    }
}
