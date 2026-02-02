<?php
require_once __DIR__ . '/../../controlador/AlumnoControlador.php';
$id = $_GET['id'] ?? null;
if(!$id){
    header('Location:index.php?accion=consultarAlumnos');
    exit;
}
$alumnos = AlumnoControlador::obtenerPorId($id);

include __DIR__ . '/../layout/header.php';
?>
<div class="container mt-4">
    <a href="index.php?accion=consultarAlumnos" class="btn btn-secondary mb-3"> ← Volver</a>
    <h3>Editar Alumno</h3>
    <form action="index.php?accion=actualizarAlumno" method="POST">
        <input type="hidden" name="id" value="<?= $alumnos['id'] ?>">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Cédula</label>
                <input type="text" name="cedula" class="form-control" value="<?= $alumnos['cedula'] ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Nombres</label>
                <input type="text" name="nombres" class="form-control" value="<?= $alumnos['nombres'] ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Apellidos</label>
                <input type="text" name="apellidos" class="form-control" value="<?= $alumnos['apellidos'] ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Correo</label>
                <input type="email" name="correo" class="form-control" value="<?= $alumnos['correo'] ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label>Teléfono</label>
                <input type="text" name="telefono" class="form-control" value="<?= $alumnos['telefono'] ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label>Fecha de Nacimiento</label>
                <input type="date" name="fechaNacimiento" class="form-control" value="<?= $alumnos['fechaNacimiento'] ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
<?php include __DIR__ . '/../layout/footer.php'; ?>