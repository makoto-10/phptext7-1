<?php
session_start();

if(empty($_SESSION['auth'])){
    header('Location: sample3.php');
    exit;
}

if(!empty($_POST['logout'])){
    session_destroy();
    header('Location: sample3.php');
    exit;
}

?>
<meta sharset="utf-8">
<form class="" action="" method="post">
    <input type="submit" name="logout" value="ログアウト">
</form>