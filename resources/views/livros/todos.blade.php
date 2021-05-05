<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vitrine de livros</title>
</head>
    <body>
        <table>
        <tr><th>Titulo</th><th>Autor</th><th>Nome</th><th>Preço</th><th>Data Locação</th><th></th><th></th></tr>
        @foreach($livros as $livro)
            <tr>
                <td>{{$livro->Titulo}}</td>
                <td>{{$livro->autor}}</td>
                <td>{{$livro->nome}}</td>
                <td>{{$livro->preco}}</td>
                <td>{{$livro->data_locacao}}</td>
                <td><a href="{{ route('editar_livro', ['id'=>$livro->id])}}"
                        title="Editar livro {{ $livro->nome }}" >Editar</a></td>
                        
                <td><a href="{{ route('excluir_livro', ['id'=>$livro->id])}}"
                        title="Excluir livro {{ $livro->nome }}" >Excluir</a></td>
            </tr>
        @endforeach
    </body>
</html>