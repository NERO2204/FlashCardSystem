<?php
require("classes/Database.php");


class Cards
{
   
    static function getCards($conn)
    {
        session_start();
        $userID=$_SESSION["userID"];

        $data=new Database();
        $conn=$data->getConn();
        
        $sql = "SELECT *
        FROM szo where userID=$userID";
        $results = $conn->query($sql);
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }
    static function newCard($conn,$stranger,$mean,$userID)
    {


        $sql = "INSERT INTO `szo`(`stranger`, `mean`, `userId`) VALUES (:stranger,:mean,$userID)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':stranger',$stranger, PDO::PARAM_STR);
        $stmt->bindValue(':mean',$mean, PDO::PARAM_STR);
        $stmt->execute();
         
      
        

    }
    
 
}




