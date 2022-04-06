<?= $header ?>

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12 d-flex no-block align-items-center">
        <h2 class="page-title"> <i class="fa fa-archive"></i> Categorías</h2>
        <div class="ms-auto text-end">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url('/dashboard/categorias');?>" class="btn btn-warning rounded-pill">Regresar <i class="fa fa-undo"> </i></a></li>
            </ol>
        </nav>
        </div>
    </div>
</div>

<?php if(session('mensaje')){ ?>
    <div class="alert alert-danger" role="alert">
        <?php
        echo session('mensaje');
        ?>
    </div>
<?php } ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Agregar una categoría</h4><br>
                
                <form method="post" action="<?=base_url('/dashboard/categorias/guardar')?>">
                    <div class="form-group">
                        <label for="nombreC">Nombre de la Categoria</label>
                        <input id="nombreC" value="<?=old('nombreC')?>" class="form-control" type="text" name="nombreC" required>
                    </div>
                    <button class="btn btn-success rounded-pill" type="submit">Guardar <i class="fa fa-save"></i></button>
                </form>      
            </div>
        </div>
    </div>
</div>
<?= $footer ?>
        