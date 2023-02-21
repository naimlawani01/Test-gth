<header>
    <div class="container">
        <a href="index.php" class="logo"><i class="ri-football-line"></i><span>DEVOP</span></a>
        <nav >
            <ul class="navbar">
                <li><a href="index.php" class="active">Accueil</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul> 
        </nav>
        <div>
            <ul>
            <?php if(isConnected()): ?>
                <li>
                    <a class="user" href="#"><i class="ri-user-line"></i><?php $user= getUser($_SESSION['userid'], $pdo); ?>  <?=$user['username'] ?></a>
                </li>
                <li >
                    <a class="main" href="logout.php"><i class="ri-logout-box-line"></i>Se déconnecter</a>
                </li>
            <?php else: ?>
                <li><a href="signin.php"><i class="ri-user-line"></i>Connexion</a> </li>
                <li><a href="signup.php"><i class="ri-user-add-line"></i>Inscription</a> </li>
            </ul>
        </div>
            <?php endif; ?>
            
        <div class="bx bx-menu" id="menu-icon"></div>  
    </div>
</header>