@extends('template/default') 
@section('content') 
    <div>

    <section class="title">
        <h1>Produto</h1>
    </section>

    <form id="form" class="form">
        <div class="form-control">
            <label for = "tipo_produto"> Produto: </label>
            <input type="text" id="tipo_produto"/> 
        </div>

        <div class="form-control">
            <label for="valor"> Valor: </label>
            <input type="number" step="0.01" name="quantity" id="valor">
        </div> 
    </form>

</div>

@endsection