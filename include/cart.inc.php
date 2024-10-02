<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$email =$_POST['email'];
$items=$_POST['items'];
try {
   require_once 'model.php';
   $query = "INSERT INTO cart VALUES(:username,:items)";
   $stat = $pdo ->prepare($query);
  
  $stat ->bindParam(":username",$email);
   $stat->bindParam(":items",$items);
   $stat->execute();
   

   $pdo=null;
   $stat=null;
   header("Location: ../index.php?item=".$items);
}
   

} catch (PDOException $e) {
    echo "error: ".$e->getMessage();
    
}

else{
   header("Location:../index.php?doneregister");
   
}
