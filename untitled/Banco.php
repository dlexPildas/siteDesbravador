<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 18/01/2018
 * Time: 16:41
 */

class Banco
{

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $banco = null;
    public static $instance = null;
    public $verificador = false;

    public function __construct(){

        try{
            $this->banco = mysqli_connect('localhost','root', '', 'siteleaojuda') or die ("Erro na conexão"); //new PDO($this->host, $this->user, $this->pass);

        }catch (Exception $e){

        }
    }

    public static function getInstance(){

        if(self::$instance==null){
            self::$instance = new Banco();

        }
        return self::$instance;
    }

    public function fecharCon(){
        if($this->verificador == true){
            mysqli_close($this->banco);
        }else{
            return false;
        }

    }

    public function abrirConexao(){
        if($this->verificador == false){
            if($this->banco){
                return $this->banco;
            }
        }else{
            echo "erro";
        }
    }
}