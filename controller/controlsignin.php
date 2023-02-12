<?php
if(isset($_POST['submit']))
{

    $username = trim(htmlspecialchars($_POST['username']));
    $password = sha1(htmlspecialchars($_POST['password']));
    if(!empty($username) and !empty($password)){
        $user= userExist($username, $password, $pdo);
        if($user){
            $_SESSION['userid']= $user['id'];
            
            header('location: index.php');
        }else{
            $error = "Non d'utilisateur ou mot de passe incorect";
        }

    }else{
        $error = "Certains champs sont vides";
    }
}

?>
