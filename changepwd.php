<?php
	session_start();
	$_SESSION["empid"]=165001;
	$conn = mysqli_connect("localhost","root","admin","Faculty") or die("Connection failed".mysqli_connect_error());
	$passErr="";
	if(ISSET($_POST["submit"]))
	{
		if(isset($_SESSION["forgotpasswordeid"]))
		{
		$empid=$_SESSION["forgotpasswordeid"];
		$newpwd = $_POST["newpwd"];
		$rePwd = $_POST["renewpwd"];
		$pass_update = "UPDATE login SET Password='$rePwd' WHERE Emp_id=$empid";
		$pass_result = mysqli_query($conn,$pass_update) or die(mysqli_error($conn));
		session_destroy();
		header('Location:login.php');
		}
		else
		{
		$empid=$_SESSION["empid"];
		$oldpwd=$_POST["oldpwd"];
		$newpwd = $_POST["newpwd"];
		$rePwd = $_POST["renewpwd"];
		$sql = "SELECT Password FROM login WHERE Emp_Id=$empid";
		$result=$conn->query($sql);
		$row=mysqli_fetch_array($result);
		$password = $row["Password"];
		if($oldpwd == $password){
		$pass_update = "UPDATE login SET Password='$rePwd' WHERE Emp_id=$empid";
		$pass_result = mysqli_query($conn,$pass_update) or die(mysqli_error($conn));
		session_destroy();
		header('Location:login.php');
		}
		else{
			$passErr = "*Invalid Password Entered";
		}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="login_css.css">
  <style>
  .error{
	color:red;
  }
  </style>
  <script>
    function validate() {
    	if(document.getElementById("oldpwd")){
    	var oldflag=0;
    	var passflag=0;
    	var renewflag=0;
		var x = document.forms["changepwd"]["oldpwd"].value;
		var y = document.forms["changepwd"]["newpwd"].value;
		var z = document.forms["changepwd"]["renewpwd"].value;
		document.getElementById("old").innerHTML="";
		document.getElementById("new").innerHTML= "";
		document.getElementById("renew").innerHTML= " ";
		document.getElementById("newpwd").style.borderColor="";
		document.getElementById("renewpwd").style.borderColor="";
		
		if(x == "" && y== "" && z == "")
		{
			document.getElementById("old").innerHTML= "* Please enter password";
			document.getElementById("new").innerHTML= "* Please Enter New password";
			document.getElementById("renew").innerHTML= "* Please retype password";
			document.getElementById("oldpwd").style.borderColor="red";
			document.getElementById("newpwd").style.borderColor="red";
			document.getElementById("renewpwd").style.borderColor="red";
			document.getElementById("oldpwd").focus();
			return false;
		}
		if(x== "")
		{
			document.getElementById("old").innerHTML= "* Please Enter password";
			document.getElementById("oldpwd").style.borderColor="red";
			document.getElementById("oldpwd").focus();
			oldflag=1;
		}
		else
			document.getElementById("oldpwd").style.borderColor="black";
		if(y == "")
		{
			document.getElementById("new").innerHTML= "* Please Enter New password";
			document.getElementById("newpwd").style.borderColor="red";
			document.getElementById("newpwd").focus();
			passflag=1;
		}
		if(z == "")
		{
			document.getElementById("renew").innerHTML= "* Please retype password";
			document.getElementById("renewpwd").style.borderColor="red";
			document.getElementById("renewpwd").focus();
			renewflag=1;
		}

		if(y!=z && y!= ""  && z!="")
		{
			
			document.getElementById("renew").innerHTML= "* Passwords do not match ";
			document.getElementById("renewpwd").style.borderColor="red";
			document.getElementById("renewpwd").focus();
			renewflag=1;
		}
		if(oldflag == 1 || passflag == 1 || renewflag == 1)
			return false;

	}
	else
	{
    	var passflag=0;
    	var renewflag=0;
		var y = document.forms["changepwd"]["newpwd"].value;
		var z = document.forms["changepwd"]["renewpwd"].value;
		document.getElementById("new").innerHTML= "";
		document.getElementById("renew").innerHTML= " ";
		document.getElementById("newpwd").style.borderColor="";
		document.getElementById("renewpwd").style.borderColor="";
		
		if(y== "" && z == "")
		{
			document.getElementById("new").innerHTML= "* Please Enter New password";
			document.getElementById("renew").innerHTML= "* Please retype password";
			document.getElementById("newpwd").style.borderColor="red";
			document.getElementById("renewpwd").style.borderColor="red";
			document.getElementById("newpwd").focus();
			return false;
		}
		if(y == "")
		{
			document.getElementById("new").innerHTML= "* Please Enter New password";
			document.getElementById("newpwd").style.borderColor="red";
			document.getElementById("newpwd").focus();
			passflag=1;
		}
		if(z == "")
		{
			document.getElementById("renew").innerHTML= "* Please retype password";
			document.getElementById("renewpwd").style.borderColor="red";
			document.getElementById("renewpwd").focus();
			renewflag=1;
		}

		if(y!=z && y!= ""  && z!="")
		{
			
			document.getElementById("renew").innerHTML= "* Passwords do not match ";
			document.getElementById("renewpwd").style.borderColor="red";
			document.getElementById("renewpwd").focus();
			renewflag=1;
		}
		if(passflag == 1 || renewflag == 1)
			return false;
	}
}
        
</script>
</head>
<body>  
	<div class="container">
		<form method="post"  class="login-wrap login-html login-form sign-up-htm" action="" name="changepwd" onsubmit= "return validate()">
			<div class="text-center">
				<strong>Change Password</strong>
			</div>
			<br><br>
			<div class="form-group">
				<?php
					echo "Old Password: ";
					if(!isset($_SESSION["forgotpasswordeid"]))
						if(!empty($passErr))
						echo "<input type='password' autofocus style='border-color:red;' name='oldpwd' placeholder='' autofocus id='oldpwd' class='form-control'><span class='error' id='old'>$passErr</span>";
					else
						echo "<input type='password' autofocus name='oldpwd' placeholder='' id='oldpwd' class='form-control'><span class='error' id='old'></span>";
					else
					{
						$empid=$_SESSION["forgotpasswordeid"];
						$pass_query = "SELECT Password FROM login WHERE Emp_id = $empid";
						$pass_query_result = mysqli_query($conn,$pass_query) or die(mysqli_error($conn));
						$row=mysqli_fetch_array($pass_query_result);
						echo "<b>";
						echo $row["Password"];
						echo "</b>";
					}
				?>
			</div>
			<div class="form-group">
				New Password : 
				<?php 
				if(!isset($_SESSION["forgotpasswordeid"]))
				echo "<input type='password' name='newpwd' id='newpwd' class='form-control'>";
				else
				echo "<input type='password' autofocus name='newpwd' id='newpwd' class='form-control'>";
				?>
				<span class="error" id="new"></span>
			</div>
			<div class="form-group">
				Retype Password : <input type="password" name="renewpwd" placeholder="" id="renewpwd" class="form-control" />
				<span class="error" id="renew"></span>
			</div>
			<br>
			<center>
			<div class="form-group">
				<input name="submit" class="btn btn-primary" type="submit">
			</div>
			</center>
		</form>
		</form>
	</div>
</body>
</html>