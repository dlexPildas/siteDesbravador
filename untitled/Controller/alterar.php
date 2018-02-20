<script type="text/javascript">
    function redirect()
    {
        setInterval(function(){
            window.location.href = '../TelaPagamentos.php';
        }, 1000);
    }
</script>



<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 27/01/2018
 * Time: 23:27
 */

echo '<script type="text/javascript">redirect();</script>';
require_once "Banco.php";

$jan = $_POST['jan'];
$fev = $_POST['fev'];
$mar = $_POST['mar'];
$abr = $_POST['abr'];
$mai = $_POST['mai'];
$jun = $_POST['jun'];
$jul = $_POST['jul'];
$ago = $_POST['ago'];
$set = $_POST['set'];
$out = $_POST['out'];
$nov = $_POST['nov'];
$dez = $_POST['dez'];
$rg = $_POST['rg'];


$banco = Banco::getInstance();


$SQL = "UPDATE pagamentos SET janeiro = '$jan' , fevereiro = '$fev' , marco = '$mar' , abril  = '$abr' , maio = '$mai' , 
        junho = '$jun', julho = '$jul' , agosto = '$ago' , setembro = '$set' , outubro = '$out' , novembro = '$nov' , dezembro = '$dez' 
        WHERE rg = '$rg';";



$banc = Banco::getInstance();
$obanco = $banc->abrirConexao();

$result = mysqli_query($obanco, $SQL);


if($result != false){
    echo "alterado com sucesso";
    $banc->fecharCon();
    return true;

}else{
    echo "não conseguimos alterar";
    $banc->fecharCon();
    return false;
}