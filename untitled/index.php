<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel=stylesheet href="bootstrap-3.3.7-dist/css/bootstrap.css/">
    <link rel=stylesheet href="bootstrap-3.3.7-dist/js/bootstrap.js">
    <?php include "navbar.html" ?>

</head>
<body>
<br><br><br><br><br><br><br>
    <div id="corpoPaginaInicial">
        <div id="mensagemSecretario" class="jumbotron">
            <h1 class="display-4">Olá, Secretário!</h1>
            <p class="lead">Seja bem vindo ao SIS-Dbv. Aqui você poderá cadastrar todos os desbravadores do seu clube, fazer o gerenciamento de pagamentos e ainda agendar alguma viagem!</p>
            <hr class="my-4">
            <p>Breve teremos uma versão mais atualizada e com muito mais funcionalidades! Envie-nos uma sugestão!</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="telafeedbackDbv.php" role="button">Enviar sugestão</a>
            </p>
        </div>

        <div id="video">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/POBPT0Egkv4?rel=0" allowfullscreen></iframe>
            </div>
        </div>

        <div id="menuAvisos">
            <ul class="list-group">
                <li class="list-group-item active">Avisos</li>
                <a href="index.php"> <li class="list-group-item">Eventos</li> </a>
                <a href="index.php"> <li class="list-group-item">Novidades no site</li> </a>
                <a href="telaTudoDesbravador.php" > <li class="list-group-item">Tudo DBV</li> </a>
                <a href="index.php"> <li class="list-group-item">Dicas</li> </a>
            </ul>
        </div>
    </div>






</body>
</html>