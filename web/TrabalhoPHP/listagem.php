<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #painel{
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
        }
        
        td,table,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        table{
            width: 80vw;
        }
    </style>
</head>
<body>
    
    
        
    <?php
    include_once("bancoDados.php");
    include_once("carroDA.php");
    $lista=listarCarros();
    ?>
    <div id="painel">
    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Cor</th>
        </tr>
    
    <?php
        foreach($lista as $registro){ ?>
        <tr>
            <td><a href="edicao.php?carro_id=<?php echo $registro["idCarro"]?>"><?php echo $registro["idCarro"]?></a></td>
            <td><?php echo $registro["Marca"]?></td>
            <td><?php echo $registro["Modelo"]?></td>
            <td><?php echo $registro["Ano"]?></td>
            <td><?php echo $registro["Cor"]?></td>
        </tr>
        <?php
        }
    ?>
    </table>
    </div>
    
    
</body>
</html>