<?php
    session_start();
    require('../app/function.php');
    require('../app/dbconnexion.php');
    require('../controller/controlpost.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="boutton.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Document</title>
</head>
<body>
    <?php require('header.php'); ?>
    <style>
        .hero{
            height: 86vh;
            width: 100%;
            background-image: url("hero.jpg");
            background-repeat: no-repeat;
            background-color: rgb(148, 194, 234);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .hero h1{
            font-weight: 900;
            font-size: 4rem;
            color: white;
        }
        .hero p{
            font-weight: 200;
            font-size: 1rem;
            color: white;
        }
        .icon-hero{
            font-size: 3rem;

        }
        .cat-card{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .cat-item{
            font-weight: 600;
            width: 25%;
            box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);
            padding: 8rem 6rem;
        }
        .cat{
            text-align: center;
            
            margin-top: 2rem;
            margin-bottom: 4rem;
        }
        .cat h1{
            text-align: center;
            margin-bottom: 2rem;
            font-weight: 800;
        }
    </style>
    <div class="hero">
        <h1>FBlog</h1>
        <p>Le meilleur du foot <i class="icon-hero ri-football-line"></i></p>
    </div>
    <section class="container cat">
        <h1>Nos Meilleurs categories</h1>
        <div class="cat-card">
            <div class="cat-item"><img src="laliga-h-300x300.jpg">
                LaLiga
            </div>
            <div class="cat-item"><img src="L1.svg">
                Ligue 1
            </div>
            <div class="cat-item"><img src="Premier_League_Logo.svg.png">
                Premier League
            </div>
        </div>
    </section>
</body>
</html>