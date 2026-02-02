<?php
require_once 'controlador/UsuarioControlador.php';
require_once 'controlador/AlumnoControlador.php';
$accion= $_GET['accion'] ?? 'inicio';
$usuarioCtrl = new UsuarioControlador();
switch ($accion) {
    case 'login':
        include 'vista/login.php';
        break;

    case 'procesarLogin':
        $usuarioCtrl ->procesarLogin($_POST['usuario'], $_POST['clave']);
        break;

    case 'menu':
        include 'vista/menu.php';
        break;

    case 'verAlumno':
        require 'vista/alumno/verAlumno.php';
        break;

    case 'editarAlumno':
         require 'vista/alumno/editar.php';
        break;
        
    case 'consultarAlumnos':
        include 'vista/alumno/consultar.php';
        break;
    case 'actualizarAlumno':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            AlumnoControlador::actualizar($_POST);
        }
        header('Location: index.php?accion=consultarAlumnos');
        break;

    case 'eliminarAlumno':
        if (isset($_GET['id'])) {
            AlumnoControlador::eliminar($_GET['id']);
        }
        header('Location: index.php?accion=consultarAlumnos');
        break;
    
    default:
        include 'vista/inicio.php';
        break;
}
?>