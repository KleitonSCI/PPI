<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="nome">Nome:</label>
        <input type="text" name="n" id="nome">
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="s" id="sobrenome">

        <input type="submit" value="CONCATENA">
    </form>
    <?php
    if(isset($_GET["n"]) && isset($_GET["s"])){
        $nome=$_GET["n"];
        $sobrenome=$_GET["s"];
        echo $nome." ".$sobrenome;
    }
    
    
    ?>
    
</body>
</html>