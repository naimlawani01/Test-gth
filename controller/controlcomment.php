<?php 
if(isset($_POST['addComment'])){

    
    if(isConnected()){

        $commentContent = htmlspecialchars($_POST['comment']);
        if(!empty($commentContent)){
            $postId= htmlspecialchars($_POST['postId']);
            $addpost = addComment($commentContent, $postId, $_SESSION['userid'], $pdo);
            header('location:'. $_SERVER['HTTP_REFERER']);
        }else{
            $error= "Saisir tous les champs";
        }
        
    }else{
        header('location: index.php');
    }
}
?>