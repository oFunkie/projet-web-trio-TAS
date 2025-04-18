<?php 
 include '../main/access.php';

 $email=htmlspecialchars($_POST['email']);
 $town=htmlspecialchars($_POST['town']);
 $id=$_POST['id'];
 $reqsql = "UPDATE client SET email = '$email', town = '$town' WHERE id=$id";

 if($auth->query($reqsql)){
    header('Location:liste.php')
 }

?>