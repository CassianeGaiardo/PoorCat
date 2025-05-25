<?php include("functions/connection.php")?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
        <link rel="icon" href="img/icon.png" type="image/png"></link>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>Atualizar Gasto</title>
    </head>
    <body>
        <?php include("navbar.php")?> 
        <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <h1>Atualizar Gasto</h1>
                <?php 
                         
                        $query = mysqli_query($connection, "SELECT * FROM gasto WHERE cod = ".$_GET['idu'].";");
                        //echo $_GET['idu'];
                        
                        while($exibeg = mysqli_fetch_array($query)){
                    ?>
                <form   method="POST" action="functions/atualiza_gasto.php?idu='<?php echo $exibeg[0]?>'">
                    <!-- Pesquisa -->
                    
                    <div class="mb-3">
                        <div class="dropdown">
                            <select class="form-select" name="sig_cat" id="sig_cat" style="width: 150px;">
                                <option value ="categoria" style="height: 450px;">Categoria</option>
                                


                                <?php 
                                    $query = mysqli_query($connection, "SELECT * FROM categoria;");
                                    while($exibe = mysqli_fetch_array($query)){
                                ?>
                                <option value="<?php echo $exibe[0]?>" name="sig_cat" id="sig_cat"><?php echo $exibe[0]?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <?php 
                         
                        $query = mysqli_query($connection, "SELECT * FROM gasto WHERE cod = ".$_GET['idu'].";");
                        while($exibeg = mysqli_fetch_array($query)){
                    ?>
                    <input type="text" id="nome" name="nome" placeholder="Nome do Gasto" value="<?php echo $exibeg[1]?>" pattern="[Aa-Zz]">
                    <input type="date" id="data_gasto" name="data_gasto" placeholder="data_gasto" value="<?php echo $exibeg[2]?>" required>
                    <input type="number" id="valor" name="valor" placeholder="Valor Gasto" value="<?php echo $exibeg[3]?>" pattern="[0-9]+$">
                    <button type="submit" id="btn1"><a href="functions/atualiza_gasto.php?idu='<?php echo $exibeg[0]?>'"></a>Atualizar</button>
                    <?php } ?>
                </form>
                <?php } ?>
            </div>

        </div>
    </div>

    <?php include("footer.php")?>

    <?php include("scripts.php")?>
    </body>
    
</html>
