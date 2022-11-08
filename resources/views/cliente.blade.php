@extends('template/default') 
@section('content') 

    <!-- Adicionando Javascript -->
    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
           
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
    
    <section>

    <section class= "title">
        <h1>Cliente</h1>
    </section>

    <!-- Inicio do formulario -->
      <form action="{{url('/cliente/inserir')}}" method="post" >
        {{csrf_field()}}
        <label>Nome:
        <input name="txNome" type="text"  size="60" /></label><br />
        
        <label>Data de nascimento: 
        <input type="date" name="txDataNasc" value="" /></label><br/>
    
        <label>Estado Civil:
        <input type="text" name="txEstadoCivil" value="" /></label><br />

        <label>Cep:
        <input name="txCep"  type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br />
        <label>Numero:
        <input name="txNum" type="number" size="60" /></label><br />
        <label>Complemento:
        <input name="txComple" type="text"  size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />
        <label>RG:
        <input name="txRg" type="text"  size="60" /></label><br />
        <label>CPF:
        <input name="txCpf" type="text"  size="60" /></label><br />
        <label>Email:
        <input name="txEmail" type="text"  size="60" /></label><br />    
        <label>Telefone:
        <input name="txTelefone" type="text"  size="60" /></label><br />
        <label>Celular:
        <input name="txCelular" type="text"  size="60" /></label><br />
        <div>
                <!-- //<input type="submit" value="Salvar" />  -->
                <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
    <section>



    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Nome:    </th>
            <th scope="col">id:</th>
            <th scope="col">Data de nascimento:    </th>
            <th scope="col">Estado Civil:    </th>
            <th scope="col">CEP:    </th>
            <th scope="col">Rua: <th>
            <th scope="col">Numero:    </th>
            <th scope="col">Complemento:    </th>
            <th scope="col">Bairro:    </th>
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
            <td> {{$c-> Cep}} </td>
            <td> {{$c-> Rua}}
            <td> {{$c-> Numero}} </td>
            <td> {{$c-> Complemento}} </td>
            <td> {{$c-> Bairro}} </td>
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
