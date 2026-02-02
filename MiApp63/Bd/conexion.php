<?php
class Conexion {
    public static function conectar() {
        // 1. Parámetros de conexión
        $servidor = "localhost:3307";
        $usuario = "root";
        $contra = "1234";
        $base_datos = "sistema_usuario_db";
        try {
            // 2. Conexión PDO para MySQL
            $pdo = new PDO("mysql:host=$servidor;dbname=$base_datos;charset=utf8", $usuario, $contra);

            // 3. Configuración de errores
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>