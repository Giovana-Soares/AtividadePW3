@extends('template/default') 
@section('content') 
<div>

    <section class= "title">
        <h1>Pedido</h1>
    </section>

    <section> 
        <form action="{{url('/pedido/inserir')}}" method="post">
            {{csrf_field()}}
            <div class = "form-group">
                <input class = "form-control" type=date name="txData" placeholder="Data do pedido" value=/>
            </div>
            <div class = "form-group">
                <input class = "form-control" type=number  name="txIdCliente" placeholder="Id Cliente" value= />
            </div>
            <div class = "form-group">
                <input class = "form-control" type=number name="txIdProduto" placeholder="Id do Produto" value="" />
            </div>
            <div class = "form-group">
                <input class = "form-control" type="bool" name="txEstado" placeholder="Estado do pedido" value="" />
            </div>
            
            <div>
                <!-- <input type="submit" value="Salvar" /> -->
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </section>

<br/>
<br/>
<br/>
<br/>
<br/>

<table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Data</th>
            <th scope="col">IdCliente</th>
            <th scope="col">idProduto</th>
            <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pedido as $c)
            <tr>
            <th scope="row">{{$c-> idPedido}}</th>
            <td>{{$c-> data}}</td>
            <td>{{$c-> idCliente}} </td>
            <td>{{$c-> idProduto}}</td>
            <td>{{$c-> estado}}</td>
            <td>
                <a href="/pedido/{{$c->idPedido}}"> Excluir </a>                 
            </td>
            </tr>
            
        @endforeach
        </tbody>
    </table>   
</div>
@endsection