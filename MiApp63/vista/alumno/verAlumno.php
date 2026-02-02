<?php
require_once __DIR__ . '/../../controlador/AlumnoControlador.php';
$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php?accion=consultarAlumnos');
    exit;
}
$alumnos = AlumnoControlador::obtenerPorId($id);
include __DIR__ . '/../layout/header.php';
?>
<div class="container mt-4">
    <a href="index.php?accion=consultarAlumnos" class="btn btn-secondary mb-3">← Volver</a>
    <h3>Ver Alumno</h3>
    <form>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Cédula</label>
                <input type="text" class="form-control" value="<?= $alumnos['cedula'] ?>" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label>Nombres</label>
                <input type="text" class="form-control" value="<?= $alumnos['nombres'] ?>" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label>Apellidos</label>
                <input type="text" class="form-control" value="<?= $alumnos['apellidos'] ?>" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label>Correo</label>
                <input type="email" class="form-control" value="<?= $alumnos['correo'] ?>" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label>Teléfono</label>
                <input type="text" class="form-control" value="<?= $alumnos['telefono'] ?>" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label>Fecha de Nacimiento</label>
                <input type="date" class="form-control" value="<?= $alumnos['fechaNacimiento'] ?>" readonly>
            </div>
        </div>
    </form>
</div>
<?php include __DIR__ . '/../layout/footer.php'; ?>
