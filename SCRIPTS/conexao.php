<?php
    $conexao = mysqli_connect('localhost','root','','Landing_Page_TV_LED_Samsung');

    if (!$conexao)
    {
        die('Could not connect: ' . mysqli_error($conexao));
    }
?>