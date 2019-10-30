<?php
session_start();
if(!empty($_POST['send'])){
    $_SESSION['auth'] = 1;
    header('Location: sample4.php');
    exit;
}

if(!empty($_SESSION['auth'])){
    session_destroy();
}
?>
<meta sharset="utf-8">
<form class="" action="" method="post">
    <input type="submit" name="send" value="ログイン">
</form>