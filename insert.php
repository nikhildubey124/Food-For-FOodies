<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "server not connected";

}
if(!mysqli_select_db($con,'fff'))
{
	echo "not database";
}
$name=$_POST['username'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile_no'];
$message=$_POST['message'];
$sql="INSERT INTO feedback(username,email,mobile_no,message) VALUES('$name','$email','$mobile_no','$message')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
{

	echo "inserted";
}
header("refresh:5; url=contact.php");


?>