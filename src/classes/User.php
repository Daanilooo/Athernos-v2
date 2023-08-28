<?php 

namespace Athernos\classes;

use Athernos\classes\Crud;

    class User extends Crud{
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $nivel;
        
        public function __construct(){
            parent::__construct();
        }
            
        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;

        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function setSenha($senha)
        {
            $this->senha = $senha;
        }

        public function getNivel()
        {
            return $this->nivel;
        }

        public function setNivel($nivel)
        {
            $this->nivel = $nivel;

        }
    
        public function cadastrarUser($nome,$email,$senha,$nivel,$senha2){
            $this->setNome(ucfirst($nome));
            $this->setEmail($email);
            $this->setSenha($senha);
            $this->setNivel($nivel);

            if ($this->getSenha() == $senha2){
                $this->setSenha(md5($this->getSenha()));
                $dados = [
                    "nome" => $this->getNome(),
                    "email" => $this->getEmail(),
                    "senha" => $this->getSenha(),
                    "nivel" => $this->getNivel()
                ];  
                if (($this->select("email","usuarios", "email = '$email")->num_rows > 0)){
                    return "Usuario ja existente";
                }else{
                    $this->insert("usuarios",$dados);
                        
                    return "Usuario cadastrado com sucesso";
                }
            }else{
                return "Senhas não coincidem";
                }                   
        }
        public function filtrarUser($search){
            // if(isset($_GET) and !empty($_GET['search'])){
                $select = $this->select('*',"usuarios","nome LIKE '$var%' or id LIKE '$var%' or email LIKE '$serch%'");
            }
        
        public function listarUser(){
            $select = $this->select("id,nome,email,nivel","usuarios","1","id ASC");
            
            if ($select->num_rows > 0){
                while($dados = $select->fetch_assoc()){
                    // if ($rows->nivel == 0){
                    //     $nivel = "Normal";
                    // }elseif($rows->nivel == 1){
                    //     $nivel = "Editor";
                    // }elseif($rows->nivel == 2){
                    //     $nivel = "Administrador";
                    // }  
                    $rows[] = $dados;                              
                }   
                return $rows;
            }
        }

        public function deletarUser($dados){
            $this->delete("usuarios","email","$dados");
        }

        public function login($email, $senha){
            if($this->select("*","usuarios","email='$email' and senha= '$senha'")->num_rows>0){
                session_start();
                while($rows = $select->fetch_object()){
                    $_SESSION['email'] = $rows->email;
                    $_SESSION['nome'] = $rows->nome;
                    $_SESSION['nivel'] = $rows->nivel;
                }
                header('Location:index.php');
            }else{
                return "Usuario inválido";
            }

        }

    }

?>