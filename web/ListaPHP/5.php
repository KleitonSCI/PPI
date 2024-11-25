<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="minimo">Minimo</label>
        <input type="number" name="min" id="minimo">
        <label for="maximo">Maximo</label>
        <input type="number" name="max" id="maximo">
        <input type="submit" value="GERAR">
    </form>
    <?php
    if(isset($_GET["min"])&& isset($_GET["max"])){
        $min=$_GET["min"];
        $max=$_GET["max"];
        echo rand($min,$max);
    } 
    ?>
</body>
</html>