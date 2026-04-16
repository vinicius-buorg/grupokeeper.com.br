<?php 

/**
* @copyright Copyright (c) Busca Orgânica. (https://www.buscaorganica.com.br/)
* @responsavel Denis Cedro (contato@buscaorganica.com.br)
*/

class classBuscaOrganicaDB {
    /**
    * Dados de banco não usuais no momento 
    */
    private $db_type = "mysql";
    
    private $db_name = "_base_servico";
    
    private $db_host = "localhost";
    
    private $db_user = "root";
    
    private $db_passwd = "";

    
    /**
    * Exemplo de conexão com banco
    */
    public function connProdCli($cli)
    {
        try {
            if (!$this->openDatabaseConnection()) {
                throw new Exception("Não foi possível fazer a conexão com o banco de dados.", 2);
            }

            // colocar o id do cliente meio que xumbado... tem que ver como fazer isso com segurança.
            // traz todos os produtos do cliente logado
            $sql = "SELECT p.*, c.nome as 'nome_categoria'  FROM produto as p inner join categoria as c ON c.id = p.categoria_id WHERE p.cliente_id = :cliente_id;";
            $query = $this->db->prepare($sql);
            if (!$query->execute(array(":cliente_id" => $cli))) {
                throw new Exception("Produtos não encontrados.", 3);
            }
            $produtosCliente = $query->fetchAll(PDO::FETCH_OBJ);
            if (empty($produtosCliente)) {
                throw new Exception("Produtoscliente não encontrado.");
            }

            return json_encode(array("sucesso" => true, "dados"=> $produtosCliente));
            exit();
        } catch (Exception $e) {
            switch ($e->getCode()) {
                case 2:
                    break;
                default:
                    $this->alerta("Erro de configuração");
                    echo "<p style=\"text-align:center\">".$e->getMessage()."</p>";
                    die();
                break;
            }
        }
    }
    /**
    * Abre Conexão com o Banco de Dados
    */
    private function openDatabaseConnection()
    {
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        try {
            $this->db = new PDO($this->db_type . ":host=" . $this->db_host . ";dbname=" . $this->db_name . ";charset=utf8", $this->db_user, $this->db_passwd, $options);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

}