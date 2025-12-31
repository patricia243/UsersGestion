<?php
class User {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function create($name, $email, $password) {
        $sql = "INSERT INTO users (name, email, password) 
                VALUES (:name, :email, :password)";
        
        $stmt = $this->pdo->prepare($sql);
        
        return $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_DEFAULT)
        ]);
    }
}
    

