<?php

class Database {
   public $pdo;

   // Konstruktors - izpieldas vienu reizi
   public function __construct($config){
      // Data Source Name
        $dsn = "mysql:" .http_build_query($config, "", ";");
        // PHP Data Object 
        $this->pdo = new PDO($dsn);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
   }

   public function query($sql){
        
        // Sagatavo 1.
        $statement = $this->pdo->prepare("$sql");
        // Sagatav0 2.
        $statement->execute();
        return $statement;
   } 
}
