function enviarEmail() {
    emailjs.init("ErsNaJMuiwFOJ3Ynq");

    document.getElementById('form-contato').addEventListener('submit', function(event) {
        event.preventDefault();

        var nome = document.getElementById('nome').value;
        var email = document.getElementById('email').value;
        var numero = document.getElementById('numero').value;
        var mensagem = document.getElementById('mensagem').value;

        var replyTo = email;

        emailjs.send("service_mbck9ca", "template_s05mstj", {
            name: nome,
            email: email,
            fone: numero,
            message: mensagem,
            reply_to: replyTo
        }).then(function(response) {
            // Exibir um alerta SweetAlert de sucesso
            Swal.fire({
                icon: 'success',
                title: 'E-mail enviado!',
                text: 'Em breve entraremos em contato.',
                showConfirmButton: false,
                timer: 3000 // fecha automaticamente após 3 segundos
            });

            // Limpar os valores dos campos do formulário
            document.getElementById('nome').value = '';
            document.getElementById('email').value = '';
            document.getElementById('numero').value = '';
            document.getElementById('mensagem').value = '';
        }).catch(function(error) {
            // Exibir um alerta SweetAlert de erro
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Houve um erro ao enviar o e-mail. Por favor, tente novamente mais tarde.',
                showConfirmButton: true
            });
            console.error('Erro ao enviar o e-mail:', error);
        });
    });
}
