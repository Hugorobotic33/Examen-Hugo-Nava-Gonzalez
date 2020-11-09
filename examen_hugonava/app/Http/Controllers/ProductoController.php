<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\Productos as ProductoRequests;

class ProductoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $productos;

    public function __construct (Producto $productos){
        $this->productos = $productos;
    }





    public function index()
    {
        //
        $productos= Producto::all();
        return response()->json(['productos'=> $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequests $request)
    {
        //
        $productos=$this->productos->create($request->all());
        return response()->json($productos);
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $productos=Producto::find($id);
        return $productos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoRequests $request, $id)
    {
        //
        $productos=Producto::find($id);
        $productos->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $productos =Producto::find($id);
        $productos->delete();
        return response()->json('se elimino correctamente');
    }






    
}
