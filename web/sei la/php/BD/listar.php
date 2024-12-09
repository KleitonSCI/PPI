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
    $lista_pessoa=recupera_lista();
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    
    <?php
        foreach($lista_pessoa as $registro){ ?>
        <tr>
            <td><a href="editar.php?pessoa_id=<?php echo $registro["id"]?>"><?php echo $registro["id"]?></a></td>
            <td><?php echo $registro["nome"]?></td>
            <td><?php echo $registro["email"]?></td>
        </tr>
        <?php
        }
    ?>
    </table>
    
</body>
</html>