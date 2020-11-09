<?php

namespace App\Http\Controllers;
use App\Detalle;
use Illuminate\Http\Request;
use App\Http\Requests\Detalles as DetalleRequests;

class DetalleController extends Controller
{
    //
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $detalles;

    public function __construct (Detalle $detalles){
        $this->detalles = $detalles;
    }





    public function index()
    {
        //
        $detalles= Detalle::all();
        return response()->json(['detalles'=> $detalles]);
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
    public function store(DetalleRequests $request)
    {
        //
        $detalles=$this->detalles->create($request->all());
        return response()->json($detalles);
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
        $detalles =Detalle::find($id);
        return $detalles;
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
    public function update(DetalleRequests $request, $id)
    {
        //
        $detalles=Detalle::find($id);
        $detalles->update($request->all());
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
        $detalles =Detalle::find($id);
        $detalles->delete();
        return response()->json('se elimino correctamente');
    }
}
