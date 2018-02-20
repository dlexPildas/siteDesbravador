<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 26/01/2018
 * Time: 00:51
 */
require_once ( "Banco.php" );
require_once ( "mesesPagamento.php" );
class classePagamento
{
    public static $instance = null;

    public static function getInstance(){

        if(self::$instance==null){
            self::$instance = new classePagamento();

        }
        return self::$instance;
    }

    private function getPagamento($escrever){
        $pg = new mesesPagamento($escrever[1],$escrever[2],$escrever[3],$escrever[4],$escrever[5],$escrever[6],$escrever[7],$escrever[8],$escrever[9],$escrever[10], $escrever[11], $escrever[12]);

        return $pg;
    }

    public function retornaPagamentos($rg){

        $SQL = "SELECT * FROM pagamentos WHERE rg = '$rg';";

        $banc = Banco::getInstance();
        $obanco = $banc->abrirConexao();

        $result = mysqli_query($obanco, $SQL);


        if($result != false){
            $matriz = array();
            $i=0;
            while($escrever = mysqli_fetch_array($result)){
                $pg = $this->getPagamento($escrever);
                $matriz[$i] = $pg;
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

        public function retornaNome($rg){
            $SQL = "SELECT nome FROM ficha_desbravador WHERE rg = '$rg';";
            $banc = Banco::getInstance();
            $obanco = $banc->abrirConexao();
            $result = mysqli_query($obanco, $SQL);

            if($result != null){
                $nome = "Não existe!";
                while($escrever = mysqli_fetch_array($result)){
                    $nome = $escrever[0];
                }
                $banc->fecharCon();
                return $nome;
            }else{
                echo "Nome não encontrado";
                $banc->fecharCon();
            }
        }
}