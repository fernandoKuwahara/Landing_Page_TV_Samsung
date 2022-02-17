<?php

    include "conexao.php";

    $emailParaDeletar = $_GET['email'];

    $sql = "delete from EmailsCadastrados where email = '$emailParaDeletar';";
    $retorno = mysqli_query($conexao,$sql) or die($mysqli_error);

    if ($retorno)
    {
        echo "
        <script>
            location.href='mostrarEmails.php';
        </script>";
    }
    else
    {
        echo "
        <script>
            location.href='mostrarEmails.php';
        </script>";
    }

    
?>