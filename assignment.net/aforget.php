<?php

$email = $_POST['email'];
$newdate = $_POST['ndate'];




$con = mysqli_connect('localhost','root','');
if(!$con){
    print("Connection not created.");
}
else
{
mysqli_select_db($con,'Registration');

$sql="UPDATE appoint set AppointDate='$newdate' where Email='$email'";
$query= mysqli_query($con,$sql);
if(!$query){echo "Table not found";}
else
{
echo "One Row Affected."; 
header("location: index.html");
}
}

?>