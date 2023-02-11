<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquinarias</title>
</head>
<body>
    <header>
        <nav>
           
        </nav>
    </header>
    <table>
        <thead>
            <tr>
                <button>
                <a type="button" href="<?php echo base_url();?>Maquinas/add_maquinaria">Nuevo</a>
                </button>
            
            </tr>
            <tr>
                <th>#</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maquinaria as $r):?>
         <tr>
                <td><?=$r->id?></td>
                <td><?=$r->codigo?></td>
                <td><?=$r->nombre?></td>
                <td><?=$r->tipo_id?></td>
                <td><?=$r->descripcion?></td>
                <td>
                 <a class="dropdown-item" href="<?php echo base_url();?>Maquinas/delete_maquinaria?id=<?=$r->id?>">Eliminar</a>

                <a class="dropdown-item" href="<?php echo base_url();?>Maquinas/accion_maquinaria?id=<?=$r->id?>">Editar</a>

                </td>
         </tr>
         <?php endforeach; ?> 
        </tbody>
    </table>
</body>
</html>