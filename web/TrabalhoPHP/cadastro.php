<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carros</title>
    <style>
        form{
            display:flex;
            flex-direction: column;
            width: 200px;
            margin: 0 auto;
        }
        .painel{
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }
    </style>
</head>
<body>
    
    
    <div class="painel">
    <h1>Cadastrar Carros</h1>
    <form action="controller.php" method="POST" enctype="multipart/form-data">
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
        <input type="submit" value="Cadastrar">
        <input type="text" name="acao" value="cadastrar" hidden>
    </form>
    
    </div>
</body>
</html>