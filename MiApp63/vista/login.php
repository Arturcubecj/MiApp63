<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container mt-5 text-center">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="mb-4">Inicio de Sesión</h2>
            <form action="index.php?accion=procesarLogin" method="post">
                <div class="mb-3 text-start">
                    <label class="form-label">Usuario:</label>
                    <input type="text" name="usuario" class="form-control" required>
                </div>

                <div class="mb-3 text-start">
                    <label class="form-label">Clave:</label>
                    <input type="password" name="clave" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">
                        Ingresar
                    </button>

                    <a class="btn btn-outline-primary" href="index.php?accion=inicio">
                        Regresar al inicio
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
