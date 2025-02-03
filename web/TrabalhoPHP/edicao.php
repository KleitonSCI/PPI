<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display:flex;
            flex-direction: column;
            width: 200px;
            margin: 0 auto;
        }
        #painel{
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php
    include_once("bancoDados.php");
    include_once("carroDA.php");
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $carro=getCarro($id);
    }
    else{
        die("carro não encontrado");
    }
    ?>
    <div id="painel">
    <h2>Edição de Cadastros</h2>
    <form action="controller.php" method="POST">
        <label for="marca">Digite a marca</label>
        <input type="text" name="marca" id="marca" value="<?php echo$carro["Marca"]?>">
        <br>
        <label for="modelo">Digite o modelo</label>
        <input type="text" name="modelo" id="modelo" value="<?php echo$carro["Modelo"]?>">
        <br>
        <label for="ano">Digite o ano</label>
        <input type="number" name="ano" id="ano" value="<?php echo$carro["Ano"]?>">
        <br>
        <label for="cor">Digite a cor</label>
        <input type="text" name="cor" id="cor" value="<?php echo$carro["Cor"]?>">
        <br>
        <br>
        <br>
        <input type="submit" value="Alterar">
        <input type="text" name="id" id="id" value="<?php echo$carro["idCarro"]?>" hidden>
        <input type="text" name="acao" id="acao" value="editar" hidden>
    </form>
    </div>

</body>
</html>