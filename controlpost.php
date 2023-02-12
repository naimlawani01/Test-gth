<?php
    if(isset($_GET['page'])){
        $page= $_GET['page'];
    }else{
        $page= 0;
    }
    $debut= $page*5;

    $posts = getPosts($debut, $pdo);
    $nbrPosts = countPosts($pdo);
    if(isset($_GET['idpost'])){
        $postId= $_GET['idpost'];
        $post= getPost($postId, $pdo);
        $comments = getComments($postId, $pdo);
    }
    if(isset($_POST['addpost'])){
        if(isConnected()){

            $title = trim(htmlspecialchars($_POST['title']));
            $content = htmlspecialchars($_POST['content']);
            if(!empty($title) and !empty($content)){
                $addpost = addPost($title, $content, $_SESSION['userid'], $pdo);
                header('location:'. $_SERVER['HTTP_REFERER']);
                die();
            }else{
                $error= "Saisir tous les champs";
            }
            
        }
    }
?>