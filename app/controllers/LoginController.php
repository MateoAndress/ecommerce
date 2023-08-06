<?php 
require_once __DIR__ . '/../../config/database.php';


class LoginController{

    public function login(){

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $user = $_POST['user'];
            $password = $_POST['password'];
            echo "Usuario: " . $user;
            echo "Contraseña: ". $password;
            $database = new DatabaseConnection();
            $connection = $database->getConnection();
;        }

    }
    
}

$loginController = new LoginController();
$loginController->login();
?>