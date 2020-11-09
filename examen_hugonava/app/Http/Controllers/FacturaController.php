<?php

namespace App\Http\Controllers;
use App\Factura;
use Illuminate\Http\Request;
use App\Http\Requests\Facturas as FacturaRequests;

class FacturaController extends Controller
{
    //
 //
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $facturas;

    public function __construct (Factura $facturas){
        $this->facturas = $facturas;
    }





    public function index()
    {
        //
        $facturas= Factura::all();
        return response()->json(['facturas'=> $facturas]);
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
    public function store(FacturaRequests $request)
    {
        //
        $facturas=$this->facturas->create($request->all());
        return response()->json($facturas);
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
        $facturas =Factura::find($id);
        return $facturas;
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
    public function update(FacturaRequests $request, $id)
    {
        //
        $facturas=Factura::find($id);
        $facturas->update($request->all());
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
        $facturas =Factura::find($id);
        $facturas->delete();
        return response()->json('se elimino correctamente');
    }

}
