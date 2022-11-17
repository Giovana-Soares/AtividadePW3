@extends('template/default') 
@section('content') 

<script>
        function obterDados(){
            // alert("Teste");

            var id = document.getElementById("txIdProduto").value;          
            var idCategoria = document.getElementById("txIdCategoria").value;

            if (id<=0){
                alert("O id do produto deve ser maior que zero");
            }
            else{
                if(idCategoria<=0){
                    alert("O id da categoria deve ser maior que zero");
                }
            }
        }
</script>

<div>
    <section class= "title">
        <h1>Produto</h1>
    </section>

    <section> 
        <form action="{{url('/produto/inserir')}}" method="post">
            {{csrf_field()}}
            <div class = "form-group">
                <input class = "form-control" type=number id = "txIdProduto" name="txIdProduto" placeholder="Id Produto" value=/>
            </div>
            <div class = "form-group">
                <input class = "form-control" type=number id= "txIdCategoria" name="txIdCategoria" placeholder="Id Categoria" value= />
            </div>
            <div class = "form-group">
                <input class = "form-control" type="text" name="txProduto" placeholder="Produto" value="" />
            </div class = "form-group">
            <div>
                <input class = "form-control" type="number" name="txValor" placeholder="Valor" value="" />
            </div class = "form-group">

            <div>
                <!-- <input class="btn btn-primary btn-lg" type="submit" value="Salvar" /> -->
                <button type="submit" class="btn btn-success" onclick="obterDados()">Cadastrar</button>    
            </div>
        </form>
    </section>

    <br />
    <br />

    <table class="table table-striped">
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
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection