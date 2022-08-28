@extends('template/default') 
@section('content') 

<div class="container">
    
    <section class= "title">
        <h1>Pedido</h1>
    </section>

    <form id="form" class="form">
        <div class="form-control">
            <label for = "data_pedido"> Data do Pedido: </label>
            <input type="date"  id="data_pedido"/> 
        </div>

        <div class="form-control">
            <label for="status"> Status: </label>
            <select>
                <option values=""> </option>
                <option values="true"> Ativo </option>
                <option values="false"> Inativo </option>
            </select>
        </div>  
    </form>

</div>

@endsection