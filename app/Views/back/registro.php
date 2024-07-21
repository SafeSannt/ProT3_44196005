<div class="container mt-2 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%;">
        <div class="card-header text-center">
            <h2>Registrarse</h2>
        </div>
        <?php if(session()->getFlashdata('fail')): ?>
            <div class="alert alert-danger alert-dismissible">
                <?= session()->getFlashdata('fail') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form id="registroForm" class="needs-validation" novalidate method="post" action="<?php echo base_url('/enviar_form') ?>">
            <div class="card-body justify-content-center" media="(max-width:768px)">
                <div class="form mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input id="nombre" name="nombre" type="text" class="form-control <?php if(isset($validation['nombre'])) echo 'is-invalid'; ?>" placeholder="Ingrese su nombre" value="<?= isset($oldInput['nombre']) ? $oldInput['nombre'] : '' ?>" required>
                    <?php if(isset($validation['nombre'])): ?>
                        <div class="invalid-feedback"><?= $validation['nombre'] ?></div>
                    <?php endif; ?>
                </div>

                <div class="form mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input id="apellido" type="text" name="apellido" class="form-control <?php if(isset($validation['apellido'])) echo 'is-invalid'; ?>" placeholder="Ingrese su apellido" value="<?= isset($oldInput['apellido']) ? $oldInput['apellido'] : '' ?>" required>
                    <?php if(isset($validation['apellido'])): ?>
                        <div class="invalid-feedback"><?= $validation['apellido'] ?></div>
                    <?php endif; ?>
                </div>

                <div class="form mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="email" class="form-control <?php if(isset($validation['email'])) echo 'is-invalid'; ?>" placeholder="correo@dominio.com" value="<?= isset($oldInput['email']) ? $oldInput['email'] : '' ?>" required>
                    <?php if(isset($validation['email'])): ?>
                        <div class="invalid-feedback"><?= $validation['email'] ?></div>
                    <?php endif; ?>
                </div>

                <div class="form mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input id="usuario" type="text" name="usuario" class="form-control <?php if(isset($validation['usuario'])) echo 'is-invalid'; ?>" placeholder="Nombre de usuario" value="<?= isset($oldInput['usuario']) ? $oldInput['usuario'] : '' ?>" required>
                    <?php if(isset($validation['usuario'])): ?>
                        <div class="invalid-feedback"><?= $validation['usuario'] ?></div>
                    <?php endif; ?>
                </div>

                <div class="form mb-3">
                    <label for="pass" class="form-label">Contraseña</label>
                    <input id="pass" name="pass" type="password" class="form-control <?php if(isset($validation['pass'])) echo 'is-invalid'; ?>" placeholder="contraseña" required>
                    <?php if(isset($validation['pass'])): ?>
                        <div class="invalid-feedback"><?= $validation['pass'] ?></div>
                    <?php endif; ?>
                </div>

                <input type="submit" value="Guardar" class="btn btn-success">
                <a href="<?php echo base_url('/'); ?>" class="btn btn-danger">Cancelar</a>
                <input type="reset" value="Borrar" class="btn btn-secondary">
            </div>
        </form>
    </div>
</div>
