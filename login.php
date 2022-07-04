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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}

			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title class="title">Login</title>

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

.title{
  background-color: #25bac7;
}


  </style>

	<div id="box">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>
<center>


<i>UserName:</i>
			<input id="text" type="text" name="user_name"><br><br>
<i>Password:</i>
    	<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>
</center>
			<a href="signup.php">Don't have an account? Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>
