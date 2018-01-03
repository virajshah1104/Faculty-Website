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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
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

	
		<!--SIDE MENU-->
		<nav class="col-sm-3 col-lg-3 col-md-3 col-xs-3" id="myScrollspy">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#section0">Faculty List</a></li>
				<li><a href="addfac.php">Add Faculty</a></li>
				<li><a href="reportg.html">Report Generation</a></li>
				
				<li><a href="#section6">Co curricular activities</a></li>
				<li><a href="#section7">Extra curricular activities</a></li>
			</ul>
		</nav>
		
		
		<!--MAIN-->
		<div class="container">
			<!--FACULTY LIST-->
			<div id="section0">
			<div class="col-sm-9 col-lg-9 col-md-9 col-xs-9">
				<center><legend><h1>Admin</h1></legend></center>
				<br>
				<h2>Faculty List</h2>
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
						echo "<tr  data-toggle='modal' data-target='#myModal'>";
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
		</div>
</body>
</html>