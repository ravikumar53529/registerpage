<?php 
$name=$_POST["name"];
$number=$_POST["number"];
$mail=$_POST["email"];
$user='root';
$pass='';
$db='application';
$db=new mysqli('localhost',$user,$pass,$db) or die('unable to connect');
echo "database connected ";
$sql="INSERT INTO cust(name,number,email) VALUES($name,$number,$mail)";
if ($sql==TRUE){
   header('location:sucess.php');
   }
   else{
    echo "error";
   }
   



?>
