<?php if(session()->getFlashdata('loguin')): ?>
    <div class="alert alert-danger alert-dismissible">
        <?= session()->getFlashdata('loguin') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<?php if(session()->getFlashdata('msg')): ?>
    <div class="alert alert-danger alert-dismissible">
        <?= session()->getFlashdata('msg') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<div class="container mt-4 mb-4 d-flex justify-content-center">
    <div class="card" style="width: 50%;">
        <div class="card-header text-center">
            <h2>Iniciar sesión</h2>
        </div>          
        <form class="needs-validation" novalidate method="post" action="<?php echo base_url('/enviar-login') ?>">
            <div class="card-body" media="(max-width:768px)">
                <div class="col-12 mb-2">
                    <label for="usuario" class="form-label">Nombre de usuario</label>
                    <input name="usuario" type="text" class="form-control <?php if(session()->getFlashdata('userWrong')) echo 'is-invalid'; ?>" placeholder="Usuario" value="<?= set_value('usuario') ?>" required>
                    <?php if(session()->getFlashdata('userWrong')): ?>
                        <div class="invalid-feedback"><?= session()->getFlashdata('userWrong')?></div>
                    <?php endif; ?>
                </div>
                <div class="file mb-2">
                   <label for="pass">Contraseña</label>
                   <input type="password" name="pass" class="form-control <?php if(session()->getFlashdata('passWrong')) echo 'is-invalid'; ?>" placeholder="contraseña" required>
                   <?php if(session()->getFlashdata('passWrong')): ?>
                        <div class="invalid-feedback"><?= session()->getFlashdata('passWrong')?></div>
                    <?php endif; ?>
                </div>
                <input type="submit" value="Ingresar" class="btn btn-success">
                <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>
