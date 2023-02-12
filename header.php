<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Imrane Lawani Projet</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <?php if(isConnected()): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="addpost.php">Ajouter un post</a>
                </li>
            <?php endif; ?>
        </ul>
        <div class="my-2 my-lg-0">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php if(isConnected()): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php $user= getUser($_SESSION['userid'], $pdo); ?>  <?=$user['username'] ?></a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="logout.php">Se deconnecter</a>
                </div>
            </li>
            <?php else: ?>
                <li class="nav-item active">
                    <a class="nav-link" href="signin.php">Se connecter </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="signup.php">S'inscrire </a>
                </li>
            <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>