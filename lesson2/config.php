<?php
$pdo = "";
    try {
        $pdo  = new PDO('mysql:dbname=test; host=localhost', // test -- название базы
            'root', '') ;
    } catch (PDOException $e) {
        die($e->getMessage());
    }