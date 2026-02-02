<?php
require_once __DIR__ . '/../dao/AlumnoDAO.php';
class AlumnoControlador {
    public static function obtenerTodos() {
        $dao = new AlumnoDAO();
        return $dao->obtenerTodos();
    }
    public static function obtenerPorId($id) {
        $dao = new AlumnoDAO();
        return $dao->obtenerPorId($id);
    }
    public static function actualizar($data) {
        $dao = new AlumnoDAO();
        return $dao->actualizar($data);
    }
    public static function eliminar($id) {
        $dao = new AlumnoDAO();
        return $dao->eliminar($id);
    }
}
