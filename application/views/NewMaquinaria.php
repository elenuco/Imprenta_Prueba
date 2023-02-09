<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar </title>
</head>

<body>
    <form action="<?php echo base_url(); ?>Maquinas/save_maquinaria" method="post">

        <input type="text" name="codigo" placeholder="Nombre" required>
        <input type="text" name="nombre" placeholder="Apellido" required>
        <select name="tipo" id="">

        </select>
        <input type="text" name="descripcion" placeholder="Nombre" required>
        <input type="submit" name="submit" value="Guardar" class="btn btn-info btn-block col-lg-4" >
    </form>
</body>

</html>