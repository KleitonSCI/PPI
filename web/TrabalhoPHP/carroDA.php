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
    $conn=conectar();
    $sql = "SELECT * FROM carros WHERE idCarro=:id";
    $stmt= $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    
    
    
    $stmt->execute();
    $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
   
    return $resultado;
}

function editarCarro($marca,$modelo,$ano,$cor,$id){
    $conn=conectar();
    $sql="UPDATE carros SET Modelo=:modelo, Ano=:ano, Cor=:cor, Marca=:marca WHERE idCarro=:id;";
    //update carros set Modelo="corolla",Ano="2022",Cor="Vermelho",Marca="Toyota" WHERE idCarro=1;
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':modelo',$modelo);
    $stmt->bindParam(':ano',$ano);
    $stmt->bindParam(':cor',$cor);
    $stmt->bindParam(':marca',$marca);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    return $stmt->rowCount();
    
}

function excluirCarro($id){
    $conn=conectar();
    $sql="DELETE FROM * WHERE idCarro=:id";
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return true;
    } else {
        return false;
    }

    
}

?>