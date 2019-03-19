<?php
namespace clases_pdo;
class config extends \PDO{
    private $typeDB = 'mysql';
    private $host = 'bd4free.net';
    private $dbname = 'paginax';
    private $userDB = 'andrey08';
    private $passwordDB = 'andrey1998';
    
    public function __construct(){
        try {
            parent::__construct("$this->typeDB:host=$this->host;dbname=$this->dbname",$this->userDB,$this->passwordDB);
            $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);    
        } catch (Exception $e) {
            echo "DATA BASE ERROR:".$e->getMessage();
        }
    }
}
?>