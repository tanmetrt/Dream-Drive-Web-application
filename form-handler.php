
<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo"connection succesful";
}
else{
    echo"not connected";
}
mysqli_select_db($con,'userinfodata');

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$query=" insert into contact contact us infodata(name,email,subject,message)
values('$name','$email','$subject','$message')";
echo"$query";
mysqli_query($con,$query);
?>