<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mainSide.css">
</head>
<body>

<div id="container" class="container">
  
</div>
    


<?php
require("url.php");



session_start();
if($_SESSION['is_logged_in']=true && isset($_SESSION['userID']))
{




    ?>

      <div id="flashcard" class="content">

       <div class="card">
       <a href="http://localhost/FlashKardSystem/index.php"><img src="img/card.JPG" alt="Cant load the picture"></a>
       </div>
   

       <div class="card">
       <a href="add.php"><img src="img/add.JPG" alt="Cant load the picture"></a>
      
       </div>
       <div class="card">
       <a href="logout.php"><img src="img/logout.JPG" alt="Cant load the picture"></a>
      
       </div>


    
</div>

   
    <?php
}
else 
{
    echo "please log in";
    redirect('/login.php');
}




?>


</body>
</html>