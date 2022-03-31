<?= $header ?>

    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h2 class="page-title"> <i class="fa fa-book"></i> Promociones</h2>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('/dashboard/promociones');?>" class="btn btn-warning rounded-pill">Regresar <i class="fa fa-undo"> </i></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> <i class="fa fa-book"></i> Agregar promoción</h4> <br>
                
                <?php if(isset($validation)):?>
                    <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif;?>
                
                <form action="<?= base_url('/dashboard/promociones/guardar')?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="Promoción" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" value="<?= old('descripcion') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio (opcional)</label>
                        <input type="number" class="form-control" name="precio" min="1" max="5000" value="<?= old('precio') ?>">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen (Recomendación 248x248)</label> <br>
                        <input type="file" class="form-control-file" name="imagen" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha de expiración</label>
                        <input type="date" class="form-control" name="fecha" value="<?= old('fecha') ?>" required>
                    </div>
                    
                    <button class="btn btn-success rounded-pill" type="submit">Guardar<i class="fa fa-save"></i></button>
                </form>

            </div>
        </div>
    </div>
    </div>

<?= $footer ?>