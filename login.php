<!DOCTYPE html>
<html>
<head>
	<script>
		function validateForm() 
		{
			var x = document.forms["myForm"]["empid"].value;
			var y = document.forms["myForm"]["pass"].value;
			document.getElementById("emp").innerHTML = "";
			document.getElementById("passw").innerHTML = "";
			document.getElementById("user").style.borderColor = "";
			document.getElementById("pass").style.borderColor = "";
			if(x == "" && y == "")
			{
				document.getElementById("emp").innerHTML = "* Please Enter An Employee Id";
				document.getElementById("passw").innerHTML = "* Please Enter A Password";
				document.getElementById("user").style.borderColor = "red";
				document.getElementById("pass").style.borderColor = "red";
				return false;
			}
			else if (x == "") 
			{
				document.getElementById("emp").innerHTML = "* Please Enter An Employee Id";
				document.getElementById("user").style.borderColor = "red";
				return false;
			}
			else if (!(/^\d{6}$/.test(x)))
			{
				document.getElementById("emp").innerHTML = "* Please Enter A Valid Employee Id";
				document.getElementById("user").style.borderColor = "red";
				return false;
			}    
			else if (y == "") 
			{
				document.getElementById("passw").innerHTML = "* Please Enter A Password";
				document.getElementById("pass").style.borderColor = "red";
				return false;
			}
		}
	</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="login_css.css">
	<style>
		.boxtext{
			float  :left;
		}

		.askrole{
			float : right;
		}

		.error{
			color : #fa0808;
			font-weight : bold;
		}

		a:hover{
			text-decoration : none;
			color : blue;
		}
	</style>
	<title>Login Form</title>
</head>
<body>
<?php
session_start();
$err=array("","");
if(isset($_POST["submit"]))
{
	$empid = $_POST["empid"];
	$pass = $_POST["pass"];
	$conn = new mysqli("localhost","root","admin","Faculty");
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql="SELECT * FROM login WHERE Emp_Id = $empid";
	if($result = $conn->query($sql))
	{
		$row = mysqli_fetch_assoc($result);
		if($row == NULL)
			$err[0] = "* Please Enter A Valid Employee Id";
		$pass1 = $row["Password"];
		$role1 = $row["Role"];
		if($pass == $pass1)
		{
			$_SESSION["Emp_Id"]=$empid;
			$sql1 = "SELECT * FROM login WHERE Emp_Id = $empid";
			$result=$conn->query($sql1);
			$row=mysqli_fetch_assoc($result);
			if($row["Security_Question"]=='')
			header('Location:login_security.php');
		else
			header('Location:profile.php');
		}
		else
			$err[1]="* Please Enter The Valid Password";
	}
	else 
		$err[0]="* Please Enter A Valid Employee Id";
}
?>
	<div class="container">
		<form method="post"  class="form-horizontal login-wrap login-html login-form sign-in-htm" action="" name="myForm" onsubmit="return validateForm()">
			<div class="form-group">
			<div class="boxtext">
				<strong><font size="5">Authentication Details</font></strong> 
			</div>
			</div>
			<br>
			<br>			
			<div class="group">
			<div class="form-group">
				<input id="user" type="text" class="input form-control" placeholder="Employee Id" name = "empid" autofocus><br>
				<span class="error" id="emp"><?php echo $err[0]; ?></span>
			</div>
			</div>
			<div class="group">
			<div class="form-group">	
				<input id="pass" type="password" class="input form-control" data-type="password" placeholder="Password" name = "pass" ><br>
				<span class="error" id="passw"><?php echo $err[1]; ?></span>
			</div>
			</div>
			<div class="form-group">
				<center>
					<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Sign In" name = "submit">
				</center>
			</div>
			<div class="form-group">
				<center>
				<br><br>
					Forgot password? <a href="forgotpassword.php">Click Here</a>	
				</center>
			</div>	
		</form>
	</div>
</body>
</html>