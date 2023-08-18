<?php 
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__.'/../controllers/Utils.php';

class LoginController extends Utils{

    public function login(){

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            
            $user = $_POST['user'];
            $password = $_POST['password'];
            $database = new DatabaseConnection();
            $conn = $database->getConnection();

            if($this->validation($user, $password)){
                $stmt = $conn->prepare("SELECT CorreoElectronico, Contrasena FROM usuario WHERE CorreoElectronico = :CorreoElectronico");    
                $stmt -> execute(['CorreoElectronico' => $user]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                if($result !== false){
                    
                    $hashedPassword = $result['Contrasena'];

                    if($result && password_verify($password, $hashedPassword)){
                        $alerts = $this->getAlertMessages("SUCCESS","Bienvenido");
                        echo json_encode(array('alerts' => $alerts));
                        }else{
                        $alerts = $this->getAlertMessages("DANGER","Usuario o contraseña incorrectos");
                        echo json_encode(array('alerts' => $alerts));
                    }

                    }else{
                        $alerts = $this->getAlertMessages("DANGER","El usuario ingresado no se encuentra registrado");
                        echo json_encode(array('alerts' => $alerts));
                    } 
                }

            
        }

    }

    public function validation($user, $password){
        if(empty($user)){
            $alerts = $this->getAlertMessages("WARNING","Por favor ingresa un valor en el campo <b>Usuario</b>");
            echo json_encode(array('alerts' => $alerts));
            return false;
        }

        if(empty($password)){
            $alerts = $this->getAlertMessages("WARNING","Por favor ingresa un valor en el campo <b>Contraseña</b>");
            echo json_encode(array('alerts' => $alerts));
            return false;
        }
        return true;
    }
    
}

$loginController = new LoginController();
$loginController->login();
?>