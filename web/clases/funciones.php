<?php
namespace clases_pdo;
include("cadena/conexion.php");
class funciones{
        private $id;

     public function __construct(){
        $this->pdo = new config();
    }
        public function datos(){
        $pdo = $this->pdo;
        $sql = "SELECT v.ID, v.UBICACION, v.MINIATURA_ID, v.DESCRIPCION, v.DURACION,m.RUTA FROM videos v INNER JOIN miniatura m ON v.MINIATURA_ID = m.ID";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
        
    }

    public function video($id){
        $pdo = $this->pdo;
        $sql = "SELECT UBICACION FROM videos WHERE MINIATURA_ID = $id";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
        
    }



}
?>