<?= $header ?>

    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h2 class="page-title"> <i class="fa fa-book"></i> Menú</h2>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('/dashboard/menu/crear');?>" class="btn btn-success rounded-pill">Agregar nuevo platillo al menu <i class="fa fa-plus"> </i></a></li>
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
                                <th scope="col" class="text-center">Categoria</th>
                                <th class="center text-danger"><i class="fa fa-bolt"> </i></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($platillos as $platillo):?>
                            <tr>
                            <th scope="row" class="text-center"><?=$platillo['idPlatillo'];?></th>
                                <td><?=$platillo['nombrePlatillo'];?></td>
                                <td><?=$platillo['descripPlatillo'];?></td>
                                <td><?=$platillo['precioPlatillo'];?></td>
                                <!--<td><?=$platillo['imgplatillo'];?></td>arreglar-->
                                <td>
                                    <img src="<?=base_url()?>/uploads/<?=$platillo['imgPlatillo'];?>" width="100" alt="No existe imagen">
                                </td>

                                <!--  ¿Solución definitiva?   -->
                                <?php $categoria = $categorias->where('idCategoria',$platillo['idCategoria'])->first();?>
                                <td><?=$categoria['nombreCat'];?></td>
                                <!-- ------------------------ -->

                                <td class="center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="<?=base_url('/dashboard/menu/editar/'.$platillo['idPlatillo']);?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <button onclick="borrarPlatillo(<?=$platillo['idPlatillo'];?>)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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

    function borrarPlatillo(idPlatillo)
    {
        swal({
            title: "¿Estas seguro de borrar este platillo?" + idPlatillo,
            text: "Una vez borrado no se podra recuperar",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("El platillo se esta borrando", {
                icon: "success",
                buttons: false,
                });
                window.location.href = "<?=base_url('/dashboard/menu/borrar'); ?>" +"/"+ idPlatillo;
            }
        });
    }

</script>