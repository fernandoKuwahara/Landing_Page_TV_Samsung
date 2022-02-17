$(document).ready(function(){
    $('#btnEnviar').on('click', function(event){
        event.preventDefault();
        
        let email = $('#iptEmail').val();
        let corretor = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z]+\.)/;

        if(email=="")
        {
            alert('Campo Vazio! Insira Um Email.');
        }
        else if (corretor.exec(email))
        {
            //Trecho De Validação E Registro Com AJAX
            $.ajax({
                url: './SCRIPTS/cadastrar.php',
                type: 'post',
                data: {userEmail: email},
                success: function() {
                    document.getElementById('iptEmail').value = "";
                    alert('Parabéns! Seu Email Foi Cadastrado, E Você Receberá Futuras Promoções Deste Produto.');
                }
            });
        }
        else
        {
            alert('Email Inserido Inválido!');
        }
    });
});