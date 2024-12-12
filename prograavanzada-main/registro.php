<?php



include 'Conexion.php';




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $username = $_POST['nombre'];
    $email = $_POST['correo'];
    $password = $_POST['contraseña'];

    //esto encripta la contraseña
    $password_hashed = password_hash($password, PASSWORD_BCRYPT);

    
    $conn = Conexion::conectar(); //conexion

    try {
       
        
        $sql = "INSERT INTO login_register (nombre, correo, contraseña) VALUES (:username, :email, :password)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':username', $username);

        $stmt->bindParam(':email', $email);

        $stmt->bindParam(':password', $password_hashed);

     
        $stmt->execute();

        echo "Usuario registrado correctamente."; //no funcionaba con $exp
    } catch (PDOException $e) {
        echo "Error al registrar el usuario: " . $e->getMessage();
    }
}
?>
