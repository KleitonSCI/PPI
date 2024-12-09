<?php
include_once("pessoa_da.php");
include_once ("database.php");
if(isset( $_POST["acao"]) && $_POST["acao"]=="cadastrar"){
    if(isset($_POST["n"])&&(isset($_POST["e"]))){
        $nome=$_POST["n"];
        $email=$_POST["e"];
        inserir($nome,$email);
        header("Location: listar.php");
    }
    else{
        echo"não deu certo";
    }
}
if(isset($_POST["acao"])&&$_POST["acao"]=="editar"){
    
}
?>
