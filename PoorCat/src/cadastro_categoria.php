<?php include("functions/connection.php")?>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
        <link rel="icon" href="img/icon.png" type="image/png"></link>
        <title>Cadastro Categoria</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <?php include("navbar.php")?>
        <form method="POST" action="functions/insere_categoria.php">
            <div class="form">
                <h3>CADASTRAR</h3>
                <input type="text" id="nome" name="nome" placeholder="Titulo da Categoria" pattern="[Aa-Zz]{6,16}" required><br><br>
                <input type="text" id="teto" name="teto" placeholder="Teto" pattern="[0-9]+$" required><br><br>
                <button id="btn1"><a href="functions/insere_categoria.php"></a>Cadastrar</button>
            </div>

        </div>
    </div>

    <?php include("footer.php")?>

    <?php include("scripts.php")?>
</body>
</html>