<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $titulo ?> </h3>
    </div>
    <?php if ($this->session->flashdata('ok') <> '') : ?>
        <div class="alert alert-success">
            <i class="fa fa-check" aria-hidden="true"></i> <?php echo $this->session->flashdata('ok'); ?>
        </div>
    <?php endif ?>

    <?php if ($this->session->flashdata('error') <> '') : ?>
        <div class="alert alert-dismissable alert-danger">
            <i aria-hidden="true"></i>
            <ion-icon name="close-outline"></ion-icon> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif ?>
    <!-- /.box-header -->

    <form action="<?php echo $accion ?>" method="post">

        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="" required="true">
        </div>
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Apellidos:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="" required="true">
        </div>
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="" required="true">
        </div>
        <div class="form-group">
            <label for="">Telefono:</label>
            <input type="text" name="movil" id="movil" class="form-control" value="" required="true">
        </div>
        <div class="form-group">
            <label for="">Correo electronico:</label>
            <input type="text" name="email" id="email" class="form-control" value="" required="true">
        </div>
        <div class="form-group">
            <label for="">Estado:</label>
            <select name="inactivo" id="inactivo" class="form-control chosen-select">
                <option value="">Seleccionar una opcion...</option>
                <option value="0">Activa</option>
                <option value="1">Inactiva</option>
            </select>
        </div>
        <br>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <ion-icon name="save-outline"></ion-icon> Guardar
            </button>
            <button type="button" class="btn btn-default" onclick="location.href='<?= site_url('alumnosController/') ?>'">
                <ion-icon name="exit-outline"></ion-icon>
                Regresar
            </button>
        </div>
</div>

</form>


</div>