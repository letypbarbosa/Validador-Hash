<?php
/**
 * DataBase
 * 
 * Classe responsável por realizar a conexão com o banco de dados
 */
class DB {
    const host     = "localhost";
    const user     = "root";
    const password = "1234";
    const base     = "hash";
     
    /**
     * Função responsável por efetivar a conexão
     * 
     * @param type $db
     * @return \PDO
     */
    static function connectionDBA(){
        $PDO = new \PDO("mysql:host=".self::host.
                        ";dbname=".self::base.
                        ";charset=utf8", 
                        self::user, 
                        self::password
                        );
        
        // define para que o PDO lance exceções caso ocorra erros
        $PDO->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                
        return $PDO;
    }
}
