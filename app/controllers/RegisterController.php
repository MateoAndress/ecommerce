<?php 
require_once __DIR__ . '/../../config/database.php';

class RegisterController{

    public function registerUser(){
        
        if($_SERVER["REQUEST_METHOD"] ===  "POST"){
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $mail = $_POST['mail'];
            $rawPassword = $_POST['password'];

            $hashedPassword = password_hash($rawPassword, PASSWORD_BCRYPT);

            $database = new DatabaseConnection();
            $conn = $database->getConnection();

            $stmt = $conn->prepare("INSERT INTO usuario (Nombre, Apellido, CorreoElectronico, Contrasena) VALUES (:Nombre, :Apellido, :CorreoElectronico, :Contrasena)");
            $stmt->execute(['Nombre'=>$name, 'Apellido' => $lastname, 'CorreoElectronico' => $mail, 'Contrasena' => $hashedPassword]);

            if ($stmt->rowCount() > 0) {
                echo "Inserción exitosa";
            } else {
                echo "No se pudo insertar el registro";
            }

        }

        
    }
}

$register = new RegisterController();
$register->registerUser();
?>