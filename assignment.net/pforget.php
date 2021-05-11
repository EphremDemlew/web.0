<?php

$uname = $_POST['uname'];
$password = $_POST['pas'];
$newpassword = $_POST['cpas'];
$password = md5($password);
$newpassword = md5($newpassword);



$con = mysqli_connect('localhost','root','');
if(!$con){
    print("Connection not created.");
}
else
{
mysqli_select_db($con,'Registration');

$sql="UPDATE reg set Pass='$newpassword' where FirstName='$uname' and Pass='$password'";
$query= mysqli_query($con,$sql);
if(!$query){echo "Table not found";}
else
{
echo "One Row Affected.";    
}


}



?>