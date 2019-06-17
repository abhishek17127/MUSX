<?php

// connect to server
include 'connection.php';









//LOGIN condition

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted


    if (isset($_POST['login'])) {



        // login button pressed
        // get input values from the page using id's
		$username = mysqli_real_escape_string($con,stripcslashes($_POST['user']));
		$password = mysqli_real_escape_string($con,stripcslashes($_POST['pass']));






		//query the database for user
		$result = mysqli_query($con,"select * from users where username = '$username' and password = '$password' LIMIT 1") or die("Failed to query database".mysqli_error());

		$row = mysqli_fetch_array($result);

		if($row['username']==$username && $row['password']==$password){
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				$_SESSION['user_id']=$row['id'];
				echo '<script>document.location="profile.php";</script>';

		}
		else{
			echo "Failed to login";
		}


	}
}







//SIGNUP condition

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['logup'])) {
    	//signup button pressed
    	session_start();


    	// initializing variables
		$username = "";
		$name = "";
		$address = "";
		$city = "";
		$state = "";
		$postal = "";
		$number = "";


		$errors = array();



		// get input values from the page using id's
		$username = mysqli_real_escape_string($con,stripcslashes($_POST['user']));
		$password = mysqli_real_escape_string($con,stripcslashes($_POST['pass']));
		$password2 = mysqli_real_escape_string($con,stripcslashes($_POST['pass2']));
		$name = mysqli_real_escape_string($con,stripcslashes($_POST['name']));
		$address = mysqli_real_escape_string($con,stripcslashes($_POST['add']));
		$city = mysqli_real_escape_string($con,stripcslashes($_POST['city']));
		$state = mysqli_real_escape_string($con,stripcslashes($_POST['state']));
		$postal = mysqli_real_escape_string($con,stripcslashes($_POST['postal']));
		$number = mysqli_real_escape_string($con,stripcslashes($_POST['num']));






		// form validation
		if(empty($username)){array_push($errors, "username is required"); echo "username is required";}
		if(empty($password)){array_push($errors, "password is required"); echo "password is required";}
		if(empty($name)){array_push($errors, "name is required"); echo "name is required";}
		if(empty($address)){array_push($errors, "address is required"); echo "address is required";}
		if(empty($city)){array_push($errors, "city is required"); echo "city is required";}
		if(empty($state)){array_push($errors, "state is required"); echo "state is required";}
		if(empty($postal)){array_push($errors, "postal is required"); echo "postal is required";}
		if(empty($number)){array_push($errors, "number is required"); echo "number is required";}

		if($password != $password2){array_push($errors, "Passwords don't match"); echo "Passwords don't match";}




		//check for existing user
		$user_check_query = "SELECT * FROM users WHERE username = '$username' or name = '$name' LIMIT 1";

		$results = mysqli_query($con,$user_check_query);
		$user = mysqli_fetch_assoc($results);

		if($user){
			if($user['username'] === $username){array_push($errors, "username already exists"); echo "username already exists";}
			if($user['name'] === $name){array_push($errors, "name already exists"); echo "name already exists";}
		}




		//register the user if no error
		if(count($errors)==0){
			// $password = md5(password);

			$query = "INSERT INTO users(username, password, name, address, city, state, postal, `number`) VALUES ('$username','$password','$name','$address','$city','$state','$postal','$number')";

			mysqli_query($con,$query);

			echo "ACCOUNT HAS BEEN SUCCESSFULLY CREATED";
		}


	}
}




// addtocart button
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['addtocart'])) {
    	

    	session_start();


    	$product_id=$_POST['product_id'];    

    	

    	echo "user id is = ".@$_SESSION['user_id'];
    	echo "product id is = ".$product_id;



        


	}
}















?>