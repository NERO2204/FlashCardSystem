<?php

class User
{
   
   private $userID;
   private $username;
   private $password;
  
   function getUserID()
   {
    return $this->userID;
   }
   function getUsername()
   {
    return $this->username;
   }
  
   public static function authenticate($conn,$username,$password)
   {



       
       $sql="select *
       from student
       WHERE username = :username";
       $stmt=$conn->prepare($sql);
       $stmt->bindValue(':username',$username,PDO::PARAM_STR);

       $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
       $stmt->execute();
       $user=$stmt->fetch();

       $_SESSION["userID"] = $user->userID;
        echo $_SESSION['userID'];
       

       if($user)
       {
           
          
           return $user->password==$password;
           
           

   
           
       }
      

              
   }
}

  
   

