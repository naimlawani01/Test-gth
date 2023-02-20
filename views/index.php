<?php
session_start();
require('../app/function.php');
    require('../app/dbconnexion.php');
    require('../controller/controlpost.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="boutton.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Bootstrap CSS -->
    </head>
    <body>
        <?php require_once('header.php'); ?>
        <div class="container">
            <p>Home > <a href="">Posts</a> </p>
            <div class="title">
                <h1>Nos meilleurs Posts</h1>
            </div>
        </div>
        
        <!---Selector 1-->
    <div class="container selector">
        <div id="selectField">
            <p id="selectText"> Other categories</p>
            <img src="arrow.png" id="arrowIcon">
        </div>
    <ul id="list" class="hide">
        <ul>
            <li class="options">
            <p>Psg-Bayern</p>
            </li>
            <li class="options">
            <p>AC Milan-Tottenham</p>
            </li>
            <li class="options">
            <p>Frankfort-Naples</p>
            </li>
            <li class="options">
            <p>Bruges-Benfica</p>
            </li>
            <li class="options">
            <p>Dortmund-Chelsea</p>
            </li>
        </ul>
    </div>

    <!---Selector 2-->
    <div class="container selector">
        <div id="selectField">
            <p id="selectText">Other Tags</p>
            <img src="arrow.png" id="arrowIcon">
        </div>
    <ul id="list" class="hide">
        <ul>
            <li class="options">
            <p>Psg</p>
            </li>
            <li class="options">
            <p>AC Milan</p>
            </li>
            <li class="options">
            <p>Naples</p>
            </li>
            <li class="options">
            <p>Benfica</p>
            </li>
            <li class="options">
            <p>Dortmund</p>
            </li>
        </ul>
    </div>

        <!---Selector 3-->
        <div class="container selector">
        <div id="selectField">
            <p id="selectText">Filter</p>
            <img src="arrow.png" id="arrowIcon">
        </div>
    <ul id="list" class="hide">
        <ul>
            <li class="options">
            <p>LDC</p>
            </li>
            <li class="options">
            <p>Europa League</p>
            </li>
            <li class="options">
            <p>Conferance League</p>
            </li>
            <li class="options">
            <p> Nations League</p>
            </li>
            <li class="options">
            <p>Uefa Euro</p>
            </li>
        </ul>
    </div>

<style>
    .posts{
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: center;
    }
    .card{
        width: 30%;
        margin-bottom: 2rem;
    }
    .card-title{
        font-weight: 600;
    }
    .card-date{
        font-weight: 400;
        color: rgb(255, 119, 85);
    }
    .card-text{
        
        margin: 1rem 0 1rem 0;
        font-weight: 300;
        color: rgb(66, 61, 61);
    }
    a.seeall{
        display:inline-block;
        padding:0.55rem 1.5rem;
        border: 1px solid #3b3a3ab5;
        margin:0 0.3em 0.3em 0;
        border-radius:0.12em;
        box-sizing: border-box;
        text-decoration:none;
        font-family:'Roboto',sans-serif;
        font-weight:300;
        color:#000000;
        text-align:center;
        transition: all 0.2s;
    }
    a.seeall:hover{
        color:#000000;
        background-color:#FFFFFF;
    }
    @media all and (max-width:30em){
        a.seeall{
            display:block;
            margin:0.4em auto;
        }
    }
</style>
        <div class="container posts" style="margin-top: 20px;">
            <?php foreach($posts as $post):?>
                <div class="card" >
                    <img width="100%" src="hero.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?=$post['title'] ?></h4 > <span class="card-date"><?=$post['post_date'] ?></span>
                        <?php $user= getUser($post['user_id'], $pdo); ?>
                        <strong><?=$user['username'] ?></strong> 
                        <p class="card-text"><?=substr($post['content'], 0, 100)?></p><a class="seeall" href="post.php?idpost=<?=$post['id'] ?> ">Voir plus</a>
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
        <!--js script-->
        <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src="boutton.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

