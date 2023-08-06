<?php

class Cart {
    private $id;
    private $userId;
    private $status;
    // Otros atributos y métodos

    public function __construct($id, $userId, $status) {
        $this->id = $id;
        $this->userId = $userId;
        $this->status = $status;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getStatus() {
        return $this->status;
    }

    // Métodos adicionales según necesidad
}

?>
