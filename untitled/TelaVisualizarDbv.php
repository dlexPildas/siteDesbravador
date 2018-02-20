<?php
    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    if($nome==""){
        $nome="semnome";
    }
    require_once "Controller/classeVisualizar.php";
    require_once "Controller/Desbravador.php";
    $classe = classeVisualizar::getInstance();
    $result = $classe->retornaUsuarios($nome);
    $i=0;
    $tamanho = count($result);
?>


<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Desbravadores</title>
    <link rel=stylesheet href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <?php include "navbar.html";?>
</head>
<body>

    <br><br><br><br><br><br>
    <div id="corpoVisualizarDbv">
        <div id="barraPesquisa" class="collapse navbar-collapse">
            <h5>Nome do desbravador:</h5>
            <form method="post" action="TelaVisualizarDbv.php" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name="nome" placeholder="Ex. João" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
        <div id="visualizarDbv" >

            <table class="table">

                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data </th>
                    <th scope="col">Endereco</th>
                    <th scope="col">Batizado</th>
                    <th scope="col">RG, CPF ou Cert.</th>
                </tr>
                </thead>
                <tbody>

                    <?php
                        while($i<$tamanho){
                    ?>

                    <tr>
                        <td><?php echo $result[$i]->getNome();?></td>
                        <td><?php echo $result[$i]->getDataNascimento();?></td>
                        <td><?php echo $result[$i]->getEndereco();?></td>
                        <td><?php echo $result[$i]->getBatizado();?></td>
                        <td><?php echo $result[$i]->getRg();?></td>
                        <td> <form method="post" action="TelaPagamentos.php">
                                    <button type="submit" class="btn btn-primary" name="id" value="<?php echo $result[$i]->getRg();?>">Pagamento</button>
                                            </form> </td>
                    </tr>

                    <?php
                            $i++;
                        }
                    ?>
                </tbody>
            </table>

        </div>


    </div>


</body>
</html>
