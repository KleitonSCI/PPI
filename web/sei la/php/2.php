<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Somar 2 numeros e imprimir o resultado <br>
    <form action="" method="get">
        <label for="dadosA">A</label>
        <input id="dadosA" name="a" type="number">
        <br>
        <label for="dadosB">B</label>
        <input id="dadosB" name="b" type="number">
        <br><br>
        <input type="submit" value="SOMA">
    </form>
    <?php 
    //var_dump($_REQUEST);
    if(!isset($_REQUEST["a"]) || !isset($_REQUEST["b"])){
        echo "<script> alert('informe a e b');</script>";
        die();
        
    }
    $a=$_REQUEST["a"];
    $b=$_REQUEST["b"];
   
    ?>
    <p>
        NUMERO A: <?php echo $a?><br>
        NUMERO B: <?php echo $b?><br>
        SOMA: <?php echo $a+$b ?>
    </p>
</body>
</html>