<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$email =$_POST['email'];
$pwd=$_POST['pwd'];
try {
   require_once 'model.php';
   $query = "SELECT username FROM users WHERE email=:email AND pwd=:pwd";
   $stat = $pdo ->prepare($query);
  
  $stat ->bindParam(":email",$email);
   $stat->bindParam(":pwd",$pwd);
   $stat->execute();
   $result=$stat->rowCount();
   



   
   if($result>0){
     

session_start();
$_SESSION['username']=$email;
$_SESSION["isloggedin"]=true;
if(isset($_SESSION['username'])){


header("Location:../index.php?user=".$_SESSION['username']);
}
else{
   echo "session not set";
}
   }else{
   
    header("Location:../auth/signup.php?doneregister");
}

   $pdo=null;
   $stat=null;

} catch (PDOException $e) {
    echo "error: ".$e->getMessage();
    
}
}
else{
   header("Location:../index.php?doneregister");
   
}
