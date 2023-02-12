<?php
session_start();
require('function.php');
    require('dbconnexion.php');
    require('controlpost.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once('header.php'); ?>
        <div class="container" style="margin-top: 20px;">
            <?php foreach($posts as $post):?>
                <div class="card" style="width: 50rem;">
                    <div class="card-body">
                        <h4 class="card-title"><?=$post['title'] ?></h4><?=$post['post_date'] ?>
                        <?php $user= getUser($post['user_id'], $pdo); ?>
                        <strong><?=$user['username'] ?></strong> 
                        <p class="card-text"><?=substr($post['content'], 0, 300 )?></p><a href="post.php?idpost=<?=$post['id'] ?> ">Voir plus</a>
                    </div>
                </div>
            <?php endforeach;?>
            <?php if($page==0): ?>
                <?php if($nbrPosts['nbr']>5): ?>
                <a href="index.php?page=<?=$page+1?>">Suivant</a>
                <?php endif; ?>
                <?php else: ?>
                    <a href="index.php?page=<?=$page-1?>">Précédent</a>
                    <a href="index.php?page=<?=$page+1?>">Suivant</a>
                <?php endif; ?>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

