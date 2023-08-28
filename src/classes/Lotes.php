<?php 
    namespace Athernos\classes;
    
    use Athernos\classes\Produto;
    
        class Lotes extends Produtos{
            private $codigo;
            private $id_produto;
            private $custo_unit;
            private $quantidade;
            private $validade;
            private $data_entrada;
        

        public function entradaLotes($id_produto,$custo_unit,$quantidade,$validade){
            $this->setIdProduto($id_produto);
            $this->setCustoUnit($custo_unit);
            $this->setQuantidade($quantidade);
            $this->setValidade($validade);
            $dados = [
                "id_produto" => $this->getIdProduto(),
                "custo_unit" => $this->getCustoUnit(),
                "quantidade" => $this->getQuantidade(),
                "validade" => $this->getValidade() 
            ];
            this->insert("lotes","$dados");  
        }

            public function getCodigo()
            {
                return $this->codigo;
            }

            public function setCodigo($codigo)
            {
                $this->codigo = $codigo;

            }

            public function getIdProduto()
            {
                return $this->id_produto;
            }

            public function setIdProduto($id_produto)
            {
                $this->id_produto = $id_produto;

            }

            public function getCustoUnit()
            {
                return $this->custo_unit;
            }

            public function setCustoUnit($custo_unit)
            {
                $this->custo_unit = $custo_unit;

            }

            public function getQuantidade()
            {
                return $this->quantidade;
            }

            public function setQuantidade($quantidade)
            {
                $this->quantidade = $quantidade;

            }


            public function getValidade()
            {
                return $this->validade;
            }

            public function setValidade($validade)
            {
                $this->validade = $validade;

            }

            public function getDataEntrada()
            {
                return $this->data_entrada;
            }

            public function setDataEntrada($data_entrada)
            {
                $this->data_entrada = $data_entrada;

            }
    }
?>