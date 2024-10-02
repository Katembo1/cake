<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$username =$_POST['Username'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$pwd2=$_POST['pwd2'];
try {
   require_once 'model.php';
   $query = "INSERT INTO users VALUES(:username,:email,:pwd)";
   $stat = $pdo ->prepare($query);
  $stat->bindParam(":username",$username);
  $stat ->bindParam(":email",$email);
   $stat->bindParam(":pwd",$pwd);
   $stat->execute();
   $pdo=null;
   $stat=null;
header("Location:../index.php?doneregister");
} catch (PDOException $e) {
    echo "error: ".$e->getMessage();
    
}
}
else{
    echo "<script>alert('start afresh')</script>";
}
