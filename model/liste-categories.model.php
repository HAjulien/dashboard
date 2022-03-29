<?php

include('config/config.inc.php');

include('model/pdo.inc.php');

try{
    $query= 
    "SELECT  cat_descr

    FROM blog_categories


    ";

    $req = $pdo->query($query);
    $req-> setFetchMode(PDO::FETCH_ASSOC);

    $data = $req->fetchAll();
    // var_dump($data);


}catch (Exception $e) {
    die('Erreur MySQL : ' . $e->getMEssage());

}

