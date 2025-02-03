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
// if(isset($_POST["acao"])&&$_POST["acao"]=="editar"){
    
// }
?>
