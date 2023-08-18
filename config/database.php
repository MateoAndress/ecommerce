<?php 
require_once __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

class DatabaseConnection{

    
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $charset = 'utf8mb4';

    private $connection;

    public function __construct(){
        $this->host = $_ENV['DB_HOST'];
        $this->username = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->dbname = $_ENV['DB_NAME'];

        $this->connect();
    }

    private function connect(){
        try{
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $this->connection = new PDO($dsn, $this->username, $this->password, $options);
        }catch(PDOException $e){
            throw new Exception("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConnection(){
        return $this->connection;
    }

}

?>