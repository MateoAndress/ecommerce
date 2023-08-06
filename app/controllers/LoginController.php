<?php 

class LoginController{

    public function login(){

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $user = $_POST['user'];
            $password = $_POST['password'];
            echo "Usuario: " . $user;
            echo "Contraseña: ". $password;
;        }

    }
    
}

$loginController = new LoginController();
$loginController->login();
?>