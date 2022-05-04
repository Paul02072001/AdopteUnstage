<?php 
        
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=adopteunstage;charset=utf8;port=5500", "root", "");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
