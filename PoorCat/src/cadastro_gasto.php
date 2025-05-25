<?php include("functions/connection.php")?>
<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link href="style/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    </head>
    <body>
        <?php include("navbar.php")?>
        <form method="POST" action="functions/insere_gasto.php">
            <div class="form">
                <h3>CADASTRAR GASTO</h3>
                <label for="sigla">Selecione uma Categoria: </label>
                
                    <select name="sig_cat" id="sig_cat">
                        
                    <?php 
                        $query = mysqli_query($connection, "SELECT * FROM categoria;");
                        while($exibe = mysqli_fetch_array($query)){
                    ?>
                        <option value ="categoria">Categoria</option>
                        <option value="<?php echo $exibe[0]?>" name="sig_cat" id="sig_cat"><?php echo $exibe[0]?></option>
                        <?php } ?>
                    </select>
                    
                    <br>
                <input type="text" id="nome" name="nome" placeholder="Titulo do gasto"  ><br><br>
                <input type="date" id="data_gasto" name="data_gasto" placeholder="data_gasto"  required><br><br>
                <input type="text" id="valor" name="valor" placeholder="valor"><br><br>
                <button id="btn1"><a href="functions/insere_gasto.php"></a>Cadastrar</button>
            </div>
        </form>
        
        
        <?php include("footer.php")?>
        <?php include("scripts.php")?>
    </body>
</html>