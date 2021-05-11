<?php
session_start();

function jsalert($message){
    echo "<script>   
    location='Log_In.html';
    alert('$message');
    </script>";
    
}
$username=$_POST['uname'];
$password=$_POST['pas'];
$password=md5($password);
$conn=mysqli_connect('localhost','root','');

if (!$conn) {
    die("Connection failed...");
}
$sql="SELECT * FROM  reg WHERE  FirstName='$username' && Pass='$password'";
mysqli_select_db($conn,'Registration');
$retrival=mysqli_query($conn,$sql);
if (!$retrival) {
   jsalert("Username or password is incorrect please try again");
}
else
{
    if($row=mysqli_fetch_assoc($retrival)){
 $dbfn=$row['FirstName'];
 $dbpass=$row['Pass'];
        if ($dbfn==$username && $dbpass==$password) {
        header("location: welcome.html");
        $_SESSION['username']=$username;
            }
        else{
        jsalert("Username or password is incorrect please try again!!!!!");
        // header("location: Log_In.html");
            }

} 
    else{ 
     jsalert("Username or password is not found");
    
}

mysqli_close($conn);}
?>