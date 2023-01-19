<?php

// require("Cards.php");
// require("Card.php");
// $cards=new Cards();
// $data=new Database();
// $conn=$data->getConn();
// $cardsArrray=array();
// $cardsarray=$cards->getCards($conn);
// $json=json_encode($cardsarray);
// echo $json;





//  $cardsArrray=array();
//  $cardsarray=$cards->getCards($conn);
//  $json=json_encode($cardsarray);
//  echo $json;





//  require("Cards.php");
//  require("Card.php");

//  $cards=new Cards();
//  $data=new Database();
//  $conn=$data->getConn();
//  $cardsArrray=array();
//  $cardsarray=$cards->getCards($conn);
//  var_dump($cardsarray);
//  $json=json_encode($cardsarray);
//   echo $json;








  require("classes/Cards.php");
  require("classes/Card.php");
    
    $cards=new Cards();
    $data=new Database();
    $conn=$data->getConn();
    $cardsArrray=array();
    $cardsarray=$cards->getCards($conn);
    $json=json_encode($cardsarray);
    echo $json;

    
  




 


 
// $conn =mysqli_connect("localhost","root","","flashcardsystem") or die("Error".mysqli_error($conn));

// session_start();

// $userID=$_SESSION["userID"];
// $sql="select * from szo where userID=$userID";

// $result=mysqli_query($conn,$sql) or die("error".mysqli_error($conn));
// $myArray=array();
// while($row=mysqli_fetch_assoc($result))
// {
//     $myArray[]=$row;

// }

// mysqli_close($conn);
// header('Content-type:application\json');
// //$json=file_get_contents('json.json');
// //$myArray=array("user1"=>array("firstName"=>"Mike","lastName"=>"Smith","age"=>"35"),"user2"=>array("firstName"=>"John","lastName"=>"Smith","age"=>"34"));

// $json=json_encode($myArray);
// echo $json;
