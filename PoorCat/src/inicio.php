<?php include("functions/connection.php")?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
    <link rel="icon" href="img/icon.png" type="image/png"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<img src="img/icon.png" width="30" height="60" class="d-inline-block align-top" alt="poorcat">
	<a class="navbar-brand" href="./inicio.php">PoorCat</a>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categoria
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./todas_categorias.php">Listar</a>
                    <a class="dropdown-item" href="./cadastro_categoria.php">Criar</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gastos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./historico_gastos.php">Histórico</a>
                    <a class="dropdown-item" href="./cadastro_gastos.php">Criar</a>
                </div>
            </li>
        </ul>
        
    </div>
</nav>
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <h2>Bem vindo, @Usuário!</h2>
                    <p>Como vai?</p>    
                </div>
                <div class="col">
                    <img src="img/Free_Image_on_Pixabay_-_Cat__Laughing__Grinning__Evil-removebg-preview.png" style="width: 280px;"> 
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
        <div class="card">
        <div class="card-header">
            Informações Importantes!
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p>@Usuário, há algumas informações que você deve estar ligado:</p>
            <li>Seu inicio de mês contabil: 5º dia útil.</li>
            <li>Saldo atual: R$1000,00</li><br>
            <footer class="blockquote-footer">Acesse o meunu para visualizar<cite title="Source Title">Source Title</cite></footer>
        </blockquote>
  </div>
</div>

        </div>
    </div>
    
 <!-- Footer -->
 <br><br><br><br>
    <?php include("footer.php")?>
    <?php include("scripts.php")?>
    
</body>
</html>