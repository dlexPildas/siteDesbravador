<?php

require_once "Banco.php";

$nome = $_POST['nomeUsuario'];
$nomeClube = $_POST['nomeClube'];
$comentario = $_POST['comentario'];


$banco = Banco::getInstance();

$SQL = "INSERT INTO feedback (nome, nomeClube, comentario) VALUES ('$nome', '$nomeClube', '$comentario')";

$banc = Banco::getInstance();
$obanco = $banc->abrirConexao();

$result = mysqli_query($obanco, $SQL);


if($result != false){
    $banc->fecharCon();
    return true;
}else{
    $banc->fecharCon();
    return false;
}


?>