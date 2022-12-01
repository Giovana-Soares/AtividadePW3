@extends('template/default') 
@section('content') 
<div>
    <section class= "title">
        <h1>Categoria</h1>
    </section>

    <section> 
        <form action="{{url('/categoria/inserir')}}" method="post">
            {{csrf_field()}}
<!-- 
            <div class = "form-group">
                <input class = "form-control form-control-lg" type=number name="txIdCategoria" placeholder="ID da Categoria" value= />
            </div> -->

            <div class = "form-group">
                <input class = "form-control form-control-lg" type=text name="txCategoria" placeholder="Nome da Categoria" value= ""/>
            </div>            

            <div>
                <!-- <input class = "form-control" type="submit" value="Salvar" /> -->
                <button type="submit" class="btn btn-success">Cadastrar</button> 
            </div>
        </form>
    </section>


<br/>
<br/>
<br/>

<br/>
<br/>

<section>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nome    </th>
            </tr>
        </thead>
        <tbody>
        @foreach($categoria as $c)
            <tr>
            <th scope="row">{{$c-> idCategoria}}</th>
            <td> {{$c-> Categoria}} </td>
            <td>
                <a href="/categoria/{{$c->idCategoria}}"> Excluir </a>                 
            </td> 
            </tr>
            
        @endforeach
        </tbody>
    </table> 
</section>   
</div>
@endsection