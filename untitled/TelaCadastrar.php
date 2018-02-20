
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Desbravador</title>
    <link rel=stylesheet href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <?php include "navbar.html" ?>


</head>
<body>


    <div id="interfaceCadastro">
        <br><br>

        <form method="post" action="Controller/cadastrar.php">
            <div class="form-row">
                <div id="dadosPessoais">
                    <h1>Dados pessoais</h1> <br>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Data de nascimento</label>
                        <input type="date" class="form-control" name="data" >
                    </div>

                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Endereço</label>
                        <input type="text" class="form-control" name="endereco" >
                    </div>


                    <div class="form-group col-md-6">

                        <div class="form-check form-check-inline">
                            <label for="inputEmail4">Batizado?</label>

                            <input class="form-check-input" type="radio"  name="batizado" value="S">
                            <label class="form-check-label" for="inlineRadio1">Sim</label>

                            <input class="form-check-input" type="radio" name="batizado" value="N">
                            <label class="form-check-label" for="inlineRadio2">Não</label>


                        </div>

                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">RG, CPF, ou Certidão</label>
                        <input type="number" class="form-control" name="rg" >
                    </div>


                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Nome do Pai</label>
                        <input type="text" class="form-control" name="nomePai" >
                    </div>

                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Nome do Mãe</label>
                        <input type="text" class="form-control" name="nomeMae" >
                    </div>
                </div>

                <div id="dadosMedicos" class="form-group col-md-12">

                    <h1>Dados Médicos</h1> <br>
                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Tipo sanguíneo</label>
                        <input type="text" class="form-control" name="tipoSanguineo" >
                    </div>


                    <div class="form-group col-md-9">
                        <label for="inputEmail4">Sou alérgico a:</label>
                        <input type="text" class="form-control" name="alergia" >
                    </div>


                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Tomo os seguintes remédios:</label>
                        <input type="text" class="form-control" name="remedio" >
                    </div>

                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Não posso realizar certas atividades como:</label>
                        <input type="text" class="form-control" name="naoAtividades" >
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>

                </div>

            </div>

        </form>

    </div>

    <div id="imgD3">
        <img width="150" height="150" src="d3.png_256">
    </div>

</body>
</html>

