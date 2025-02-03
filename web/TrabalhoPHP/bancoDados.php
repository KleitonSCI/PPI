<?php
function conectar(){
     $host = "localhost";
     $db_name = "crud";
     $username = "root";
     $password = "aluno";
     $conn = null;
    try {
        $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, 
        $username, $password);
        $conn->exec("set names utf8");
    
    } catch(PDOException $exception) {
     
        echo "Erro de conexão: " . $exception->getMessage();
    }
    return $conn;
}
?>