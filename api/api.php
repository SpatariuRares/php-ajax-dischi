<?php 
    //richiesta al sito
    require_once __DIR__ . '/../data/database.php';
    //lo leggo come j-son
    header('Content-Type: application/json');
    //mando dati 
    echo json_encode($dischi); 
?>