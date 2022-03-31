<?= $header ?>

    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h2 class="page-title"> <i class="fa fa-book"></i> Libros</h2>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('/dashboard/menu');?>" class="btn btn-warning rounded-pill">Regresar <i class="fa fa-undo"> </i></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> <i class="fa fa-book"></i> Editar Platillo</h5> <br>
                    
                    <form action="<?= base_url('/dashboard/menu/actualizar')?>" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="idPlatillo" value="<?=$platillo['idPlatillo']?>">
                    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?=$platillo['nombrePlatillo'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" value="<?=$platillo['descripPlatillo'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Precio</label>
                        <input type="number" class="form-control" name="precio" min="1" max="5000" value="<?=$platillo['precioPlatillo'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Imagen</label> <br>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Categoría</label>
                        <select class="form-select" aria-label="Default select example" name="idCategoria" required>
                            <option value="" selected>Seleccione una opción</option>
                            <?php foreach($categorias as $categoria): ?>
                                <option value="<?= $categoria['idCategoria'];?>"><?= $categoria['nombreCat'];?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <button class="btn btn-success rounded-pill" type="submit">Guardar  <i class="fa fa-save"></i></button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>

<?= $footer ?>