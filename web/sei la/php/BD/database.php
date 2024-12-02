<?php 
    function conecta(){
        $user="root";
        $pass="aluno";
        $nome="crud";
        $host="localhost";
        $db= new PDO("mysql:host=$host;dbname=$nome",$user,$pass);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if($db){
            return $db;
        }
        else{
            return false;
        }
    }
    
    var_dump(conecta());
    
?>