<?php
    require_once "Controller/classePagamento.php";
    $rg = isset($_POST['id']) ? $_POST['id'] : "";
    if($rg!=""){
        $classe = classePagamento::getInstance();
        $result = $classe->retornaPagamentos($rg);
        $nome = $classe->retornaNome($rg);
    }else{
        $nome = "";

    }

?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel=stylesheet href="bootstrap-3.3.7-dist/css/bootstrap.css/">
    <?php include "navbar.html"; ?>
</head>
<body>

    <br><br><br><br><br><br><br><br><br>
    <div id="idDBV" class="collapse navbar-collapse">
        <h5>RG, CPF, ou Certidão:</h5>
        <form method="post" action="TelaPagamentos.php" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="id" placeholder="Ex: 0123457789" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>

    </div>

    <div id="pagamento">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome:</th>
                <th scope="col">Janeiro</th>
                <th scope="col">Fevereiro</th>
                <th scope="col">Março</th>
                <th scope="col">Abril</th>
                <th scope="col">Maio</th>
                <th scope="col">Junho</th>
                <th scope="col">Julho</th>
                <th scope="col">Agosto</th>
                <th scope="col">Setembro</th>
                <th scope="col">Outubro</th>
                <th scope="col">Novembro</th>
                <th scope="col">Dezembro</th>
            </tr>
            </thead>
            <?php if($rg!=""){?>
                <tbody>
                    <th scope="col">
                        <form method="post" action="TelaVisualizarDbv.php">
                            <button type="submit" name="nome" value="<?php echo $nome; ?>" class="btn btn-success">
                                <?php echo $nome;?>
                            </button>
                        </form>
                    </th>
                    <form method="post" action="Controller/alterar.php">
                        <th scope="col">
                            <input type="number" name="jan" style="width: 50px" value="<?php echo $result[0]->getJan();?>">
                        </th>
                        <th scope="col">
                            <input type="number" name="fev" style="width: 50px" value="<?php echo $result[0]->getFev();?>">
                        </th>
                        <th scope="col">
                            <input type="number" name="mar" style="width: 50px" value="<?php echo $result[0]->getMar();?>">
                        </th>
                        <th scope="col">
                            <input type="number" name="abr" style="width: 50px" value="<?php echo $result[0]->getAbr();?>">
                        </th>
                        <th scope="col">
                            <input type="number" name="mai" style="width: 50px" value="<?php echo $result[0]->getMai();?>">
                        </th>
                        <th scope="col">
                            <input type="number" name="jun" style="width: 50px" value="<?php echo $result[0]->getJun();?>">
                        </th>
                        <th scope="col">
                            <input type="number" name="jul" style="width: 50px" value="<?php echo $result[0]->getJul();?>">
                        </th>
                        <th scope="col">
                            <input type="number" name="ago" style="width: 50px" value="<?php echo $result[0]->getAgo();?>">
                        </th>
                        <th scope="col">
                            <input type="number" name="set" style="width: 50px" value="<?php echo $result[0]->getSet();?>">
                        </th>
                        <th scope="col">
                            <input type="number" name="out" style="width: 50px" value="<?php echo $result[0]->getOut();?>">
                        </th>
                        <th scope="col">
                            <input type="number" name="nov" style="width: 50px" value="<?php echo $result[0]->getNov();?>">
                        </th>
                        <th scope="col">
                            <input type="number" name="dez" style="width: 50px" value="<?php echo $result[0]->getDez();?>">
                        </th>

                        <div id="botaoAlterar">
                            <!--<button type="submit"  name="rg" value="<?php echo $rg;?>" class="btn btn-success btn-lg btn-block">Alterar pagamento</button>-->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                Alterar Pagamento
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><h1>Confirmação</h1></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Você realmente deseja alterar os dados de pagamentos?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" name="rg" value="<?php echo $rg;?>" class="btn btn-success">Confirmar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </tbody>

            <?php } ?>

        </table>
    </div>

</body>
</html>
