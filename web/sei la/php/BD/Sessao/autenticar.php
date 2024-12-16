<?php
    session_start();

    

   
    
    if (!isset($_POST["login"])){
        header("Location:login.php?erro=3");
        exit();
    }
    if(!isset($_POST["senha"])){
        header("Location:login.php?erro=3");
        exit();
    }

        if($_POST["login"]!="admin" || $_POST["senha"]!="1234"){
            
            
                header("Location:login.php?erro=2");
            exit();
            
            
        }
    
   
    

    
    $_SESSION["login"]=$_POST["login"];
    header("Location:main.php");
?>