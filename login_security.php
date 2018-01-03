<?php
session_start();
$empid=$_SESSION["Emp_Id"];
$conn = new mysqli("localhost","root","admin","Faculty");
if(isset($_POST["submit"]))
{
	$question = $_POST["sec_ques"];
	$answer = $_POST["sec_ans"];
	$sql = "UPDATE login SET Security_Question='$question',Security_Answer='$answer' WHERE Emp_Id=$empid";
	if($conn->query($sql)){
		header('Location:profile.php');
	}
	else
		echo mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
	<script>
		function validateForm() 
		{
			var x = document.forms["myForm"]["secques"].value;
			var y = document.forms["myForm"]["sec_ans"].value;
			document.getElementById("ques").innerHTML = "";
			document.getElementById("ans").innerHTML = "";
			document.getElementById("sec_ans").style.borderColor = "";
			document.getElementById("secques").style.borderColor = "";
			if (x==0 && y=="")
			{
				document.getElementById("ques").innerHTML = "* Please Select a Question";
				document.getElementById("secques").style.borderColor = "red";
				document.getElementById("ans").innerHTML = "* Please Enter A Answer";
				document.getElementById("sec_ans").style.borderColor = "red";
				return false;
			}
			if(x== 0)
			{
				document.getElementById("ques").innerHTML = "* Please Select a Question";
				document.getElementById("secques").style.borderColor = "red";
				return false;
			}
			if (y == "") 
			{
				document.getElementById("ans").innerHTML = "* Please Enter A Answer";
				document.getElementById("sec_ans").style.borderColor = "red";
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

	<div class="container">
		<form method="post"  class="form-horizontal login-wrap login-html login-form sign-in-htm" action="" name="myForm" onsubmit="return validateForm()">
			<div class="form-group">
			<div class="boxtext">
				<strong><font size="5">Security Question</font></strong> 
			</div>
			</div>
			<br>
			<div class="form-group">
				Select your Question
				<select class="form-control" name="sec_ques" id="secques">
					<option name="sec_ques" value="">Select Question</option>
					<option name="sec_ques" value="Question 1">Question 1</option>
					<option name="sec_ques" value="Question 1">Question 2</option>
					<option name="sec_ques" value="Question 1">Question 3</option>
				</select>
				<span id="ques" ></span>
			</div>
			<br>
			<div class="form-group">
				<input type="text" id="sec_ans" name="sec_ans" class="form-control" />
				<span id="ans"></span>
			</div>
			
			
			
			
			<div class="form-group">
				<center>
					<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Save" name = "submit">
				</center>
			</div>
				
		</form>
	</div>
</body>
</html>