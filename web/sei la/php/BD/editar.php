<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("database.php");
    include_once("pessoa_da.php");
    if(isset($_GET["pessoa_id"])){
        $id=$_GET["pessoa_id"];
        $pessoa=getUsuario($id);
    }
    else{
        die("pessoa não encontrada");
    }
    ?>
<form action="controller.php" method="POST">
        <label for="nome">Digite o nome</label>
        <input type="text" name="n" id="nome" value="<?php echo$pessoa["nome"]?>">
        <br>
        <label for="email">Digite o email</label>
        <input type="text" name="e" id="email" value="<?php echo$pessoa["email"]?>">
        <br>
        <input type="submit" value="SALVAR">
        <input type="text" name="acao" value="editar" hidden>
    </form>
</body>
</html>