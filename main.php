<?php
session_start();
$conn = mysqli_connect("localhost","root","admin","Faculty") or die("Connection failed".mysqli_connect_error());
$sql = "SELECT * FROM personal_details";
$result = $conn->query($sql);
$i=0;
$id = array();
$name = array();
$email = array();
while($row = mysqli_fetch_assoc($result))
{
	$id[$i] = $row["Emp3_Id"];
	$name[$i] = $row["Name"];
	$email[$i] = $row["Email"];
	$i++;
}

if(isset($_POST["addmem_submit"]))
	{
		$empid = $_POST["empid"];
		$pwd = $_POST["pwd"];
		$repwd = $_POST["repwd"];
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
		$sql = "INSERT INTO login VALUES($empid,'$pwd','$p1','$p2','$p3','$p4','','')";
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
  <title>Admin</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	body 
	{
	  position: relative;
	}
	  
	ul.nav-pills 
	{
	  top: 75px;
	 
	}
	  

	.navbar 
	{
		border : none;
		background-color: #1F54AB;
		color:white;
		border-radius : 0px;
		width : 100%;
	}
	

  </style>
  <script>
		function dynamicdropdown(listindex)
		{
			document.getElementById("subcategory").length = 0;
			switch (listindex)
			{
				case "PD" :
					document.getElementById("subcategory").options[0]=new Option("Please select fields","");
					document.getElementById("subcategory").options[1]=new Option("All","All");
					document.getElementById("subcategory").options[2]=new Option("Name","Name");
					document.getElementById("subcategory").options[3]=new Option("Gender","Gender");
					document.getElementById("subcategory").options[4]=new Option("Email","Email");
					document.getElementById("subcategory").options[5]=new Option("Phone","Phone");
					document.getElementById("subcategory").options[6]=new Option("DOB","DOB");
					document.getElementById("subcategory").options[7]=new Option("Address","Address");
					document.getElementById("subcategory").options[8]=new Option("Promotions","Promotions");
					break;
					
				case "AQ" :
					document.getElementById("subcategory").options[0]=new Option("Please select fields","");
					document.getElementById("subcategory").options[1]=new Option("All","All");
					document.getElementById("subcategory").options[2]=new Option("SSC","SSC");
					document.getElementById("subcategory").options[3]=new Option("HSC","HSC");
					document.getElementById("subcategory").options[4]=new Option("Bachelor's","Bachelor's");
					document.getElementById("subcategory").options[5]=new Option("Master's","master's");
					document.getElementById("subcategory").options[6]=new Option("PHD","PHD");
					break;
				case "PUBooks" :
					document.getElementById("subcategory").options[0]=new Option("Please select fields","");
					document.getElementById("subcategory").options[1]=new Option("All","All");
					document.getElementById("subcategory").options[2]=new Option("Name","Name");
					document.getElementById("subcategory").options[3]=new Option("ISBN","ISBN");
					document.getElementById("subcategory").options[4]=new Option("Edition","Edition");
					document.getElementById("subcategory").options[5]=new Option("Publisher Name","Publisher Name");
					document.getElementById("subcategory").options[6]=new Option("Author Name","Author Name");
					document.getElementById("subcategory").options[7]=new Option("Author's Institute","Author's Institute");
					document.getElementById("subcategory").options[8]=new Option("Co authors","Co authors");
					break;
				case "PUJournals" :
					document.getElementById("subcategory").options[0]=new Option("Please select fields","");
					document.getElementById("subcategory").options[1]=new Option("All","All");
					document.getElementById("subcategory").options[2]=new Option("Name","Name");
					document.getElementById("subcategory").options[3]=new Option("Book Chapter?","Book Chapter");
					document.getElementById("subcategory").options[4]=new Option("Type","Type");
					document.getElementById("subcategory").options[5]=new Option("Title","Title");
					document.getElementById("subcategory").options[6]=new Option("Author Name","Author Name");
					document.getElementById("subcategory").options[7]=new Option("Peer Reviewed","Peer reviewed");
					break;
				case "PUConferences" :
					document.getElementById("subcategory").options[0]=new Option("Please select fields","");
					document.getElementById("subcategory").options[1]=new Option("All","All");
					document.getElementById("subcategory").options[2]=new Option("Name","Name");
					document.getElementById("subcategory").options[3]=new Option("Type","Type");
					document.getElementById("subcategory").options[4]=new Option("Title","Title");
					document.getElementById("subcategory").options[5]=new Option("Author Name","Author Name");
					document.getElementById("subcategory").options[6]=new Option("Place","Place");
					break;
				case "STTP attended" :
					document.getElementById("subcategory").options[0]=new Option("Please select fields","");
					document.getElementById("subcategory").options[1]=new Option("All","All");
					document.getElementById("subcategory").options[2]=new Option("Name","Name");
					document.getElementById("subcategory").options[3]=new Option("Event Type","Event Type");
					document.getElementById("subcategory").options[4]=new Option("Organised By","Organised By");
					document.getElementById("subcategory").options[5]=new Option("Duration","Duration");
					document.getElementById("subcategory").options[5]=new Option("Total participants","Total Participants");
					document.getElementById("subcategory").options[7]=new Option("Speaker","Speaker");
					break;
				 case "STTP organised" :
					document.getElementById("subcategory").options[0]=new Option("Please select fields","");
					document.getElementById("subcategory").options[1]=new Option("All","All");
					document.getElementById("subcategory").options[2]=new Option("Name","Name");
					document.getElementById("subcategory").options[3]=new Option("Event Type","Event Type");
					document.getElementById("subcategory").options[4]=new Option("Role","Role");
					document.getElementById("subcategory").options[5]=new Option("Total participants","Total Participants");
					document.getElementById("subcategory").options[6]=new Option("Place","Place");
					break;
				case "STTP delivered" :
					document.getElementById("subcategory").options[0]=new Option("Please select fields","");
					document.getElementById("subcategory").options[1]=new Option("All","All");
					document.getElementById("subcategory").options[2]=new Option("Name","Name");
					document.getElementById("subcategory").options[3]=new Option("Description","description");
					document.getElementById("subcategory").options[4]=new Option("Place","Place");
					document.getElementById("subcategory").options[5]=new Option("Duration","Duration");
					break;
			}
			return true;
		}
		
		
		$(document).ready(function()
		{
			$("#myInput").on("keyup", function() 
			{
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter(function()
				{
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
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
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
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
	  <div class="row">
		<nav class="col-sm-2 col-lg-2 col-md-2 col-xs-0" id="myScrollspy">
		  <ul class="nav nav-pills nav-stacked">
		  <li class="dropdown" id="section0"><a  href="profile.php">PROFILE</a></li>	
		  <hr>	
			<li id="section21"><a href="#section21">Faculty List</a></li>
			<li id="section22"><a href="#section22">Add faculty</a></li>
			<li id="section23"><a href="#section23">Report Generation</a></li>
		  </ul>
		</nav>
		<div class="col-sm-9 col-lg-9 col-md-9 col-xs-9">
			<div id="section21">    
				<div class="col-sm-9 col-lg-9 col-md-9 col-xs-9 well">
					<br>
					<h1>Faculty List</h1>
					<p>Select a faculty's name to see his/her details & assign priveleges!</p>  
					<input class="form-control" id="myInput" type="text" placeholder="Search..">
				<br>
					<table class="table table-bordered ">
						<thead>
						<tr>
							<th>Employee ID</th>
							<th>Name</th>
							<th>Email</th>
						 </tr>
						</thead>
						<tbody id='myTable'>
						<?php
						for($j=0;$j<$i;$j++){
						echo "<tr>";
						echo "<td><a href='list_profile.php?val=$id[$j]'>$id[$j]</a></td>";
						echo "<td>$name[$j]</td>";
						echo "<td>$email[$j]</td>";
						echo "</tr>";
					}
				?>
			</tbody>
					</table>
				</div>
			</div>
			<hr>
			<div id="section22"> 
				<div class="col-sm-9 col-lg-9 col-md-9 col-xs-9 well">
					<h1>Add Member</h1>
					<form class="form-horizontal" action="main.php" name="add_fac" method="POST" onsubmit="return validateAddFaculty()">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter Employee ID" name="empid" >
							<span id="empid"></span>
						</div>

						<div class="form-group">    
							<input type="password" class="form-control" placeholder="Enter password" name="pwd">
							<span id="pwd"></span>
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

						<div class="form-group">       
							<center><input type="submit" class="btn btn-primary" name="addmem_submit" value="Submit"></center>
						</div>
					</form>
				</div>
			</div> 
			
			<div id="section23">
				<div class="col-sm-9 col-lg-9 col-md-9 col-xs-9 well">
					<h1>Report Generation</h1>
					<form method="post">
						<div class="form-group">
							Type : 
							<br>
							<label class="radio-inline"><input type="radio" name="report_emp" onclick="var input = document.getElementById('name3'); if(this.checked){ input.disabled = true; input.focus();}else{input.disabled=false;}">All Employee</label>
							<label class="radio-inline"><input type="radio" name="report_emp" for="name3" onclick="var input = document.getElementById('name3'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}">Give Employee ID</label>
							<input id="name3" name="name3" type="text" disabled="true"/>
						</div>
						
						<div class="form-group">
							<div class="category_div" id="category_div">
								<h4>Enter Report Type</h4>
								<select  name="category" class="required-entry form-control" id="category" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
									<option value="">Select category</option>
									<option value="PD">Personal Details</option>
									<option value="AQ">Academic Qualifications</option>
									<option value="Courses">Courses taught</option>
									<option value="PUBooks">Books</option>
									<option value="PUJournals">Journals</option>
									<option value="PUConferences">Conferences</option>
									<option value="STTP attended">STTP Attended</option>
									<option value="STTP organised">STTP Organised</option>
									<option value="STTP delivered">STTP Delivered</option>
									<option value="COc">Co-curricular</option>
									<option value="Extra">Extras</option>
								</select>
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="sub_category_div " id="sub_category_div">Please select attributes:
								<script type="text/javascript" language="JavaScript">
									document.write('<select name="subcategory" id="subcategory"><option value="">Please select type of report</option></select>')
								</script>
							</div>
						</div>
						<div class="form-group">
							<h4>Enter Date : </h4>
							<br>
							FROM:<input onfocus="(this.type='date')" onblur="(this.type='text')" name="report_from" placeholder="Report From">
							TO: <input onfocus="(this.type='date')" onblur="(this.type='text')" name="report_to" placeholder="Report To">	
						</div>
						<br>
						<div class="form-group">       
							<center><input type="submit" class="btn btn-primary" name="report_submit" value="Submit"></center>
						</div>
					</form>	
				</div>
			</div>
		 
		</div>
	  </div>
	</div>
</body>
</html>