<?php 

namespace Athernos\classes;

use Athernos\classes\Crud;

    class User extends Crud{
        private $table;

        function __construct(){
            parent::__construct();
            $this->table = 'usuarios';
        }
    
        function cadastrarUser($dados){
            $dados = $_POST['dados'];
            $senha = $_POST['senha2'];
            if ($dados['senha'] == $senha){
                $dados[$senha] = md5($dados['senha']);
                $dados['nome'] = ucfirst($dados['nome']);
                $cond = "email='$dados[email]'";    
                if (($this->select("email","usuarios", $cond)->num_rows > 0)){

                };
                
            }
            
               
        }
        }
    

?>