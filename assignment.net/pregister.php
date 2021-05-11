<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$country = $_POST['country'];
$pass = $_POST['pas'];
$confpass = $_POST['cpas'];
$passw= md5($pass);
$confpassw = md5($confpass);
$text= $_POST['tarea'];


if($passw!= $confpassw){
    echo'Try Again';
}
else
{
$con = mysqli_connect('localhost','root','');
if(!$con){echo 'Connection Failed.';}
else
{
    mysqli_select_db($con,"Registration");
    $sql ="insert into reg values('$fname','$lname','$country','$passw','$text')";
    $query = mysqli_query($con,$sql);
    if(!$query)
    {
        echo 'Table not found.';
    }
    else
    {
        header("location: index.html");
    }
}
}


?>