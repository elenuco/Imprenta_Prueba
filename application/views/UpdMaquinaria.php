<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($id as $data) { ?>

<form method="post" action="<?php echo base_url(); ?>Maquinas/update_maquinaria" >
    
    <input type="hidden" name="id" value="<?php echo $data->id_consultorio; ?>">

    <div class="form-group">
        <label>Codigo:</label>
        <input type="text" name="consultorio" maxlength="50" class="form-control input-rounded" value="<?php echo $data->codigo; ?>">
    </div>
    <div class="form-group">
        <label>Nombre:</label>
        <input type="text" name="consultorio" maxlength="50" class="form-control input-rounded" value="<?php echo $data->nombre; ?>">
    </div>
    <select name="rol_id" class="btn-block form-control " id="rol_id">
     <option value="">Selecione nivel de acceso</option>
     <?php foreach($this->usuarios_model->mostrar_roles() as $r): ?>
    <option value="<?=$r->tipo?>"<?=$r->id_tipo==$data->id_tipo ? 'selected': ''?>><?=$r->tipo?></option>
    <?php endforeach; ?>
    </select>
    <div class="form-group">
        <label>Tipo:</label>
        <input type="text" name="consultorio" maxlength="50" class="form-control input-rounded" value="<?php echo $data->descripcion; ?>">
    </div>
    <div class="d-flex flex-row-reverse">
        <div class="col-lg-2">
            <a type="buttom" class="btn btn-danger btn-block" href="<?php echo base_url(); ?>Maquinas">Cancelar</a>
        </div>
        <div class="col-lg-2">
            <input type="submit" name="submit" value="Guardar" class="btn btn-success btn-block" >
        </div>
    </div>
    
</form>

<?php } ?>
</body>
</html>