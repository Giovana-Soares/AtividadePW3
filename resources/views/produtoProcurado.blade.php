@extends('template/default') 
@section('content') 

<div>
    <section class= "title">
        <h1>Produto</h1>
    </section>

    <section  action="{{url('/produto/'.$produto->idProduto)}} " method = "get"> 
        <table class="table table-striped">
        {{csrf_field()}}
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Categoria:    </th>
                <th scope="col">Produto:    </th>
                <th scope="col">Valor:    </th>
                </tr>
            </thead>
            <tbody>
            @foreach($produto as $c)
                <tr>
                <th scope="row">{{$c-> idProduto}}</th>
                <td> {{$c-> Categoria}} </td>
                <td> {{$c-> produto}} </td>
                <td> {{$c-> valor}} </td>
                <td>
                    <a href="/produto/{{$c->idProduto}}"> Excluir </a>                 
                </td>
                <td>
                    <a href="/produto/{{$c->idProduto}}/editar"> Editar </a>                 
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

@endsection