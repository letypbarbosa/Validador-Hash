<?php
include_once "database.class.php";

class hash extends DB {
      
    private $conexao;
    public  $ID;
    public  $HASH;
    public  $NOME;
    public  $DT;
    
    

    /**
     * Função responsável pela realização da conexão com o banco de dados
     * está é iniciada assim que a classe é inicializada.
     *
     * Veja mais sobre a função construct:
     * http://php.net/manual/pt_BR/language.oop5.decon.php
     */
    function __construct() {
        $this->conexao = DB::connectionDBA();
    }

    public function consultaHash(){
        $query = "SELECT * FROM hash.cadastro WHERE ID =:ID AND HASH = :HASH";

        $consultation = $this->conexao->prepare($query);
        $consultation->bindValue(":ID",   $this->ID);
        $consultation->bindValue(":HASH", $this->HASH);
        $consultation->execute();

        $result = $consultation->fetchObject();

        return $result;
    }

    public function getHash(){
        $query = "SELECT * FROM hash.cadastro WHERE HASH = :HASH";

        $consultation = $this->conexao->prepare($query);
        $consultation->bindValue(":HASH", $this->HASH);
        $consultation->execute();

        $result = $consultation->fetchObject();

        return $result;
    }

    public function insertHash(){
        $query = "INSERT INTO hash.cadastro (HASH, NOME, DT_EXPIRACAO) VALUES (:hash, :nome, :dt)";

        $consultation = $this->conexao->prepare($query);
        $consultation->bindValue(":hash",   $this->HASH);
        $consultation->bindValue(":nome",   $this->NOME);
        $consultation->bindValue(":dt",     $this->DT);
        $consultation->execute();
    }
}
