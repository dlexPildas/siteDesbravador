<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 19/01/2018
 * Time: 15:01
 */
require_once("Desbravador.php");
require_once ( "Banco.php" );


class classeVisualizar
{

    public static $instance = null;

    public static function getInstance(){

        if(self::$instance==null){
            self::$instance = new classeVisualizar();

        }
        return self::$instance;
    }

    //Método para  pegar um desbravador
    private function getUsuario($escrever){
        $dbv = new Desbravador($escrever[0],$escrever[1],$escrever[2],$escrever[3],$escrever[4],$escrever[5],$escrever[6],$escrever[7],$escrever[8],$escrever[9],$escrever[10]);

        return $dbv;
    }

    public function retornaUsuarios($nome){
        $banco = Banco::getInstance();

        $SQL = "SELECT * FROM ficha_desbravador WHERE nome LIKE '%$nome%' ORDER BY nome;";

        $banc = Banco::getInstance();
        $obanco = $banc->abrirConexao();

        $result = mysqli_query($obanco, $SQL);


        if($result != false){
            $matriz = array();
            $i=0;
            while($escrever = mysqli_fetch_array($result)){
                $dbv = $this->getUsuario($escrever);
                $matriz[$i] = $dbv;
                $i++;
            }

            $banc->fecharCon();
            return $matriz;

        }else{
            echo "DBV não encontrado";
            $banc->fecharCon();
            return null;
        }

    }
}
