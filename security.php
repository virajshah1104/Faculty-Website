<?php
session_start();
$empid=$_SESSION["forgotpasswordeid"];
$err=array("","");
$conn = mysqli_connect("localhost","root","admin","Faculty") or die("Connection failed".mysqli_connect_error());
$sql= "SELECT Security_Question from login WHERE Emp_Id = $empid";
$sqlresult=$conn->query($sql);
$row=mysqli_fetch_array($sqlresult);
$question=$row["Security_Question"];
$ansErr="";
if(isset($_POST["submit"]))
{
	$sec_ans = $_POST["sec_ans"];
	$sql= "SELECT Security_Answer from login WHERE Emp_Id = $empid";
	$sqlresult= mysqli_query($conn,$sql) or die(mysqli_error($conn));
	$row=mysqli_fetch_array($sqlresult);
	if($sec_ans!=$row["Security_Answer"])
	{
		$ansErr="* Answer does not match";
	}
	else
	{
		$sql1= "SELECT Password from login WHERE Emp_Id = $empid";
		$sql1result= mysqli_query($conn,$sql1) or die(mysqli_error($conn));
		$row=mysqli_fetch_array($sql1result);
		$pass=$row["Password"];
		$_SESSION["forgotpasswordpass"]=$pass;
		header('Location:changepwd.php');
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
		
		var y = document.forms["myForm"]["sec_ans"].value;
		document.getElementById("ans").innerHTML = "";
		document.getElementById("sec_ans").style.borderColor="";
			if (y == "" || y==null) {
			document.getElementById("ans").innerHTML = "* Please Enter this field";
			document.getElementById("sec_ans").style.borderColor="red";
			return false;
    }
	}
        
</script>
  </head>
  <body>
  
  <div class="container">
  
	<form method="post"  class="login-wrap login-html login-form sign-up-htm" action="" name="myForm" onsubmit= "return validate()">
	<div class="text-center">
		<strong>Verify Yourself</strong>
	</div>
	<br><br>
	<div class="form-group">
	
						Security Question : <?php echo $question; ?><br>
						<span class="error" id="question"></span>
						</div>
						<div class="form-group">
						<?php 
						if(!empty($ansErr)){
						 echo "<input  name='sec_ans' style='border-color:red;' placeholder='Your Answer' autofocus id='sec_ans' class='form-control'  type='text'>";
						 echo "</div><span class='error' id='ans'>$ansErr;</span>";
						}
						else
						{
						 	echo "<input  name='sec_ans' placeholder='Your Answer' autofocus id='sec_ans' class='form-control'  type='text'>";
						 	echo "</div><span class='error' id='ans'></span>";
						}
						?>
						 <br><br>
						 <center>
					<div class="form-group">
                        <input name="submit" class="btn btn-primary" type="submit">
                      </div>
					  </center>
                      
	
	</form>
  </div>
  </body>
  </html>