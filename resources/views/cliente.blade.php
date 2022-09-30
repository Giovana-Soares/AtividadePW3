@extends('template/default') 
@section('content') 

    <section class= "title">
        <h1>Cliente</h1>
    </section>

    <section class = "sec"> 
        <form action="{{url('/cliente/inserir')}}" method="post">
            {{csrf_field()}}
            <div class = "form-group">
                <input class = "form-control"  type="text" name="txNome" placeholder="Nome" value= ""/>
            </div>
            <div class = "form-group">
                <input class = "form-control "  type=date  name="txDataNasc" placeholder="Data de nascimento" value= />
            </div>
            <div class = "form-group">
                <input class = "form-control "  type="text" name="txEstadoCivil" placeholder="Estado Civil" value="" />
            </div>
            <!-- <div>
                <input type="text" name="txLogardouro" placeholder="Logradouro" value= ""/>
            </div> -->
            <div class = "form-group">
                <input class = "form-control "  type="number" name="txNum" placeholder="Numero" value="" />
            </div>
            <div class = "form-group">
                <input  class = "form-control " type="text" name="txComple" placeholder="Complemento" value= ""/>
            </div>
            <div class = "form-group">
                <input class = "form-control" type="number" name="txCep" placeholder="CEP" value="" />
            </div>
            <div class = "form-group">
                <input class = "form-control" type="text" name="txCidade" placeholder="Cidade" value= ""/>
            </div>
            <div class = "form-group">
                <input class = "form-control" type="text" name="txEstado" placeholder="Estado" value= ""/>
            </div>
            <div class = "form-group">
                <input class = "form-control" type="number" name="txRg" placeholder="RG" value="" />
            </div>
            <div class = "form-group">
                <input class = "form-control" type="number" name="txCpf" placeholder="CPF" value="" />
            </div>
            <div class = "form-group">
                <input class = "form-control" type="text" name="txEmail" placeholder="E-mail" value= ""/>
            </div>
            <div class = "form-group">
                <input class = "form-control" type="number" name="txTelefone" placeholder="Telefone" value="" />
            </div>
            <div class = "form-group">
                <input class = "form-control" type="number" name="txCelular" placeholder="Ceular" value="" />
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
    <br/>
    <br/>
    <br/>
    <br/>    
    <br/>
    <br/>
    <br/>
    <br/>
   
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Nome:    </th>
            <th scope="col">id:</th>
            <th scope="col">Data de nascimento:    </th>
            <th scope="col">Estado Civil:    </th>
            <th scope="col">Numero:    </th>
            <th scope="col">Complemento:    </th>
            <th scope="col">CEP:    </th>
            <th scope="col">Cidade:    </th>
            <th scope="col">Estado:    </th>
            <th scope="col">RG:    </th>
            <th scope="col">CPF:    </th>
            <th scope="col">E-MAIL:    </th>
            <th scope="col">Telefone:    </th>
            <th scope="col">Celular:    </th>
            </tr>
        </thead>
        <tbody>
        @foreach($cliente as $c)
            <tr>
            <th scope="row">{{$c-> idCliente}}</th>
            <td> {{$c-> Nome}} </td>
            <td> {{$c-> DtNasc}} </td> 
            <td> {{$c-> EstadoCivil}} </td>
            <td> {{$c-> Numero}} </td>
            <td> {{$c-> Complemento}} </td>
            <td> {{$c-> Cep}} </td>
            <td> {{$c-> Cidade}} </td>
            <td> {{$c-> Estado}} </td>
            <td> {{$c-> Rg}} </td>
            <td> {{$c-> Cpf}} </td>
            <td> {{$c-> Email}} </td>
            <td> {{$c-> Fone}} </td>
            <td> {{$c-> Celular}} </td>
            <td>
                <a href="/cliente/{{$c->idCliente}}"> Excluir </a>                 
            </td>
            </tr>
            
        @endforeach
        </tbody>
    </table>    

@endsection