<?php


require 'classes/User.php';
require 'classes/Database.php';
require("url.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $db=new Database();
    $conn=$db->getConn();
    if (User::authenticate($conn,$_POST['username'],$_POST['password']))
    {
        
        session_regenerate_id(true);

        $_SESSION['is_logged_in'] = true;
        
        redirect('/mainSide.php');
      
      

    } else {
        
        $error = "login incorrect";
      
    }
  
}

?>




<?php if (! empty($error)) : ?>
    <p><?= $error ?></p>
<?php endif; ?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mainSide.css">
</head>


<div class="container">


<div id="login_form_box" class="content">
<form method="post">
        <div class="formField">

        <label for="username">Username</label>
        <input type="text" name="username" id="username">
       
    </div>
        <div class="formField">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
            
        </div>
        <div class="formField">
            <button>Login</button>
        </div>
    </form>


</div>


    
</body>
</html>


