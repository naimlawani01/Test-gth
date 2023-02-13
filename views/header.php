<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-state=1">
      <title>Accueil</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
      <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>
<body>
    <header>
    <?php if(isConnected()): ?>
        <a href="index.php" class="logo"><i class="ri-home-fill"></i><span>Logo</span></a>
        <ul class="navbar">
           <li><a href="#index.php" class="active">Accueil</a></li>
           <li><a href="#">Post</a></li>
           <li><a href="#">Blog</a></li>
           <li><a href="#">Contact</a></li>
       </ul> 
       <?php else: ?>
        <a href="index.php" class="logo"><i class="ri-home-fill"></i><span>Logo</span></a>
        <ul class="navbar">
           <li><a href="#index.php" class="active">Accueil</a></li>
           <li><a href="#">About Us</a></li>
           <li><a href="#">Blog</a></li>
           <li><a href="#">Pages</a></li>
           <li><a href="#">Contact</a></li>
       </ul> 
       <?php endif; ?>
            <?php if(isConnected()): ?>
            <div class="navbar">
                <a class="user" href="#"><i class="ri-user-line"></i><?php $user= getUser($_SESSION['userid'], $pdo); ?>  <?=$user['username'] ?></a>
                <div class="main">
                    <a class="main" href="logout.php"><i class="ri-logout-box-line"></i>Se déconnecter</a>
                </div>
            </div>
            <?php else: ?>
                <div class="main">
                <a href="signin.php" class="user"><i class="ri-user-line"></i>Connexion</a>
                <a href="signup.php">Inscription</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
            <?php endif; ?>
    </header>


<!--js script-->
<script type="text/javascript" src="script.js"></script>

</body>
</html>