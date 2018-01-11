<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include 'report_php.php';
?>

  <title>Admin</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
	body 
	{
	  position: relative;
	}
	  
	ul.nav-pills 
	{
	  top: 75px;
	position : fixed;
	}
	
	.navbar 
	{
		border : none;
		background-color: #1F54AB;
		color:white;
		border-radius : 0px;
		width : 100%;
	}
	@media screen and (max-width: 810px) 
		{
			#section211, #section221, #section231
			{
				margin-left:100px;
			}
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
			var table = "";
		function removeOption() {
    var x = document.getElementById("subcategory");
	var a= document.getElementById("category").value;
	var y= document.getElementById("subcategory").value;
	var z= document.getElementById("category");


	var category;
	var subcategory;
	if(y=="")
	{
	return false;
	}
	if(y=="All")
	{	
		z.remove(z.selectedIndex);
	}
	if(table=="")
		table=y;
	else 
		table= ", "+y;
	document.getElementById("cat").innerHTML+= y;
	document.getElementById("text").value+=table;
	

	document.getElementById("subcat").innerHTML+= " " + a;
    x.remove(x.selectedIndex);
}

	/*if(a=="")
	{
		document.getElementById("date").innerHTML="*Select a date";
		document.report.from.style.borderColor="red";
		flagf=1;
	}
	if(b=="")
	{
		document.getElementById("date").innerHTML="*Select a date";
		document.report.to.style.borderColor="red";
		flagt=1;
	}*/

		
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
			<li><a href="#"><button type="button" class="btn btn-primary btn-md " data-toggle="modal" data-target="#myModal">Generate CV</button></a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
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
				<div id="dia2">
					<font size="4">PDF :</font><button style="background-color:white;border:none;"> <i class="fa fa-file-pdf-o" style="font-size:35px;color:red"></i></button></li>
				</div>
			</div>
			<br><br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
	
<div class="container-fluid">
	<div class="row">
	
		<nav class="col-sm-2 col-lg-2 col-md-2 col-xs-2" id="myScrollspy">
			<ul class="nav nav-pills nav-stacked">
				<li class="dropdown" id="section0"><a  href="profile.php">PROFILE</a></li>		
				<li id="section21"><a href="#section211">Faculty List</a></li>
				<li id="section22"><a href="#section221">Add faculty</a></li>
				<li id="section23"><a href="#section231">Report Generation</a></li>
				<li id="section3"><a href="MAIN3.php">Set Up Profile</a></li>
			</ul>
		</nav>
		
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10">
			<div id="section211" class="well">    
					<br>
					<h1>Faculty List</h1>
					<p>Select a faculty's name to see his/her details & assign priveleges!</p>  
					<input class="form-control" id="myInput" type="text" placeholder="Search..">
					<br>
					<div class="table-responsive">
					<table class="table table-bordered ">
						<thead>
							<tr>
								<th>Employee ID</th>
								<th>Name</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody id="myTable">
						<tr>
							<td>1234</td>
							<td><a href="list_profile.php">Doe</a></td>
							<td>john@example.com</td>
						</tr>	
						<tr>
							<td>1234</td>
							<td><a href="list_profile.php">Doe</a></td>
							<td>john@example.com</td>
						</tr>	
						<tr>
							<td>1234</td>
							<td><a href="list_profile.php">Doe</a></td>
							<td>john@example.com</td>
						</tr>	
						<tr>
							<td>1234</td>
							<td><a href="list_profile.php">Doe</a></td>
							<td>john@example.com</td>
						</tr>	
						<tr>
							<td>1234</td>
							<td><a href="list_profile.php">Doe</a></td>
							<td>john@example.com</td>
						</tr>	
						<tr>
							<td>1234</td>
							<td><a href="list_profile.php">Doe</a></td>
							<td>john@example.com</td>
						</tr>	
						<tr>
							<td>1234</td>
							<td><a href="list_profile.php">Doe</a></td>
							<td>john@example.com</td>
						</tr>						
					</tbody>
					</table>
					</div>
				</div>
			
			<div id="section221" class="well"> 
			
				
					<h1>Add Member</h1>
					<center>
						<form class="form-horizontal" action="" name="add_fac" method="POST" >
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter Employee ID" name="empid" autofocus>
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
					
					</center>
				</div>	
			
			<div id="section231" class="well">
				
					<h1>Report Generation</h1>
					<form method="post" name="report" onsubmit="return validateReport()">
			<fieldset>
				
				<div class="form-group">
					<div class="category_div" id="category_div">Report Type
					<div class="form-group"> 
							<br>
							<label class="radio-inline"><input type="radio" name="report_emp" onclick="var input = document.getElementById('name3'); if(this.checked){ input.disabled = true; input.focus();}else{input.disabled=false;}">All Employee</label>
							<label class="radio-inline"><input type="radio" name="report_emp" for="name3" onclick="var input = document.getElementById('name3'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}">Give Employee ID</label>
							<input id="name3" name="name3" type="text" disabled="true"/>
						</div>
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
					</div><span class="error" id="cat"></span>
					<span class="error" id="subcat"></span>
				</div>
				<br>
				<div class="form-group">
					<div class="sub_category_div" id="sub_category_div">Please select attributes:
						<script type="text/javascript" language="JavaScript">
							document.write('<select  name="subcategory" id="subcategory"><option  value="" >Please select type of report</option></select>')
						</script>
					<noscript>
						<select  name="subcategory" id="subcategory">
							<option value=""></option>
						</select>
					</noscript>
					</div><span class="error" id="subcat"></span>
				</div>
				<input type="hidden" name="attributes" id="text" >
				<input type="hidden" name="tables" id="text2" >
				<input type="button" onclick="removeOption()" value="Add"><br><br>
				</form>
				
				FROM:<input onfocus="(this.type='date')" onblur="(this.type='text')" id="from" name="from" > - TO: <input onfocus="(this.type='date')" onblur="(this.type='text')" id="to" name="to">
				<br>
				<span class="error" id="date"></span><br><br>
				<input type="submit" value="submit" >
				
</fieldset>
</form>
				</div>
			</div>
		 
		</div>
	
	
</div>
</body>
</html>