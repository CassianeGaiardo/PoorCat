<?php
    $connection = mysqli_connect("127.0.0.1", "root", "");
               mysqli_select_db($connection, "poorcat");
               mysqli_set_charset($connection, "UTF8");

               //echo ($connection)?"Ok":"Falha";
?>