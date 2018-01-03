<?php
	if(isset($_POST["submit"]))
	{
		$empid = $_POST["empid"];
		$pwd = $_POST["pwd"];
		$repwd = $_POST["repwd"];
		$role = $_POST["role"];
		if(isset($_POST["p1"]))
			$p1 = "TRUE";
		else
			$p1 = "FALSE";
		if(isset($_POST["p2"]))
			$p2 = "TRUE";
		else
			$p2 = "FALSE";
		if(isset($_POST["p3"]))
			$p3 = "TRUE";
		else
			$p3 = "FALSE";
		if(isset($_POST["p4"]))
			$p4 = "TRUE";
		else
			$p4 = "FALSE";
		$conn = new mysqli("localhost","root","admin","Faculty");
		date_default_timezone_set("Asia/Kolkata");
		$file = addslashes(file_get_contents('user.jpeg'));
		$sql = "INSERT INTO login VALUES($empid,'$pwd','$role','$p1','$p2','$p3','$p4','','')";
		if($conn->query($sql))
		{
			$sql1="INSERT INTO academic_details VALUES ($empid,'',0.0,1950,null,'',0.0,1950,null,'','',1950,0.0,null,'',1950,0.0,'',null,'','',1950,0.0,null)";
			$conn->query($sql1);
			$sql1="INSERT INTO personal_details VALUES($empid,'','','','','1950-01-01','','1950-01-01',0,'$file','','1950-01-01','','1950-01-01','','1950-01-01','null')";
			$conn->query($sql1);
			echo "<script type='text/javascript'>alert('Member Successfully Added');</script>";
		}
		else{
			echo "<script type='text/javascript'>alert('Member with this ID already exists');</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Faculty</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
	function validateAddFaculty()
{
	var empflag=0;
	var pwdflag=0;
	var repwdflag=0;
	var x = document.add_fac.empid.value;
    var y = document.add_fac.pwd.value;
    var z = document.add_fac.repwd.value;
    document.getElementById("empid").innerHTML = "";
	document.getElementById("pwd").innerHTML = "";
    document.getElementById("repwd").innerHTML = "";
    if( x==""  && y == "" && z == "")
		{
			document.getElementById("empid").innerHTML = "* Please Enter Employee Id";
			document.getElementById("pwd").innerHTML = "* Please Enter Password";
    		document.getElementById("repwd").innerHTML = "* Please Re Enter Password";
			return false;
		}
		if (x == "" || x== null) {

    	empflag=1;
		document.getElementById("empid").innerHTML = "* Please Enter Employee Id";	
		}

		if(x.length != 6)
		{
		empflag=1;
		document.getElementById("empid").innerHTML = "* Please Enter 6-Digit Employee Id";
		}

		if (y == "" || y == null) {
        pwdflag=1;
    	document.getElementById("pwd").innerHTML = "* Please Enter Password";
	
		}
	
		if (z == "" || z == null) {
		repwdflag=1;
		document.getElementById("repwd").innerHTML = "* Please Re-Type Password";
    	}

    	if(y != z && z!="" && y != "")
		{
			repwdflag=1;
			document.getElementById("repwd").innerHTML = "* Password And Re-Type Password Do Not Match";
		}
		
    	if(empflag==1 || pwdflag==1 || repwdflag==1 )
		{
		return false;
		}

}
</script>
	<style>
		body 
		{
			position: relative;
		}
	
		ul.nav-pills 
		{
			margin-top : 20px;
			position:fixed;
		}
     
		.navbar 
		{
			border : none;
			background-color: #1F54AB;
			color:white;
			border-radius : 0px;
			width : 100%;
			
		}
	
		.navbar li a, .navbar .navbar-brand 
		{
			color: #fff !important;
			
		}
	 
		#section1 {color: #ff;}
		#section2 {color: #ff;}
		#section3 {color: #ff;}
		#section41 {color: #ff;}
		#section42 {color: #ff;}
	  
		@media screen and (max-width: 810px) 
		{
			#section1, #section2, #section3, #section41, #section42 ,#section43, #section51, #section52, #section53 , #section6 , #section0 
			{
				margin-left:170px;
				
			}
		}
		
		.btn btn-primary btn-md
		{
			float:right;
		}
		
		#dia1
		{
			float: left;
		}
		
		#dia2
		{
			float : right;
		}
		
		.modal-dialog
		{
			width : 375px;
		}
	</style>	
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
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

	<!--GENERATE CV DIALOG-->	
	<div class="modal fade" id="myModal" >
		<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Export your CV as :</h3>
			</div>
			<div class="modal-body">
				<div id="dia1">
					<font size="4">Excel :</font><button style="background-color:white;border:none;"> <i class="fa fa-file-excel-o" style="font-size:35px;color:green"></i></button></li>
				</div>
			
				<div id="dia2">
					<font size="4">Word :</font><button style="background-color:white;border:none;"> <i class="fa fa-file-word-o" style="font-size:35px;color:blue"></i></button></li>
				</div>
			</div>
			<br><br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
		</div>
	</div>

	
		<!--SIDE MENU-->
		<nav class="col-sm-3 col-lg-3 col-md-3 col-xs-3" id="myScrollspy">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="adminpg.php">Faculty List</a></li>
				<li class="active"><a href="#section1">Add Member</a></li>
				<li><a href="reportg.php">Report Generation</a></li>
				
				<li><a href="#section6">Co curricular activities</a></li>
				<li><a href="#section7">Extra curricular activities</a></li>
			</ul>
		</nav>
		
		
		<!--MAIN-->
		<div class="container">
			<!--FACULTY LIST-->
			<div id="section1">
			<div class="col-sm-5 col-lg-5 col-md-5 col-xs-5">
				<h2>Add Member</h2><br>
				<br>
  <form class="form-horizontal" action="addfac.php" name="add_fac" method="POST" onsubmit="return validateAddFaculty()">
    
		<div class="form-group">

        <select id="list" name="role">
        	
        	<option value="Faculty">Faculty</option>
        	<option value="Admin">Admin</option> 
        	<option value="Clerk">Clerk</option>
       	</select>
        </div>
   
    

    <div class="form-group">

        <input type="text" class="form-control" placeholder="Enter Employee ID" name="empid" autofocus>
        <span id="empid"></span>
            </div>
   
    <div class="form-group">    
        <input type="password" class="form-control" placeholder="Enter password" name="pwd">
        <span id="pwd"></span><br>
      </div>
    <div class="form-group">        
        <input type="password" class="form-control"  placeholder="Re-type password" name="repwd">
        <span id="repwd"></span>
      </div>
	  <div class="form-group">
						<h4>Assign Privelege(s):</h4>
						<br>
						<input type="checkbox" name="p1" value="TRUE" class="checkbox-inline">Privelege 1
						<input type="checkbox" name="p2" value="TRUE" class="checkbox-inline">Privelege 2
						<input type="checkbox" name="p3" value="TRUE" class="checkbox-inline">Privelege 3
						<input type="checkbox" name="p4" value="TRUE" class="checkbox-inline">Privelege 4
					</div>
   <center>
    <div class="form-group">       
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
      </div></center>
  </form>
			</div>
			</div>
		</div>
</body>
</html>