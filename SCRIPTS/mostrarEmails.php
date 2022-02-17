<?php

    include "conexao.php";

    $sql = "select email from EmailsCadastrados;";
    $resposta = mysqli_query($conexao,$sql);

    mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Emails Cadastrados</title>

    <style>
        a{
            padding: 10px 20px;
            color: black;
            border-radius: 2rem;
            text-decoration: none;
            transition: 0.5s ease-out;
        }

        a:hover{
            transition-delay: 0.1s;
            color: white;
            background-color: red;
        }

        @media screen and (max-width:735px){
            a{
                display: block;
            }
        }
    </style>

</head>
<body>

    <!-- Trecho De Emails Listados -->

    <div class="container">
        <h2>Página De Verificação</h2>
        <p>Nesta Página Estão Listados Todos Os Emails Já Cadastrados Pelo Site.</p>            
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Emails Cadastrados:</th>
                </tr>
            </thead>
            <tbody>

                <!-- Trecho Do Botão De Exclusão -->

                <?php while($emailUsuarios = mysqli_fetch_assoc($resposta)){ ?>
                <tr>
                    <td> <?php echo $emailUsuarios["email"]; ?> </td>
                    <td> <a href="javascript:
                    if(confirm('Deseja Mesmo Deletar Este Email?'))
                        location.href='excluirEmail.php?email=<?php echo $emailUsuarios["email"]; ?>'"> DELETAR EMAIL </a> 
                    </td>
                </tr>
                <?php } ?>
            </tbody>

                <!-- Trecho Do Botão Para Voltar Na Página Anterior -->

            <tr>
                <td>
                    <a href="../index.php"> VOLTAR </a>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>