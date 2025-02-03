<?php


include_once("carroDA.php");
include_once ("bancoDados.php");
if(isset( $_POST["acao"]) && $_POST["acao"]=="cadastrar"){
    if(isset($_POST["marca"])&&(isset($_POST["modelo"])&&(isset($_POST["ano"])&&(isset($_POST["cor"]))))){
        $marca=$_POST["marca"];
        $modelo=$_POST["modelo"];
        $ano = $_POST["ano"];
        $cor = $_POST["cor"];
        cadastrarCarro($marca,$modelo,$ano,$cor);
        header("Location: listagem.php");
    }
    else{
        echo"não deu certo";
    }
}
else{
    echo"sem acao";
}
 if(isset($_POST["acao"])&&$_POST["acao"]=="editar"){
    if(isset($_POST["marca"])&&(isset($_POST["modelo"])&&(isset($_POST["ano"])&&(isset($_POST["cor"]))&&(isset($_POST["id"]))))){
        $marca=$_POST["marca"];
        $modelo=$_POST["modelo"];
        $ano = $_POST["ano"];
        $cor = $_POST["cor"];
        $id = $_POST["id"];
        editarCarro($marca,$modelo,$ano,$cor,$id);
        header("Location: listagem.php");
    }
    
 }
 if(isset($_POST["acao"])&&$_POST["acao"]=="remover"){
    if(isset($_POST["id"])){
        $id=$_POST["id"];
        editarCarro($id);
        header("Location: listagem.php");
    }
    
 }

 
?>
