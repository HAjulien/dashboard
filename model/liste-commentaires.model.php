<?php

include('config/config.inc.php');

include('model/pdo.inc.php');

try{
    $query= 
    "SELECT comment_content, display_name, post_title

    FROM blog_comments

    INNER JOIN blog_posts
    ON comment_post_ID = post_ID

    INNER JOIN blog_users
    ON comment_author = blog_users.ID
    ";

    $req = $pdo->query($query);
    $req-> setFetchMode(PDO::FETCH_ASSOC);

    $data = $req->fetchAll();
    // var_dump($data);


}catch (Exception $e) {
    die('Erreur MySQL : ' . $e->getMEssage());

}

$titre = "liste des commentaires";