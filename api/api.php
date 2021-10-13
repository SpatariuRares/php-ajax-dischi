<?php 
    //richiesta al sito
    $richesta=[];
    require_once __DIR__ . '/../data/database.php';
    if($_GET["genre"]!="all"){
        foreach ($dischi as $disco){
            if($_GET["genre"]==$disco["genre"]){
                $richesta[]=$disco;
            }
        }
    }else{
        $richesta=$dischi;    
    }
   //lo leggo come j-son
    header('Content-Type: application/json');
    //mando dati 
    echo json_encode($richesta); 
?>