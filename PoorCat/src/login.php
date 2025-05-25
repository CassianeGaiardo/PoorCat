<?php 
    include("functions/connection.php");
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link href="style/style.css" rel="stylesheet">
    </head>
    <body>

        <form method="POST" action="functions/verif_login.php">
            <div class="form">
            <input type="text" name = "email" id = "email" placeholder="e-mail"><br>
            <input type="password" name = "senha" id ="senha" placeholder="senha">
            <button id="btn1"><a href="functions/verif_login.php"></a>Login</button>
            </div>
        </form>
        <?php include("scripts.php")?>
    </body>
</html>