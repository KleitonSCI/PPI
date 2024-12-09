<?php
include_once("database.php");
/*inserir*/
function inserir ($nome,$email){
    $db = conecta();
    $sql = "INSERT INTO crud.usuario (nome,email) VALUES (?,?)";
    $stmt= $db->prepare($sql);
    $stmt->bindValue(1, $nome, PDO::PARAM_STR);
    $stmt->bindValue(2, $email, PDO::PARAM_STR);
    try{
        $stmt->execute();
    }
    catch(PDOException $e){
        echo "erro";
    }
}

/*listar*/
function recupera_lista(){
    $bd=conecta();
    $sql = "SELECT * FROM usuario";
    $stmt= $bd->prepare($sql);
    $stmt->execute();
    $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}
function getUsuario($id){
    $bd=conecta();
    $sql = "SELECT * FROM usuario WHERE id=?";
    $stmt= $bd->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}
recupera_lista();

?>