<?php

$email = $_POST['email'];
$name = $_POST['fname'];
$gender = $_POST['sex'];
$age= $_POST['age'];
$date =$_POST['date'];

$con = mysqli_connect('localhost','root','');
if(!$con){print ("Connection not created.");}
else
{
mysqli_select_db($con,'Registration');

$sql="insert into appoint values('$email','$name','$gender','$age','$date')";
$query= mysqli_query($con,$sql);
if(!$query){echo "Table not found";}
else
{
echo "One Row Affected.";
header("location: aboutus.html");    
}


}



?>