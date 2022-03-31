<?= $header ?>

    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h2 class="page-title"> <i class="fa fa-percent"></i> Promociones</h2>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('/dashboard/promociones/crear');?>" class="btn btn-success rounded-pill">Agregar nueva promoción <i class="fa fa-plus"> </i></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Nombre</th>
                                <th scope="col" class="text-center">Descripción</th>
                                <th scope="col" class="text-center">Precio</th>
                                <th scope="col" class="text-center">Imagen</th>
                                <th scope="col" class="text-center">Fecha de expiración</th>
                                <th class="center text-danger"><i class="fa fa-bolt"> </i></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($promociones as $promocion):?>
                            <tr>
                            <th scope="row" class="text-center"><?=$promocion['idPromo'];?></th>
                                <td><?=$promocion['nombrePromo'];?></td>
                                <td><?=$promocion['descripPromo'];?></td>
                                <td><?=$promocion['precioPromo'];?></td>
                                <td>
                                    <img src="<?=base_url()?>/uploads/<?=$promocion['imgPromo'];?>" width="100" alt="No existe imagen">
                                </td>
                                <td><?=$promocion['fechaExp'];?></td>

                                <td class="center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <button onclick="borrarPromo(<?= $promocion['idPromo'];?>)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?= $footer ?>

<script>

    function borrarPromo(idPromo)
    {
        swal({
            title: "¿Estas seguro de borrar esta promoción?" + idPromo,
            text: "Una vez borrado no se podra recuperar",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("La promoción se esta borrando", {
                icon: "success",
                buttons: false,
                });
                window.location.href = "<?=base_url('/dashboard/promociones/borrar'); ?>" +"/"+ idPromo;
            }
        });
    }

</script>