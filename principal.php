<?php
require "data/basededatos.php";
$sql = "SELECT * FROM departamentos";
$resultado = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="text-center"><div class="text-primary"><h1><u>Departamentos</u></h1></div></div>
        <a href="new.php" class="btn btn-info">New Departamento</a>
        <table class="table">
            <thead>
                <tr>
                    <th>TItulo</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                    <th>Habitaciones</th>
                    <th>Estacionamiento</th>
                    <th>Acciones</th>
                </tr>
            </thead> 
            <tbody>
            <?php
                foreach($resultado as $departamento):
            ?>
                <tr>
                        <td><?php echo $departamento['titulo'] ?></td>
                        <td><?php echo $departamento['precio'] ?></td>
                        <td><?php echo $departamento['descripcion'] ?></td>
                        <td><?php echo $departamento['habitaciones'] ?></td>
                        <td><?php echo $departamento['estacionamiento'] ?></td>
                        <td>
                            
                        </td>
                </tr>       
            <?php
                endforeach;
            ?>
            </tbody>
        </table>
    </div>  
</body>
</html>