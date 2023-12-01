<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projeto Laravel</title>

    <link rel="icon" href="{{ asset('img/Logotipo_Branco_Preto.png') }}" type="image/x-icon" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
</head>
<body>
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="{{ asset('img/Logotipo_Preto_Branco-removebg-preview.png') }}" alt="" width="300" height="">
                <h1 class="display-5 fw-bold text-body-emphasis">Projeto Laravel</h1>
                    <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">{{$mensagem}}.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-success" href="{{ route('produtos.index')}}"><i class="bi bi-basket"></i> Voltar a lista</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
