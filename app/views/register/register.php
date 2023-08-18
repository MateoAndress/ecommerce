<?php include __DIR__.'/../../../templates/header.php'; ?>

<div class="container mt-4" style="margin-bottom: 100px;">
    <h3>Registrarse prueba</h3>
    <form id="form_register" action="/../ecommerce/app/controllers/RegisterController.php" method="post">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 mb-2">
                <input  type="text" class="form-control" placeholder="Primer Nombre" 
                        aria-label="Primer Nombre:"
                        name="name" required>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 mb-2">
                <input  type="text" class="form-control" placeholder="Primer apellido" 
                        aria-label="Primer apellido:"
                        name="lastname" required>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 mb-2">
                <input  type="email" class="form-control" placeholder="Correo electrónico" 
                        aria-label="Correo electrónico:"
                        name="mail" required>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 mb-2">
                <input  type="password" class="form-control" placeholder="Contraseña" 
                        aria-label="Contraseña:"
                        name="password" required>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 mb-2 d-flex justify-content-center">
            <button type="submit" class="btn btn-warning btn-lg text-white">Registrarme</button>
        </div>
    </form>
</div>

<?php include __DIR__.'/../../../templates/footer.php'; ?>