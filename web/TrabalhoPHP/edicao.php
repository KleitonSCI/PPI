<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("bancoDados.php");
    include_once("carroDA.php");
    if(isset($_GET["carro_id"])){
        $id=$_GET["carro_id"];
        $carro=getCarro($id);
    }
    else{
        die("carro não encontrada");
    }
    ?>
<form action="controller.php" method="POST">
        <label for="marca">Digite a marca</label>
        <input type="text" name="marca" id="marca">
        <br>
        <label for="modelo">Digite o modelo</label>
        <input type="text" name="modelo" id="modelo">
        <br>
        <label for="ano">Digite o ano</label>
        <input type="number" name="ano" id="ano">
        <br>
        <label for="cor">Digite a cor</label>
        <input type="text" name="cor" id="cor">
        <br>
        <br>
        <br>
        <input type="submit" value="Alterar">
        <input type="submit" value="Excluir">
        <input type="text" name="acao" id="acao" value="editar" hidden>
        <script>
            document.getElementById("meuSubmit").addEventListener("click", function(event) {
    
            event.preventDefault();
  
  
            document.getElementById("acao").value = "excluir";
            
});
        </script>
    </form>
</body>
</html>