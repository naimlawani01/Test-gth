<?php
//require('dbconnexion.php');
function userExist($username, $password, $pdo){
    $checkSql = $pdo->prepare('SELECT *FROM  users WHERE username= :username and pswd= :pswd ');
    $checkSql->execute([
        'username' => $username,
        'pswd' => $password
    ]);
    $data = $checkSql->fetch();
    return $data;
}
function checkUsername($username, $pdo)
{
    $checkSql = $pdo->prepare('SELECT username FROM  users WHERE username= :username');
    $checkSql->execute([
        'username' => $username,
    ]);
    $data = $checkSql->fetch();
    return $data;
}
function addUser($username, $password, $pdo)
{
    $checkSql = $pdo->prepare('INSERT INTO users(username, pswd) VALUES(:username ,  :pswd )');
    return $checkSql->execute([
        'username' => $username,
        'pswd' => $password
    ]);
}
function getPosts($debut, $pdo)
{
    $postsSql= $pdo->prepare("SELECT * FROM  posts  LIMIT $debut, 5");
    $postsSql->execute();

    $posts = $postsSql->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}
function getUser($userId, $pdo){
    $stmt = $pdo->prepare('SELECT * FROM  users WHERE id= :userId');
    $stmt->execute([
        'userId' => $userId,
    ]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}
function getPost($postId, $pdo)
{
    $stmt= $pdo->prepare("SELECT * FROM  posts  WHERE id= :postId");
    $stmt->execute([
        'postId' => $postId,
    ]);

    $post = $stmt->fetch(PDO::FETCH_ASSOC);
    return $post;
}
function getComments($postId, $pdo){
    $stmt= $pdo->prepare("SELECT * FROM  comments  WHERE post_id= :postId");
    $stmt->execute([
        'postId' => $postId,
    ]);

    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $comments;
}

function isConnected(){
   

    if(isset($_SESSION['userid']) && $_SESSION['userid'] != null){
        return true;
    }else{
        return false;
    }
}
function addPost($title, $content, $userId, $pdo)
{
    $postDate = date('y-m-d');
    $stmt = $pdo->prepare('INSERT INTO posts(title, content, user_id, post_date ) VALUES(:title ,  :content, :userId, :post_date )');
    return $stmt->execute([
        'title' => $title,
        'content' => $content,
        'userId' => $userId,
        'post_date' => $postDate
    ]);
}
function addComment($comment, $postId, $userId, $pdo)
{
    $commentDate = date('y-m-d');
    $stmt = $pdo->prepare('INSERT INTO comments(comment, post_id, user_id, date_comment ) VALUES(:comment ,  :postId, :userId, :date_comment )');
    return $stmt->execute([
        'comment' => $comment,
        'postId' => $postId,
        'userId' => $userId,
        'date_comment' => $commentDate
    ]);
}
function countPosts($pdo){
    $postsSql= $pdo->prepare("SELECT count(*) as nbr  FROM  posts  ");
    $postsSql->execute();

    $posts = $postsSql->fetch(PDO::FETCH_ASSOC);
    return $posts;
}
?>