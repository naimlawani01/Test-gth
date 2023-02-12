<?php
if(isset($_POST['submit']))
{

    $username = trim(htmlspecialchars($_POST['username']));
    $password = htmlspecialchars($_POST['password']);
    $repassword = htmlspecialchars($_POST['repassword']);

    if(!empty($username) and !empty($password) and !empty($repassword)){

        $usernameexist = checkUsername($username, $pdo);
        if($usernameexist){
            $error = "Nom d'utilisateur exite déja";
        }else{
            if($password==$repassword){
                $password = sha1($password);
                addUser($username, $password, $pdo);
                $user= userExist($username, $password, $pdo);
                $_SESSION['userid']= $user['id'];
            
                header('location: index.php');
            }else{
                $error = "Le deux mots de passe ne sont pas identiques";
            }

        }

    }else{
        $error = "Certains champs sont vides";
    }
}

?>
