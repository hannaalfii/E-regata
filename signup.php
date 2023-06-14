<?php

	include("classes/connect.php");
	include("classes/signup.php");

	$first_name = "";
	$last_name = "";
	$gender = "";
	$email = "";
	

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		

		$signup = new Signup();
		$result = $signup->evaluate($_POST);

		if($result !="")
		{

			echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
			echo "The following errors occured<br><br>";
			echo $result;
			echo "</div>";

		}else
		{
			header("Location: profile.php");
			die;
		}

		
		$first_name  = $_POST['first_name'];
		$last_name =$_POST['last_name'];
		$gender = $_POST['gender'];
		$email =$_POST['email'];
	
	
	}

	

	
?>


<html>
<head>
	
	<title>E-REGATA| Sign up</title>
</head>
<style>
	#bar{height:100px;
		background-color: mediumaquamarine; 
		color: chocolate;
		padding: 4px;
		
	}
	#Signup_button{
		background-color: orange;
		width: 70px;
		text-align: center;
		padding: 4px;
		border-radius: 4px;
		float: right;
	}

	#bar2{

		background-color: mediumaquamarine;
		width:1000px;
		margin:auto; 
		margin-top: 50px; 
		padding-top: 50px;
		text-align: center;
		font-weight: bold;



	}

	#text{

		height: 40px;
		width: 300;
		border-radius: 4px;
		border: solid 1px #aaa;
	}

	#button{

		width: 300px;
		height: 40px;
		border-radius: 4px;
		font-weight: bold;
		border: none;
		background-color: darkorange;


	}
</style>



<body style="font-family: tahoma; background-color: grey;">
	<div id="bar">
	<div style="font-size: 40px;">E REGATA</div>
	 <div id="Signup_button">Signup</div>
</div>
<div id="bar2">
	Sign up to E REGATA<br> <br>

	<form method="post" action="">


		<input value="<?php echo $first_name ?>"  name="first_name" type="text" id="text" placeholder=""><br> <br>
		<input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder=""><br> <br>
		 <br>
		 <span style="font-weight: normal;">Gender:</span><br>
		 <select id="text" name="gender">
		 	

		 	<option><?php echo $gender ?></option>
		 	<option>Male</option>
		 	<option>Female</option>


		 </select><br><br>
		<input name="email" type="text" id="text" placeholder="Email"><br> <br>
		<input name="password"type="Password" id="text" placeholder="Password"><br> <br>
		<input name="password2" type="Password" id="text" placeholder="Confirm password"><br> <br>

		<input type="Submit" id="button" value="Signup "><br> 
		<br><br>

	</form>
</div>
	
</body>
</html>