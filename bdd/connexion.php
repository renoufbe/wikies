<?php

$connexion = new PDO('mysql:host=localhost;dbname=wikies', 'root', '');

function getNotes(){
    global $connexion;
    return $connexion->query("SELECT * FROM note")->fetchAll();
}