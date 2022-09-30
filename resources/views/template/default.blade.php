<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <header>
        <a href="/"> Home </a>
        <a href="/categoria"> Categoria </a>
        <a href="/cliente"> Cliente </a>
        <a href="/produto"> Produto </a>
        <a href="/pedido"> Pedido </a>
    </header>
   
    @yield("content")

    <!-- caixa de texto com botão de busca -->
    <aside>
        <div id="show">
            <input type="text" id="txtbusca" placeholder="Pesquisar..."/>
            <button id="BotaoBuscar">Buscar</button>
        </div>
    </aside>

    <footer>
        <p> Rodapé &copy; 2022</p>
    </footer>

</body>
</html>