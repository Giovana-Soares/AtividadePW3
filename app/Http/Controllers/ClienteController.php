<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClienteModel;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = ClienteModel::all();
        return view('cliente',compact('cliente'));
        //
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
    public function store(Request $request)
    {
        $cliente = new ClienteModel();
        $cliente -> idCliente = $request->txIdCliente;
        $cliente -> Nome = $request->txNome;
        $cliente -> DtNasc = $request->txDataNasc;
        $cliente -> EstadoCivil = $request->txEstadoCivil;
        $cliente -> Numero = $request->txNum;
        $cliente -> Complemento = $request->txComple;
        $cliente -> Cep = $request->txCep;
        $cliente -> Cidade = $request->txCidade;
        $cliente -> Estado = $request->txEstado;
        $cliente -> Rg = $request->txRg;
        $cliente -> Cpf = $request->txCpf;
        $cliente -> Email = $request->txEmail;
        $cliente -> Fone = $request->txTelefone;
        $cliente -> Celular = $request->txCelular;
       
        $cliente -> save();

        return redirect("/cliente");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = ClienteModel::where($id,'=',1)->get();
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClienteModel::where('idCliente',$id)->delete();
        return redirect("/cliente");
    }
}
