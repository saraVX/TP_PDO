<?php
class Database {
    private $host = 'mysql:host=penguin.linux.test;dbname=tp_pdo;charset=utf8';
    private $username = 'sarah';
    private $password = 'monmdp';
    private $bdd;

    public function connexion() {
        try {
            $this->bdd = new PDO($this->host, $this->username, $this->password);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->bdd;
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }
}
?>
