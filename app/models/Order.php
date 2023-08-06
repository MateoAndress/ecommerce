<?php

class Order {
    private $id;
    private $userId;
    private $createdAt;
    private $status;
    // Otros atributos y métodos

    public function __construct($id, $userId, $createdAt, $status) {
        $this->id = $id;
        $this->userId = $userId;
        $this->createdAt = $createdAt;
        $this->status = $status;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getStatus() {
        return $this->status;
    }

    // Métodos adicionales según necesidad
}

?>
