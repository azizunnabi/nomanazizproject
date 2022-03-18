<?php

$db = new PDO("mysql:host=localhost;dbname=ajax","root","mysql");
// if(isset($_POST['vall'])){
    
// $email = $_POST['vall'];
// $query = $db->prepare("select email from ajax_urdu where email = ?");
// $query->execute([$email]);
// if($query->rowCount() == 1){
// 	echo 'Sorry! Thsi email already exist. Please try another';
// }
// else{
// 	echo 'Congratulations. You have successfully Registered';
// }
// }
// }


if(isset($_POST['email']) && isset($_POST['address'])){
	$email=$_POST['email'];
	$address=$_POST['address'];
	$query=$db->prepare("insert into (email,address)values(?,?)");
	$query->execute(array($email,$address));
	if($query){
		echo 'yes';
		echo "<div class='alert alert-success'>Data is successfully inserted!</div>";
	}else{
		echo 'no';
		echo "<div class='alert alert-danger'>Data not inserted successfully</div>";
	}
}
?>