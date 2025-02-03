<?php
include_once("carroDA.php");
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "GET") {
        $id = $_GET['id'];
        if (excluirCarro($id)) {
            header("Location: listagem.php");
        } else {
            echo "Erro ao deletar o usuário";
        }
} 