<?php



// $conn =mysqli_connect("localhost","root","","flashcardsystem") or die("Error".mysqli_error($conn));
// session_start();
// $userID=$_SESSION["userID"];
// $sql="select * from word where userID=$userID";
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



class Card {
  public $strange;
  public $mean;
  public $theme;
 

  function __construct($strange,$mean,$theme) {
    $this->strange = $strange;
    $this->mean = $mean;
    $this->theme = $theme;
  }
  function getStranger() {
    return $this->strange;
  }
  function getMean() {
    return $this->mean;
  }
  function getTheme()
  {
    return $this->mean;
  }
}




// $myArray=array();
// $test=new Card("test","test","english");
// $test1=new Card("do","csinál","english");
// $test2=new Card("now","most","english");
// $myArray[]=$test;
// $myArray[]=$test1;
// $myArray[]=$test2;


// $sql = "SELECT * FROM word";
// $data=new Database();
// $conn=$data->getConn();
// $results = $conn->query($sql);

// $results->fetchAll(PDO::FETCH_ASSOC);

// header('Content-type:application\json');
// //$json=file_get_contents('json.json');
// //$myArray=array("user1"=>array("firstName"=>"Mike","lastName"=>"Smith","age"=>"35"),"user2"=>array("firstName"=>"John","lastName"=>"Smith","age"=>"34"));

// $json=json_encode($results);
// echo $json;
