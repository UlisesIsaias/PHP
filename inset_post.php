<?php
class Usuario {
    private $conn;

    public function __construct($host, $user, $pass, $db) {
        $this->conn = new mysqli($host, $user, $pass, $db);

        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    public function insertarUsuario($nombre, $email) {
        $sql = "INSERT INTO usuarios (nombre, email) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $nombre, $email);

        if ($stmt->execute()) {
            return "Usuario insertado correctamente.";
        } else {
            return "Error al insertar: " . $stmt->error;
        }
    }
}
?>
