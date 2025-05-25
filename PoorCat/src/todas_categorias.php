<?php include("functions/connection.php")?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
    <link rel="icon" href="img/icon.png" type="image/png"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Histórico de Categoria</title>
</head>
<body>

    <?php include("navbar.php")?>
    <!-- Content Container -->
    <div class="container mt-4">
        <h1>Histórico de Categoria</h1>
        <!-- Table to Display Categories -->

        <table class="table">
            <thead>
                <tr>
                    <th>SIGLA</th>
                    <th>NOME</th>
                    <th>SALDO</th>
                    <th>TETO</th>
                    <th>Excluir</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($connection, "SELECT * FROM categoria;");
                    while($exibe = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $exibe[0]?></td>
                    <td><?php echo $exibe[1]?></td>
                    <td><?php echo $exibe[2]?></td>
                    <td><?php echo $exibe[3]?></td>
                    <!--falta editar botao-->
                    <td><a href="functions/delete_categoria.php?idu='<?php echo $exibe[0]?>'">X</a></td>
                    <td><a href="atualiza_categoria.php?idu='<?php echo $exibe[0]?>'">X</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php include("footer.php")?>
    <?php include("scripts.php")?>
</body>

</html>
