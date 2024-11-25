<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="numero">Insira um Número</label>
        <input type="number" name="num" id="numero">
        <input type="submit" value="VERIFICAR">
    </form>
    <?php 
    if(isset($_GET["num"])){
        $n = $_GET["num"];
        if($n%2==0){
            echo $n." é Par";
        }
        else{
            echo $n." é Impar";
        }
    }
    ?>
</body>
</html>