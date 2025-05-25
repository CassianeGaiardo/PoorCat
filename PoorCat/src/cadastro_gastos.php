<?php include("functions/connection.php")?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
    <link rel="icon" href="img/icon.png" type="image/png"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <title>Cadastro de Gastos</title>
</head>
<body>
    <?php include("navbar.php")?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <h1>Cadastro de Gastos</h1>
                <form   method="POST" action="functions/insere_gasto.php">
                    <!-- Pesquisa -->
                    <div class="mb-3">
                        <div class="dropdown">
                        <select class="form-select" name="sig_cat" id="sig_cat" style="width: 150px;" required>
                                <option value ="categoria">Categoria</option>
                                <?php 
                                    $query = mysqli_query($connection, "SELECT * FROM categoria;");
                                    while($exibe = mysqli_fetch_array($query)){
                                ?>
                                <option value="<?php echo $exibe[0]?>" name="sig_cat" id="sig_cat"><?php echo $exibe[0]?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <input type="text" id="nome" name="nome" placeholder="Nome do Gasto" pattern="[Aa-Zz]{6,16}" required>
                    <input type="date" id="data_gasto" name="data_gasto" placeholder="data_gasto"  required>
                    <input type="text" id="valor" name="valor" placeholder="Valor Gasto" pattern="[0-9]+$" required>
                    <button type="submit" id="btn1"><a href="functions/insere_gasto.php"></a>Cadastrar</button>
                   
                </form>
                <a href="historico_gastos.php" style = "text-decoration: none; color: white;"> <button type="submit" id="btn1">Histórico</button></a>                    
                
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
    &copy; <?php echo date("Y"); ?> PoorCat
    </footer>

    <?php include("scripts.php")?>
</body>
</html>