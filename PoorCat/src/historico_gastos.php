<?php include("functions/connection.php")?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
    <link rel="icon" href="img/icon.png" type="image/png"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Histórico de Gastos</title>
    <?php 
        include("navbar.php");
        $sig_cat = filter_input(INPUT_GET, "sig_cat");
        $todos = filter_input(INPUT_GET, "todos");
        if($sig_cat){
            $dados = mysqli_query($connection, "SELECT g.cod, g.sig_cat, g.nome, g.valor, g.data_gasto FROM gasto g where sig_cat = '$sig_cat';");
        } else{
            $dados = mysqli_query($connection, "SELECT * FROM gasto;");
        }
        if($todos){
            $dados = mysqli_query($connection, "SELECT * FROM gasto;");
        }
        
        $linha = mysqli_fetch_assoc($dados);
        $total = mysqli_num_rows($dados);
    ?>
</head>
<body>

    
        <div class="container mt-4">
        <h1>Histórico de Gastos</h1>
        <!-- Filtro -->
        <div class="mb-3">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="col-md-1">
            <select class="form-select" style="width: 150px;" name="sig_cat" id="sig_cat">
                <option value ="categoria">Categoria</option>
                <?php 
                    $query = mysqli_query($connection, "SELECT * FROM categoria;");
                    while($exibe = mysqli_fetch_array($query)){
                ?>
                    <option value="<?php echo $exibe[0]?>"><?php echo $exibe[0]?></option>
                <?php } ?>
            </select></br>
            </div>
            <button type="submit" id="filtro" name="filtro" value="Filtrar">Filtrar</button></br></br>
            <button type="submit" id="todos" name="todos" value="Todos">Listar Todos</button>
            </form>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">CATEGORIA</th>
                        <th scope="col">VALOR</th>
                        <th scope="col">DATA</th>
                        <th scope="col">DESCRIÇÃO</th>
                        <th scope="col">EXCLUIR</th>
                        <th scope="col">EDITAR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php 
                        if($total){
                            do{       
                    ?>
                        <tr>
                            <td><?php echo $linha['sig_cat']?></td>
                            <td><?php echo $linha['valor']?></td>
                            <td><?php echo $linha['data_gasto']?></td>
                            <td><?php echo $linha['nome']?></td>
                            <td><a href="functions/delete_gasto.php?idu='<?php echo $linha['cod'];?>'">X</a></td>
                            <td><a href="atualiza_gasto.php?idu='<?php echo $linha['cod'];?>'">X</a></td>
                        </tr>
                    <?php 
                        } while($linha = mysqli_fetch_assoc($dados));
                        mysqli_free_result($dados);
                        }
                    ?>
                    
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <?php include("footer.php")?>
    <?php include("scripts.php")?>
</body>
</html>