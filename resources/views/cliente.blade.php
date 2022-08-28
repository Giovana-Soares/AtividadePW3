@extends('template/default') 
@section('content') 

<div>    
    <section class= "title">
        <h1> Cadastro Cliente </h1>
    </section>

    <form id="form" class="form">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome"/>
        </div>

        <div>
            <label for="dataNasc">Data de Nascimento:</label>
            <input type="text" id="dataNasc"/>
        </div>

        <div>
            <label for="estadoCivil">Estado Civil:</label>
            <select name="estado_civil" id="estadoCivil">
                <option value="">  </option>
                <option value="casado"> Casado </option>
                <option value="solteiro"> Solteiro </option>
                <option value="viuvo"> Viúvo </option>
                <option value="divorciado"> Divorciado </option>
            </select>
        </div>

        <div>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" />
        </div>

        <div>
            <label for="number">Número:</label>
            <input type="text" id="number" />
        </div>

        <div>
            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" />
        </div>

        <div>
            <label for="cep">CEP: </label>
            <input type="text" id="cep" />
        </div>

        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" />
        </div>

        <div>
            <label for="estado">Estado:</label>
            <select name="estado">
                <option value=""> </option>
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amapá">Amapá</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Distrito Federal">Distrito Federal</option>
                <option value="Espírito Santo">Espírito Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Pará">Pará</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Paraná">Paraná</option>
                <option value="Pernambuco">Pernambuco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Sergipe">Sergipe</option>
                <option value="Tocantins">Tocantins</option>
            </select>
        </div>

        <div>
            <label for="rg">RG:</label>
            <input type="text" id="rg" />
        </div>

        <div>
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" />
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" />
        </div>

        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" />
        </div>

        <div>
            <label for="celular">Celular:</label>
            <input type="text" id="celular" />
        </div>

    </form>
</div>
    
@endsection