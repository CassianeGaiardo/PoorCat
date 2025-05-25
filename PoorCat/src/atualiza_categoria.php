<?php include("functions/connection.php")?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
        <link rel="icon" href="img/icon.png" type="image/png"></link>
        <title>Atualiza Categoria</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <?php include("navbar.php")?>
        <?php 
              
            $query = mysqli_query($connection, "SELECT * FROM categoria WHERE sigla = ".$_GET['idu'].";");
            while($exibe = mysqli_fetch_array($query)){
        ?>
        <form method="POST" action="functions/atualiza_categoria.php?idu='<?php echo $exibe[0]?>'">
            <div class="form">
                <h3>Atualizar Categoria</h3>
                <input type="text" id="nome" name="nome" placeholder="Nome da categoria" value="<?php echo $exibe[1]?>" pattern="[Aa-Zz]" required><br><br>
                <input type="text" id="teto" name="teto" placeholder="Teto" value="<?php echo $exibe[3]?>" pattern="[0-9]+$"><br><br>
                <button id="btn1"><a href="functions/atualiza_categoria.php?idu='<?php echo $exibe[0]?>'"></a>Atualizar</button>
            </div>
        </form>
        <?php } ?>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>
        <?php include("footer.php")?>
    </body>
</html>
        <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
            <h1>Atualizar Categoria</h1>

            <?php 
                
                $query = mysqli_query($connection, "SELECT * FROM categoria WHERE sigla = ".$_GET['idu'].";");
                while($exibe = mysqli_fetch_array($query)){
            ?>
                <form method="POST" action="functions/atualiza_categoria.php?idu='<?php echo $exibe[0]?>'">
                    <div class="form">
                        <input type="text" id="nome" name="nome" style= "width: 500px;" placeholder="nome da categoria" value="<?php echo $exibe[1]?>" required><br><br>
                        <input type="text" id="teto" name="teto" placeholder="teto" value="<?php echo $exibe[3]?>"><br><br>
                        <button type="submit" id="btn1"><a href="functions/atualiza_categoria.php?idu='<?php echo $exibe[0]?>'"></a>Atualizar</button>
                    </div>
                </form>
            <?php } ?>
     
            <script>
                $(document).ready(function() {
                    $('#teto').inputmask( 'currency',{"autoUnmask": true,
                        radixPoint:",",
                        groupSeparator: ".",
                        allowMinus: false,
                        prefix: 'R$ ',            
                        digits: 2,
                        digitsOptional: false,
                        rightAlign: true,
                        unmaskAsNumber: true
                    });
                });
            </script>
            </div>
        </div>
        <?php include("footer.php")?>

<?php include("scripts.php")?>
        </body>
    </html>

