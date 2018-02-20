<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>FeedBack</title>
    <link rel=stylesheet href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <?php include "navbar.html" ?>

</head>
<body>
    <br><br><br><br><br>
    <div id="corpoFeedback">
        <form method="post" action="Controller/feedback.php">

            <h1>Envie o seu comentário sobre o site</h1>
            <br><br>

            <div class="form-group">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>

                <label for="inputAddress">Informe seu nome:</label>
                <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario"> <br><br>

                <label for="inputAddress">Nome do clube:</label>
                <input type="text" class="form-control" id="nomeClube" name="nomeClube"> <br><br>

                <label for="exampleFormControlTextarea1">Digite seu comentário:</label>
                <textarea class="form-control" id="comentario" rows="3" name="comentario"></textarea> <br><br>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        </form>
    </div>


</body>
</html>