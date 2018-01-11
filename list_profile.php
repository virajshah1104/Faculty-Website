<?php
session_start();
$id = $_GET["val"];
$conn = mysqli_connect("localhost","root","admin","Faculty") or die("Connection failed".mysqli_connect_error());
date_default_timezone_set("Asia/Kolkata");
$priv = array();
$sql = "SELECT * FROM personal_details WHERE Emp3_Id=$id";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	$name=$row["Name"];
	$email=$row["Email"];
	$contact=$row["Contact"];
	$gender=$row["gender"];
	$address=$row["Address"];
	$join_pos=$row["Join_Pos"];
	$join_date=$row["Join_Date"];
	$pro1=$row["Prom_1"];
	$pro2=$row["Prom_2"];
	$pro3=$row["Prom_3"];
	$pro1_date=$row["Prom_1_Date"];
	$pro2_date=$row["Prom_2_Date"];
	$pro3_date=$row["Prom_3_Date"];
	$dob=$row["DOB"];
	if(empty($pro3)){
		if(empty($pro2)){
			if(empty($pro1))
			{
				$curpos = $join_pos;
			}
			else
				$curpos = $pro1;
		}
		else
			$curpos =$pro2;
	}
	else
		$curpos = $pro3;
	if($dob != '1950-01-01')
	{
	$temp = (int)substr($dob,0,4);
	$temp1 = (int)date("Y");
	$years_exp = $temp1-$temp;
	}
	else
		$years_exp = null;
	if($join_date == '1950-01-01')
	{
		$join_date = null;
	}
	$profilepic='<div class="thumbnail img-responsive" style="width:100%;height:100%"><img src="data:image/jpeg;base64,'.base64_encode($row["Profile_Pic"]).'"/></div>';

	if(isset($_POST["submit"]))
	{
		$sql = "SELECT * FROM login WHERE Emp_Id=$id";
				$result = $conn->query($sql);
				$row = mysqli_fetch_assoc($result);
				$priv[0] = $row["P1"];
				$priv[1] = $row["P2"];
				$priv[2] = $row["P3"];
				$priv[3] = $row["P4"];
		if(isset($_POST["priv0"])){
		if($_POST["priv0"] == 'TRUE')
			$priv[0] = 'TRUE';
		}
		else
			$priv[0] = 'FALSE';
		if(isset($_POST["priv1"])){
		if($_POST["priv1"] == 'TRUE')
			$priv[1] = 'TRUE';
		}
		else
			$priv[1] = 'FALSE';
		if(isset($_POST["priv2"])){
		if($_POST["priv2"] == 'TRUE')
			$priv[2] = 'TRUE';
		}
		else
			$priv[2] = 'FALSE';
		if(isset($_POST["priv3"])){
		if($_POST["priv3"] == 'TRUE')
			$priv[3] = 'TRUE';
		}
		else
			$priv[3] = 'FALSE';
		$sql = "UPDATE login SET P1='$priv[0]',P2='$priv[1]',P3='$priv[2]',P4='$priv[3]' WHERE Emp_Id=$id";
		$conn->query($sql);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=NTR' rel='stylesheet'>
  <style>
  body{
	  font-family: 'NTR';
	  font-size : 18px;
  }
	.navbar 
		{
			border : none;
			background-color: #1F54AB;
			color:white;
			border-radius : 0px;
			width : 100%;
			
		}
 
 ul.nav-pills 
	{
	  top: 75px;
	  
	}
 
  </style>
</head>
<body>
<?php
	include 'decision.php';
?>
	<!--NAVBAR-->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
			</button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
			</ul>
		</div>
		</div>
	</nav>
		  
	<div class="container-fluid">
  
		<nav class="col-sm-2 col-lg-2 col-md-2 col-xs-2" id="myScrollspy">
			<ul class="nav nav-pills nav-stacked">
			<li id="section0"><a href="profile.php#section0">PROFILE </a></li>
			<hr>
			<li id="section21"><a href="main.php#section21">Faculty List</a></li>
			<li id="section22"><a href="main.php#section22">Add faculty</a></li>
			<li id="section23"><a href="main.php#section23">Report Generation</a></li>
		</nav>
	
			<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10">
				
			
			<div class="col-sm-5 col-lg-3 col-md-4 col-xs-5">
				
				<div class="form-group ">
				<h3>Faculty Details :</h3>
					<?php echo $profilepic; ?>
				</div>
			</div>
			
			<div class="col-sm-9 col-lg-9 col-md-9 col-xs-9" style="font-size:17px">
				<br><br>
				<div class="table-responsive">
					<table class="table">
						<tbody>
							<tr>
								<td>Employee Id </td>
								<td><b><?php echo $id; ?></b></td>
							</tr>
					
							<tr>
								<td>Name: </td>
								<td><b><?php echo $name;?></b></td>
							</tr>
							
							<tr>
								<td>Age: </td>
								<td><b><?php echo $years_exp; ?></b></td>
							</tr>
						
							<tr>
								<td>E-mail address  : </td>
								<td><b><?php echo $email; ?></b></td>
							</tr>
						
							<tr>
								<td>Joining Position: </td>
								<td><b><?php echo $join_pos; ?></b></td>
							</tr>
							<tr>
								<td>Joining Date : </td>
								<td><b><?php echo $join_date; ?></b></td>
							</tr>
							
							<tr>
								<td>Current Position : </td>
								<td><b><?php echo $curpos; ?></b></td>
							</tr>
							<tr><td></td><td></td></tr>
						</tbody>
					</table>
				</div>
		
			<form name="change_privs" action="list_profile.php?val=<?php echo $id; ?>" method="POST">
			<div class="form-group">
			
				Priveleges:
				<br>
				<?php 
				$sql = "SELECT * FROM login WHERE Emp_Id=$id";
				$result = $conn->query($sql);
				$row = mysqli_fetch_assoc($result);
				$priv[0] = $row["P1"];
				$priv[1] = $row["P2"];
				$priv[2] = $row["P3"];
				$priv[3] = $row["P4"];
					for($i=0;$i<sizeof($priv);$i++)
					if(($priv[$i]) == 'FALSE')
						echo '<input type="checkbox" class="checkbox-inline" name="priv'.$i.'" value="TRUE">Privelege '.($i+1);
					else
						echo '<input type="checkbox" checked class="checkbox-inline" name="priv'.$i.'" value="TRUE">Privelege '.($i+1);
				?>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" name="submit" value="Change Privelege" />
			</div>
			</form>	
			</div>
			</div>
	</div>
 
</body>
</html>
