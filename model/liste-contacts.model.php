<?php

include('config/config.inc.php');

include('model/pdo.inc.php');

try{
    $query= 
    "SELECT  contact_ID, contact_name, contact_email, contact_phone

    FROM blog_contacts

    ";

    $req = $pdo->query($query);
    $req-> setFetchMode(PDO::FETCH_ASSOC);

    $data = $req->fetchAll();
    // var_dump($data);


}catch (Exception $e) {
    die('Erreur MySQL : ' . $e->getMEssage());

}

$titre = "liste des contacts";