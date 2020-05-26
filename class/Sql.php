<?php

class Sql extends PDO {

    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
        
    }


    private function setParams($statement, $parameters = array()){

        //associar os parâmetros
        foreach ($parameters as $key => $value) {
           
            $statement->bindParam($key, $value);

            $this->setParam($statement, $key, $value);
        }
        
    }

    private function setParam($statement, $key, $value){

        $statement->bindParam($key, $value);

    }

    //recebe 2 parametros ("Query Bruta" e "Parametros")
    public function query($rawQuery,$params = array()){

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        if ($stmt->execute()) return $stmt;

        Echo "Erro na execução da instrução! ";
        Die();

    }

    public function select($rawQuery, $params = array()):array
    {
        
        $stmt = $this->query($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>