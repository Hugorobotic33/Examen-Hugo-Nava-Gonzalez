<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\Clientes as ClienteRequests;

class ClienteController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $clientes;

    public function __construct (Cliente $clientes){
        $this->clientes = $clientes;
    }





    public function index()
    {
        //
        $clientes= Cliente::all();
        return response()->json(['clientes'=> $clientes]);
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
    public function store(ClienteRequests $request)
    {
        //
        $clientes=$this->clientes->create($request->all());
        return response()->json($clientes);
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
        $clientes =Cliente::find($id);
        return $clientes;
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
    public function update(ClienteRequests $request, $id)
    {
        //
        $clientes=Cliente::find($id);
        $clientes->update($request->all());
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
        $clientes =Cliente::find($id);
        $clientes->delete();
        return response()->json('se elimino correctamente');
    }
}
