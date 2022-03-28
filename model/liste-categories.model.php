<?php

include('config/config.inc.php');

include('model/pdo.inc.php');

try{
    $query= 
    "SELECT DISTINCT cat_descr

    FROM blog_posts

    INNER JOIN blog_categories
    ON post_category = cat_id

    ";

    $req = $pdo->query($query);
    $req-> setFetchMode(PDO::FETCH_ASSOC);

    $data = $req->fetchAll();
    var_dump($data);


}catch (Exception $e) {
    die('Erreur MySQL : ' . $e->getMEssage());

}

$titre = "liste des catégories";