<?php
require_once __DIR__ . '/../../controlador/AlumnoControlador.php';

// Obtener todos los alumnos
$alumnos = AlumnoControlador::obtenerTodos();

include __DIR__ . '/../layout/header.php';
?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="index.php?accion=menu" class="btn btn-secondary">← Volver al Menú</a>
    </div>

    <h3>Listado de Alumnos</h3>

    <table class="table table-bordered table-hover mt-3 text-center">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Fecha Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $a): ?>
                <tr>
                    <td><?= $a['id'] ?></td>
                    <td><?= $a['cedula'] ?></td>
                    <td><?= $a['nombres'] ?></td>
                    <td><?= $a['apellidos'] ?></td>
                    <td><?= $a['correo'] ?></td>
                    <td><?= $a['telefono'] ?></td>
                    <td><?= $a['fechaNacimiento'] ?></td>
                    <td>
                        <!-- VER -->
                        <a href="index.php?accion=verAlumno&id=<?= $a['id'] ?>" class="btn btn-sm btn-info me-1">Ver</a>
                        <!-- EDITAR -->
                        <a href="index.php?accion=editarAlumno&id=<?= $a['id'] ?>"class="btn btn-sm btn-warning me-1">Editar</a>

                        <!-- ELIMINAR -->
                        <a href="index.php?accion=eliminarAlumno&id=<?= $a['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este alumno?');"> Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
