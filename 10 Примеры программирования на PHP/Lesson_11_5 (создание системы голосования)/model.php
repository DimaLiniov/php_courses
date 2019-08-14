<?php

class Model {
    
    private $pdo;
    
    public function __construct() {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=mysite', 'root', '');
        } catch (PDOException $e) {
            echo 'Ошибка подключения к базе данных!';
        }
    }
    
    public function getPoll($id) {
        $query = 'SELECT * FROM `polls` WHERE `id` = ?';
        $poll = $this->pdo->prepare($query);
        $poll->execute([$id]);
        return $poll->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getVariants($poll_id) {
        $query = 'SELECT * FROM `variants` WHERE `poll_id` = ?';
        $variants = $this->pdo->prepare($query);
        $variants->execute([$poll_id]);
        return $variants->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getVoters($variant_ids) {
        $in = str_repeat('?,', count($variant_ids) - 1).'?';
        $query = "SELECT * FROM voters WHERE `variant_id` IN ($in)";
        $voters = $this->pdo->prepare($query);
        $voters->execute($variant_ids);
        return $voters->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function addVoter($variant_id) {
        $query = 'INSERT INTO `voters` (`variant_id`) VALUES(?)';
        $voter = $this->pdo->prepare($query);
        return $voter->execute([$variant_id]);
    }
    
    public function getPollOnVariantId($variant_id) {
        $query = 'SELECT * FROM `polls` WHERE `id` = (SELECT `poll_id` FROM `variants` WHERE `id` = ?)';
        $poll = $this->pdo->prepare($query);
        $poll->execute([$variant_id]);
        return $poll->fetch();
    }
    
}

?>