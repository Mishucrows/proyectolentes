<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo URL?>productos/ingresarProdu">
        <input type="text" name="nombreProducto">
        <input type="text" name="marcaProducto">
        <input type="text" name="tipoProducto">
        <input type="text" name="precioProducto">
        <input type="text" name="materialProducto">
        <input type="text" name="sexoProducto">
        <input type="submit" value="enviar">
    </form>
</body>
</html>