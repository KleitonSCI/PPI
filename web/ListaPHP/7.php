<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="numero">Numero</label>
        <input type="number" id="numero" name="num">
        <input type="submit" value="VER TABUADA">
</form>
    <?php
    if(isset($_GET["num"])){
        $n = $_GET["num"];
        for($i=1;$i<11;$i++){
            $m=$n*$i;
            echo $m."<br>";
        }
    }
    ?>
</body>
</html>