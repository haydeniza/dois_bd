<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Duas Bases</title>
</head>
<body>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <th>{{ $products->id }}</th>
                    <td>{{ $products->name }}</td>
                    <td>

                    </td>
                </tr>
            @empty
                <div>Nenhum Produto encontrado!</div>
            @endforelse

        </tbody>
    </table>

</body>
</html>
