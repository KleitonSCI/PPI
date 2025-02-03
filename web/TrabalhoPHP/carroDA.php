<?php
function listarCarros( $str =""){
    $conn = conectar();
    $sql = "SELECT * FROM carros ";
    //WHERE nome LIKE '%$str%'
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $carros = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $carros;
}
function cadastrarCarro($marca, $modelo, $ano ,$cor){
    $conn = conectar();
    $sql = "INSERT INTO carros (marca, modelo, ano,cor) VALUES (:marca, :modelo, :ano,:cor)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':marca', $marca);
    $stmt->bindParam(':modelo', $modelo);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':cor', $cor);


    $stmt->execute();
    return $stmt->rowCount();
}
function getCarro($id){
    $bd=conecta();
    $sql = "SELECT * FROM carros WHERE id=?";
    $stmt= $bd->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}


?>