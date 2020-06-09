<?php
    try 
        {
            $pdo = new PDO('mysql:host=localhost;dbname=force3;charset=utf8', 'root', '');
            return $pdo;
        }
    catch(Exception $e)
        {
            die('Erreur de la connexion à la base de données'. $e->getMessage());
        }