<?php

$con=mysqli_connect("localhost","root","","") or die(mysqli_error());
?>

<?php
error_reporting(0);
session_start();
if(isset($_POST['signin']))
{
	if($_POST['id']=="" || $_POST['pwd']=="")
	{
		$err="Fill your username and password first";
	}
	else
	{
		$d=mysqli_query($con,"SELECT * FROM feedback where username='{$_POST['id']}'");
		$row=mysqli_fetch_object($d);
		$fid=$row->username;
		$fpass=$row->password;
		if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
		{
			$_SESSION['sid']=$_POST['id'];
			header('location:homepage.php');
		}
		else
		{
			$err="Invalid ID or Password";
		}
	}
}
?>