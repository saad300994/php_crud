<?php
	include('conn.php');
	$id=$_GET['q'];
	$name=$_POST['name'];	
	$email=$_POST['email'];	
	$phone=$_POST['phone'];	
	//echo $name. $email. $phone;
	$query="UPDATE contacts
		SET name='$name' ,email='$email' ,phone='$phone'
		where id=$id";
	if(mysqli_query($conn, $query)){
		header("location: index.php");
	} else{
		echo "Faild to update.";
	}
?>
