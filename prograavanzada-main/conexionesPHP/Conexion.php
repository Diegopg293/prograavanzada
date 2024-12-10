<?php

class Conexion {
    public static function conectar() {
        $host = "5050"; // Cambia si tu servidor PostgreSQL está en otro host
        $dbname = "dbproyecto"; // El nombre de tu base de datos
        $username = "postgres"; // Tu usuario de PostgreSQL
        $password = "molimorado21"; // Tu contraseña de PostgreSQL

        try {
            $conn = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }
}

?>
