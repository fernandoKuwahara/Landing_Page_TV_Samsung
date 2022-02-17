<?php
        include "conexao.php";
        $email = $_POST['userEmail'];
        $sql = "insert into EmailsCadastrados value ('$email');";
        $resposta = mysqli_query($conexao, $sql);
        mysqli_close($conexao);
?>