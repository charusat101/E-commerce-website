<?php
header('locarion:login.html');


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'test1');

$name=$_POST['name'];
$pass=$_POST['password'];

$s=" select * from usertable where name='$name' && password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1)
{
    readfile('./index.html');
    

}else{
   
    echo "Enter correct name and password ";
}
?>