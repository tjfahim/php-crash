<?php
session_start();
if(isset($_SESSION['name'])){
    echo 'Welcome' .$_SESSION['name'].'Boss';
    echo '<a href="/PHP-CRASH/extras/logout.php">logout</a>';
}else{
    echo 'Welcome guest<br>';
    echo '<a href="/PHP-CRASH/10_cookies&sessions.php">Home</a>';
}
?>