<?php

class Conexion {
    public static function conectar() {
        $host = "5050"; //postgress
        $dbname = "dbproyecto"; //database name
        $username = "postgres"; //default
        $password = "molimorado21"; //password

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
