<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar novo livro</title>
        <style>
            label{
                float: left;
                display: block;
                width:90px;
            }
        </style>
    </head>
    <body>
        <form action="{{ route('salvar_livro') }}" method="post">
        @csrf
            <div><label for="isbn">Titulo</label><input type="text" name="isbn" id="isbn"></div>
            <div><label for="nome">Nome</label><input type="text" name="nome" id="nome"></div>
            <div><label for="custo">Autor</label><input type="text" name="autor" id="autor"></div>
            <div><label for="preco">Preço</label><input type="text" name="preco" id="preco"></div>
            <div><label for="data_locacao">Data_locação</label><input type="text" name="data_locacao" id="data_locacao"></div>
            <button type="submit">Salvar</button>
        </form> 
    </body>
</html>