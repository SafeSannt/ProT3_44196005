<?php if(session()->getFlashdata('usuario_msj')):?>
    <div class='mt-3 mb-3 ms-3 me-3 h4 text-center alert alert-success alert-dismissible'>
        <button type='buton' class='btn-close' data-bs-dismiss='alert'></button>
        <?php echo session()->getFlashdata('usuario_msj'); ?>
    </div>
<?php endif; ?>
<div class="container mt-5">
    <div class="mt-3">
        <h2 class="text-center">Lista de usuarios</h2>
        <div class="table-responsive">
            <table class="table table-succes table-striped table-light table-bordered" id="users-list">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Dado de baja</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($usuarios): ?>
                        <?php foreach($usuarios as $user): ?>
                            <tr>
                                <td><?php echo $user['id_usuario']; ?></td>
                                <td><?php echo $user['usuario']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['baja']; ?></td>
                                <td>
                                    <?php $id = $user['id_usuario'];?>
                                    <?php if($user['baja'] == "NO") :?>
                                        <a href="<?php echo base_url('/baja_user'.$id);?>" class="btn btn-secondary btn-sm mt-1">Dar de baja</a>
                                    <?php else:?>
                                        <a href="<?php echo base_url('/alta_user'.$id);?>" class="btn btn-secondary btn-sm mt-1">Dar de alta</a>
                                    <?php endif;?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
