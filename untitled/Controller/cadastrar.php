<script type="text/javascript">
    function redirect()
    {
        setInterval(function(){
            window.location.href = '../TelaCadastrar.php';
        }, 1000);
    }
</script>





<?php
//header("Location:../TelaCadastrar.php");
echo '<script type="text/javascript">redirect();</script>';
require_once "Banco.php";
    $rg = $_POST['rg'];
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $endereco = $_POST['endereco'];
    $batizado = $_POST['batizado'];
    $nomePai = $_POST['nomePai'];
    $nomeMae = $_POST['nomeMae'];
    $tipoSanguineo = $_POST['tipoSanguineo'];
    $alergia = $_POST['alergia'];
    $remedio = $_POST['remedio'];
    $naoAtividade = $_POST['naoAtividades'];


    $banco = Banco::getInstance();

    $SQL = "INSERT INTO ficha_desbravador(rg, nome, data_nascimento, endereco, batizado, 
                  nome_pai, nome_mae, tipo_sanguineo, alergico, remedios, nao_atividades, pagamento) 
            VALUES ( '$rg','$nome', '$data', '$endereco', '$batizado', '$nomePai', '$nomeMae', '$tipoSanguineo', '$alergia', '$remedio', '$naoAtividade', '$rg')";

    $SQL2 = "INSERT INTO pagamentos (rg, janeiro, fevereiro, marco, abril, maio, junho, julho, agosto, setembro, outubro, novembro, dezembro) 
          VALUES ('$rg', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0')";


    $banc = Banco::getInstance();
    $obanco = $banc->abrirConexao();

    $result = mysqli_query($obanco, $SQL);
    mysqli_query($obanco, $SQL2);


    if($result != false){
        echo "Cadastrado";
        $banc->fecharCon();
        return true;

    }else{
        echo "aqui";
        $banc->fecharCon();
        return false;
    }




?>

