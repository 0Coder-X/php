<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
  body{
    background-color: #04303d;
    height: 100%;
  }

	#text{
color: #25bac7;
		height: 25px;
		border-radius: 5px;
		padding: 10px;
		border: solid thin #25bac7;
		width: 70%;
    font-size: 18px;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: #04303d;
		background-color:#25bac7;
		border: none;
    font-size: 15px;
    cursor: pointer;


	}
	#box{
    width: 450px;
    box-shadow: 0 0 3px 0 (0,0,0,0,3);
background: #054f60;
   padding: 20px;
    margin: 8% auto 0;
    text-align: center;
    font-size: 15px;

	}

i{
color:  #25bac7;
font-size: 13px;

}
a{
  color: #25bac7;
  cursor: pointer;
}
input{
  align-items: center;
}

	</style>

	<div id="box">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

      <i>UserName:</i>
      			<input id="text" type="text" name="user_name"><br><br>
      <i>Password:</i>
          	<input id="text" type="password" name="password"><br><br>


			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Already have an account? Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>
