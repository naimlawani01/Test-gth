<?php
    session_start();
    require('../app/function.php');
    require('../app/dbconnexion.php');
    require('../controller/controlpost.php');
    require('../controller/controlcomment.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="boutton.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <style>
        a{
    text-decoration: none;
}
a:hover{
    text-decoration: none;
}
    </style>
    <body>
        <?php require_once('header.php'); ?>
        <div class="container" style="margin-top: 20px;">
            <div class="card" >
                <div class="card-body">
                    <h4 class="card-title"><?=$post['title'] ?></h4><?=$post['post_date'] ?>
                    <?php $user= getUser($post['user_id'], $pdo); ?>
                    <strong><?=$user['username'] ?></strong>
                    <p class="card-text"><?=$post['content']?></p>
                </div>
            </div>
            <h3>Commentaires</h3> 
            <?php if(isConnected()): ?>
               <i class="fa fa-plus" aria-hidden="true"></i>
               <form class="form-inline" action="" method="post">
               <input type="hidden" name="postId" value="<?=$post['id'] ?>">
                   <div class="form-group">
                        <textarea name="comment" class="form-control" id="" cols="30" rows="1"></textarea>
                   </div>
                   <div class="form-group">
                        <input class="btn btn-primary" value="Nouveau commentaire" name="addComment" type="submit" class="form-control">
                   </div>
               </form>
            <?php endif; ?>
            <?php foreach($comments as $comment): ?>
            <div class="card">
                <div class="card-header">
                <?php $user= getUser($comment['user_id'], $pdo); ?>
                <strong><?=$user['username'] ?></strong> : <?=$comment['date_comment'] ?>
                </div>
                <div class="card-body">
                    <p class="card-text"><?=$comment['comment'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

