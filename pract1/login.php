<?php 
$name=$_POST["name"];
$number=$_POST["number"];
$mail=$_POST["email"];
$user='root';
$pass='';
$db='application';
$db=new mysqli('localhost',$user,$pass,$db) or die('unable to connect');
echo "database connected ";
$sql="select * from cust where name='$name' && number='$number' && email='$mail'";
$result=mysqli_query($db,$sql);
$num=mysqli_num_rows($result);

if($num==1){
    header('location:home.php');
}
else{
    header('location:index.php');
}

?>