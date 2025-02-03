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
    <table id="tabela">
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Cor</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    
    <?php
        foreach($lista as $registro){ ?>
        <tr>
            <td><?php echo $registro["idCarro"]?></td>
            <td><?php echo $registro["Marca"]?></td>
            <td><?php echo $registro["Modelo"]?></td>
            <td><?php echo $registro["Ano"]?></td>
            <td><?php echo $registro["Cor"]?></td>
            <td><a href="edicao.php?id=<?php echo $registro["idCarro"]?>"> Editar</a></td>
            <td><a href="exclusao.php?id=<?php echo $registro["idCarro"]?>"> Excluir</a></td>

        </tr>
        <?php
        }
    ?>
    </table>
    </div>
    
    
</body>
</html>