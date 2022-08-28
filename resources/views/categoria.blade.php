@extends('template/default') 
@section('content') 
<div>
    <section class= "title">
        <h1>Categoria</h1>
    </section>

    <form id="form" class="form">
        <div>
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria">
                <option value="">  </option>
                <option value="eletronicos"> Eletronicos </option>
                <option value="Domesticos"> Domesticos </option>
                <option value="Calçados"> Calçados </option>
                <option value="Roupas"> Roupas </option>
            </select>
        </div>
    </form>
    
</div>
@endsection