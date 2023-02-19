<?php
session_start();
require('../app/dbconnexion.php');
require('../app/function.php');
require('../controller/controlsignup.php');


?>
<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
    <?php require_once('header.php'); ?>
        
       <!-- <div class="container">
            <h1> Veuillez vous inscrire</h1>
            <form action="" method="post">
                <div class="form-group row">
                    <p style="color: red;" class="col-sm-4 offset-md-3 col-form-label"><?php if(isset($error)) echo $error; ?></p>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 offset-md-3 col-form-label">Username</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="username" id="username" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                <label for="password" class="col-sm-2  offset-md-3 col-form-label">Mot de passe</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="repassword" class="col-sm-2  offset-md-3 col-form-label">Repetez le mot de passe</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" name="repassword" id="repassword" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-5 col-sm-10">
                        <input type="submit" name="submit" class="btn btn-primary" value="Se connecter">
                    </div>
                </div>
            </form>
        </div> -->

    <div class="login">
        

        <h1 class="text-center">Veuillez vous inscrire</h1>
        
        <form  action="" method="post" class="needs-validation">
                <p style="color: red;" class="alert alert-light"><?php if(isset($error)) echo $error; ?></p>

            <div class="form-group ">
                <label for="username" class="form-label" >Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="">
                <div class="invalid-feedback">
                    Veullez saisir votre Username
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="form-label" >Mot de passe </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="">
                <div class="invalid-feedback">
                    Saisir le mot de passe
                </div>
            </div>
            <div class="form-group">
                <label for="repassword" class="form-label" >Répéter le mot de passe </label>
                <input type="password" class="form-control" name="repassword" id="repassword" placeholder="" >
                <div class="invalid-feedback">
                    Répéter le mot de passe
                </div>
            </div>
            
            <input class="btn btn-outline-dark w-100" type="submit" name="submit" value="S'inscrire">
        </form>

    </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>