<?php 
session_start();
include __DIR__ . '/layout/header.php';
?>

<div class="container mt-4 px-4">
    <div class="d-flex align-items-center mb-3">
        <h4 class="m-0 fw-semibold">Menú Principal</h4>

        <a class="btn btn-outline-primary btn-sm ms-auto"
           href="index.php?accion=inicio">
            Cerrar sesión
        </a>
    </div>

    <p class="text-muted">
        Bienvenido, <strong><?php echo $_SESSION['usuario']; ?></strong>
    </p>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card-body">
                <h5 class="card-tittle">Alumnos</h5>
                <p class="card-text">Gestion de estudiantes.</p>
                <div class="d-flex justify-content-center gap2">
                    <a href="../index.php?accion=consultarAlumnos" class="btn btn-outline-secondary btn-sm">Consultar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
