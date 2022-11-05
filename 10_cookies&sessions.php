<?php
// setcookie('name','aksdn',time()+1200);

// if(isset($_COOKIE['name'])){
//     echo $_COOKIE['name'];
// }

session_start();
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']) ;
    $password = $_POST['password'] ;
  
    if($name=='fahim'&& $password=='password'){
        $_SESSION['name']=$name;
        header('Location: /PHP-CRASH/extras/dashboard.php');
    }else{
        echo 'incorrect password';
    }
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
