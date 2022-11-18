@extends('template/default') 
@section('content') 

<div>
    <section class= "title">
        <h1>Produto</h1>
    </section>

    <section> 
        <form action="{{url('/produtoEditar/'.$produtos->idProduto)}} " method="post">
            {{csrf_field()}}
            <div class = "form-group">
                <input class = "form-control" type=number id = "txIdProduto" name="txIdProduto" placeholder="Id Produto" value= "{{$produtos->idProduto}}" />
            </div>
            <div class = "form-group">
                <input class = "form-control" type=number id= "txIdCategoria" name="txIdCategoria" placeholder="Id Categoria" value= "{{$produtos->idCategoria}}" />
            </div>
            <div class = "form-group">
                <input class = "form-control" type="text" name="txProduto" placeholder="Produto" value="{{$produtos->produto}}" />
            </div class = "form-group">
            <div>
                <input class = "form-control" type="number" name="txValor" placeholder="Valor" value="{{$produtos->valor}}" />
            </div class = "form-group">

            <div>
                <!-- <input class="btn btn-primary btn-lg" type="submit" value="Salvar" /> -->
                <button type="submit" class="btn btn-success" >Cadastrar</button>    
            </div>
        </form>
    </section>

@endsection