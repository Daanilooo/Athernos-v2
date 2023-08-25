<?php

    namespace Athernos\classes;

    use Athernos\config\Connect;

    class Crud extends Connect {

        function __construct(){
            parent::__construct();            
        }

        public function select($col, $tabela, $cond = null, $order = null){
            if ($cond != null){
                if ($order != null){
                    $sql = "SELECT $col FROM $tabela WHERE $cond ORDER BY $order";
                    // echo "SELECT $col FROM $tabela WHERE $cond ORDER BY $order";                    
                }else{
                    $sql = "SELECT $col FROM $tabela WHERE $cond";
                    // echo  "SELECT $col FROM $tabela WHERE $cond";
                }
            }else{
                $sql = "SELECT $col FROM $tabela";
                // echo  "SELECT $col FROM $tabela";
            }         
            return $this->connection->query($sql);
            // echo $this->conn->query($sql);
        }

        public function insert($tabela, $dados){
            $col = "";
            $val = "";

            if(is_array($dados)){
                foreach($dados as $chave => $valor ){
                    $col .= $chave . ",";
                    $val .= "'".$valor . "',";
                }
                //id,nome,email,senha,nivel,
                $col = rtrim($col, ",");
                $val = rtrim($val, ",");
    
                $sql = "INSERT into $tabela ($col) values ($val)";
                $this->connection->query($sql);
            }else{
                $sql = "INSERT into $tabela values (null, '$dados')";                                       
                $this->connection->query($sql);                
            }
        }

        private function update($tabela,$param,$cond){
            $sql = "UPDATE $tabela SET $param WHERE $cond";
            $this->connection->query($sql);
        }

        private function delete($tabela, $coluna, $valor){
            $sql = "DELETE FROM $tabela WHERE $coluna = $valor";
            $this->connection->query($sql);
        }

        private function call($funcao){
            $sql = "Call $funcao";
            $this->connection->query($sql);
        }
    }
?>