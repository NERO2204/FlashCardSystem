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
    <?php
   
    require("classes/Cards.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $db = new Database();
        $conn = $db->getConn();
    
          $stranger= $_POST['stranger'];
          $mean= $_POST['mean'];
          session_start();

          Cards::newCard($conn,$stranger,$mean,$_SESSION['userID']);
     

       
    }
    
    
    
    ?>
    
<div class="container">
<a href="mainSide.php">Főoldal</a> 

<div id="addForm" class="content">
<form action="add.php" method="post">
        <div class="formField">
        <label for="stranger">Stranger</label><br>
        <input type="text" id="stranger" name="stranger"><br>
        </div>
        <div class="formField">
        <label for="mean">Mean</label><br>
        <input type="text" id="mean" name="mean"><br>
            
        </div>
        <div class="formField">
            <button>Add</button>
        </div>
    </form>


</div>

  
</div>
</body>
</html>