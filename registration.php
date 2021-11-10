<?php
header('locarion:login.html');


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'test1');

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];

$s=" select * from usertable where name='$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1)
{
    echo "Username already taken";

}else{
    $sql=" insert into usertable(name,email,password) values('$name','$email','$pass')";
    if ($con->query($sql) === TRUE) {
        readfile("./login.html");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

}
?>