<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		body 
		{
			position: relative;
		}
	
		ul.nav-pills 
		{
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
	
		.navbar li a, .navbar .navbar-brand 
		{
			color: #fff !important;
			position : relative;
		}
	 
		#section1 {color: #ff;}
		#section2 {color: #ff;}
		#section3 {color: #ff;}
		#section41 {color: #ff;}
		#section42 {color: #ff;}
	  
		@media screen and (max-width: 810px) 
		{
			#section1, #section2, #section3, #section41, #section42 ,#section43, #section51, #section52, #section53 , #section6 , #section7 
			{
				margin-left:120px;
			}
		}
		
		.modal-dialog
		{
			width : 375px;
		}
		.form-control{
		max-width: 450px;
		min-width:200px;
		border-radius : 0px;
		}
		
		.error
		{
			color  :red;
		}
	</style>
	
	
	<script src="homepage_js.js"></script>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
<?php
	include 'homepage_php.php';
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
				<li><a href="#"><button type="button" class="btn btn-primary btn-md " data-toggle="modal" data-target="#myModal">Generate CV</button></a></li>
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
				<div id="word">
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
		
		<nav class="col-sm-2 col-lg-2 col-md-2 col-xs-2" id="myScrollspy">
			<ul class="nav nav-pills nav-stacked">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#section0">PROFILE <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="profile.php">Main</a></li>
						<li><a href="#section02">Settings</a></li>                     
					</ul>
				</li>
				<li><a href="#section1">Personal Details</a></li>
				<li><a href="#section2">Academic Qualifications</a></li>
				<li><a href="#section3">Courses Taught</a></li>
		
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Publications <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#section41">Books</a></li>
						<li><a href="#section42">Journals</a></li>    
						<li><a href="#section43">Conferences</a></li>
					</ul>
				</li>
		
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Short Term Training Program">STTP<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#section51">Attended</a></li>
						<li><a href="#section52">Organised</a></li>    
						<li><a href="#section53">Delivered</a></li>
					</ul>
				</li>
				
				<li><a href="#section6">Co curricular activities</a></li>
				<li><a href="#section7">Extra curricular activities</a></li>
			</ul>
		</nav>
		
		<center>
		<div class="container-fluid">
		
		<!--FORM 1-->
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10">
		<div id="section1" > 

			<form  method="POST" name="personal" onsubmit="return validatePersonal()"  enctype="multipart/form-data">
				<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10  well">
				<fieldset>
				<legend><h1>Personal details</h1></legend>
				<div class="form-group">
					<input type="text" class="form-control" name = "name" id="n" <?php if($name=='') echo "placeholder='* Name'"; else echo "value='$name'"; ?>>
					<span class="error" id="name"></span>
					<br>
				</div>
				<div class="form-group">
				Gender
					<input  type="radio" value="Male" name = "gender" id="g" <?php if($gender=='Male') echo 'checked'; ?>>Male &nbsp 
					<input  type="radio" value="Female" name = "gender"  <?php if($gender=='Female') echo 'checked'; ?>>Female &nbsp 
					<input  type="radio" value="Other" name = "gender" <?php if($gender=='Other') echo 'checked'; ?>>Other<br>
					<span class="error" id="gender"></span>
					<br><br>
				</div>
				<div class="form-group">
					<input  type="text" <?php if(!empty($err[0]))echo "style='border-color:red;' autofocus";?> placeholder="* Email" class="form-control" id="e" name = "email"<?php if($email=='') echo "placeholder='* Email'"; else echo "value='$email'"; ?>>
					<span class="error" id="email"><?php echo $err[0]; ?></span> &nbsp &nbsp <br><br>
					
					<input  type="phone" class="form-control" <?php if(!empty($err[1])) echo "style='border-color:red;' autofocus"; ?> id="c" name = "contact" <?php if($contact=='') echo "placeholder='* Contact'"; else echo "value='$contact'"; ?>>
					<span class="error" id="contact"><?php echo $err[1]; ?></span>
					<br><br>
				</div>
				<div class="form-group">
					<input id="d" <?php if(!empty($err[28])) echo "style='border-color:red;' autofocus"; ?> min="1950-01-01" max="<?php echo $maxdate; ?>" <?php if($dob == '1950-01-01') echo "placeholder='* Date Of Birth'"; else echo "value = $dob";?> class="form-control" type="text" name="date" onfocus="(this.type='date')" onblur="(this.type='text')" id="DOB">
					<span class="error" id="date"><?php echo $err[28]; ?></span>
					<br><br>
				</div>
				<div class="form-group">
					<textarea id="a" class="form-control" rows="5" name = "address" <?php if($address=='') echo "placeholder='* Address'";?>><?php if(!($address=='')) echo $address;  ?></textarea>
					<span class="error" id="address"></span>
					<br><br>
				</div>
				<div class="form-group">
					<input id="pass" type="text" class="form-control" <?php if(!($join_pos == '')) echo "value='$join_pos'";else echo 'placeholder="Joining Position"';?> name = "joining_position"> &nbsp &nbsp
					<input <?php if(!empty($err[27])) echo "style='border-color:red;' autofocus";if($join_date == '1950-01-01') echo "placeholder='Date Of Joining'"; else echo "value = $join_date";?> class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="joining_date">
					<span class="error"><?php echo $err[27]; ?></span>
					<br><br> 
				</div>  
				<legend>Promotions</legend>
					<div class="form-group">
						<input id="pass" type="text" class="form-control"  <?php if(!($pro1 == '')) echo "value='$pro1'";else echo 'placeholder=" Promotion 1"';?><?php if(!empty($err[32])) echo "style='border-color:red;' autofocus"; ?> name = "pro1"><span class="error"><?php echo $err[32]; ?> </span>  &nbsp &nbsp
						<input <?php if(!empty($err[29])) echo "style='border-color:red;' autofocus"; ?> <?php if($pro1_date == '1950-01-01') echo "placeholder='Date Of Promotion 1'"; else echo "value = '$pro1_date'";?> class="form-control"  onfocus="(this.type='date')" onblur="(this.type='text')" name="pro1_date">
						<span class="error"><?php echo $err[29]; ?> </span>
						<br><br>
					</div>
					<div class="form-group">
						<input id="pass" type="text" class="form-control"  <?php if(!($pro2 == '')) echo "value='$pro2'";else echo 'placeholder="Promotion 2"';?> name = "pro2"> &nbsp &nbsp
						<input <?php if($pro2_date == '1950-01-01') echo "placeholder='Date Of Promotion 2'"; else echo "value = '$pro2_date'";?> <?php if(!empty($err[30])) echo "style='border-color:red;' autofocus"; ?> class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="pro2_date">
						<span class="error"><?php echo $err[30]; ?> </span>
						<br><br>
					</div>
					<div class="form-group">
						<input id="pass" type="text" class="form-control" <?php if(!($pro3 == '')) echo "value='$pro3'";else echo 'placeholder="Promotion 3"';?> name = "pro3"> &nbsp &nbsp
						<input <?php if($pro3_date == '1950-01-01') echo "placeholder='Date Of Promotion 3'"; else echo "value = '$pro3_date'";?> <?php if(!empty($err[31])) echo "style='border-color:red;' autofocus"; ?> class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="pro3_date">
						<span class="error"><?php echo $err[31]; ?></span>
						<br><br>
					</div>
					<div class="form-group">
						<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitpersonal">
					</div> 
				</fieldset>
			</form>
		</div>
		</div>
  
		<!--FORM 2-->
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10 well">
	
	
		<div id="section2"> 
			<!--SSC-->
			<legend><h2>Academic Details</h2></legend>
			<form  method="POST"  onsubmit="return ac1()" name="a1"  enctype="multipart/form-data">
				<fieldset>
					<h3>SSC</h3>
					<br>
					<div class="form-group">
						<input type="text" class="form-control"  name="sscinstitute" id="sscinstitute_id" <?php if($sscInstitute=='') echo "placeholder='Institute Name'"; else echo "value='$sscInstitute'"; ?>>
						<span class="error" id="ins1"></span>
						<br>
					</div>
					
					<div class="form-group">
						<input type="number"   class="form-control" name="sscmarks" id="sscmarks_id" min="0" max="100" step="0.01" <?php if($sscPercentile==0) echo "placeholder='Percentile'"; else echo "value=$sscPercentile"; ?> >
						
						<span class="error" id="sscmarks1"></span>
						&nbsp<br>
					<select name="sscyear">
    					<?php
    						foreach ($yearArray as $year) {
    							$selected = ($year == $sscYear && $sscYear!=1950) ? 'selected' : '';
       						echo "<option '.$selected.' value=$year>".$year."</option>";
    						}
    					?>
					</select>

					<span class="error" id="sscyear"></span>
					</div>
					<br>
					<div class="form-group">
						Marksheet :<?php if($sscMarksheet==null) echo "<input type='file' name='sscimage' id='sscimage' accept='image/x-png,image/gif,image/jpeg' />"; else {echo "Marksheet Already Inserted"; echo "<input type='file' name='sscimage' id='sscimage' accept='image/x-png,image/gif,image/jpeg' />";}?> 
					</div>
					<br>
					<div class="form-group">
						<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitacademic1">
					</div> 
			</form>
					
			<!--HSC-->	
			<form  method="POST"  onsubmit="return ac2()" name="a2"  enctype="multipart/form-data">
					<h3>HSC</h3>
					<br>
					<div class="form-group">
						<input type="text" name="hscinstitute" id="hscinstitute_id" class="form-control"  <?php if($hscInstitute=='') echo "placeholder='Institute Name'"; else echo "value='$hscInstitute'"; ?>>
						<span class="error" id="ins2"><?php echo $err[35];?></span>

					</div>
					<br>
					<div class="form-group">
						<input type="number"   class="form-control" name="hscmarks" id="hscmarks_id"  min="0" max="100" step="0.01"  <?php if($hscPercentile==0) echo "placeholder='Percentile'"; else echo "value=$hscPercentile"; ?> >
						<span class="error" id="hscmarks1"></span>
						&nbsp<br>
					<select name="hscyear">
    					<?php
    						foreach ($yearArray as $year) {
    							$selected = ($year == $hscYear && $hscYear!=1950) ? 'selected' : '';
       						echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
    						}
    					?>
					</select>
					</div>
					<br>
					<div class="form-group">
						Marksheet : <?php if($hscMarksheet==null) echo "<input type='file' name='hscimage' id='hscimage' accept='image/x-png,image/gif,image/jpeg' />"; else {echo "Marksheet Already Inserted"; echo "<input type='file' name='hscimage' id='hscimage' accept='image/x-png,image/gif,image/jpeg' />";} ?>
					</div>	
					<br>
					<div class="form-group">
						<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitacademic2">
					</div> 
			</form>
			
			<!--BTECH-->
			<form  method="POST"  onsubmit="return ac3()" name="a3"  enctype="multipart/form-data">		
					<h3>Bachelor's</h3>
					<br>
					<div class="form-group">
						<input type="text" name="btechinstitute" id="btechinstitute_id" class="form-control"  <?php if($bachelorsInstitute=='') echo "placeholder='Institute Name'"; else echo "value='$bachelorsInstitute'"; ?>>
						<span class="error" id="ins3"><?php echo $err[36];?></span>
						
					</div>
					<br>
					<div class="form-group">
						<input type="number"  name="btechmarks" id="btechmarks_id" class="form-control" min="0" max="10" step="0.01" <?php if($bachelorsPercentile==0) echo "placeholder='CGPA'"; else echo "value=$bachelorsPercentile"; ?>>
				
						<span class="error" id="btechmarks1"></span>
						&nbsp<br>
					<select name="btechyear">
    					<?php
    						foreach ($yearArray as $year) {
    							$selected = ($year == $bachelorsYear && $bachelorsYear!=1950) ? 'selected' : '';
       						echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
    						}
    					?>
					</select>
					</div>
					<br>
					<div class="form-group">
						<label for="sel1">Degree:</label>
						<select id="sel1" class="form-control" name="btechdegree" >
							<option value=''>Degree</option>
							<option value='Some Name 1' >Some name 1 </option>
							<option> Some name 2 </option>
							<option> Some name 3 </option>
							<option> Some name 4 </option>
							<option> Some name 5 </option>
						</select>
					</div>
					<span class="error"></span>
					<div class="form-group">
						Marksheet : <?php if($btechMarksheet==null) echo "<input type='file' name='btechimage' id='btechimage' accept='image/x-png,image/gif,image/jpeg' />"; else {echo "Marksheet Already Inserted"; echo "<input type='file' name='btechimage' id='btechimage' accept='image/x-png,image/gif,image/jpeg' />"; }?>
					</div>
					<br>
					<div class="form-group">
						<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitacademic3">
					</div>
			</form>
			
			<!--MTECH-->
			<form  method="POST"  onsubmit="return ac4()" name="a4"  enctype="multipart/form-data">		
					<h3>Master's</h3>
					<br>
					<div class="form-group">
						<input type="text" name="mtechinstitute" id="mtechinstitute_id"  class="form-control" <?php if($mastersInstitute=='') echo "placeholder='Institute Name'"; else echo "value='$mastersInstitute'"; ?>>
						<span class="error" id="ins4"></span>
					</div>
					<br>
					<div class="form-group">
						<input type="number" name="mtechmarks" id="mtechmarks_id"  class="form-control" min="0" max="10" step="0.01"  <?php if($mastersPercentile==0) echo "placeholder='CGPA'"; else echo "value=$mastersPercentile"; ?>>
						<span class="error" id="mtechmarks1"></span>
						&nbsp <br>
					<select name="mtechyear">
 
    					<?php
    						foreach ($yearArray as $year) {
    							$selected = ($year == $mastersYear && $mastersYear!=1950) ? 'selected' : '';
       						echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
    						}
    					?>
					</select>
					</div>
					<br>
					<div class="form-group">
						<label for="sel1">Degree:</label>
						<select id="sel1" name="mtechdegree" class="form-control" >
							<option value=''<?php if($mastersIn == '') echo "selected"; ?>>Degree</option>
							<option value='Some Name 1'<?php if($mastersIn == 'Some Name 1') echo "selected"; ?> >Some Name 1 </option>
							<option> Some name 2 </option>
							<option> Some name 3 </option>
							<option> Some name 4 </option>
							<option> Some name 5 </option>
						</select>
					</div>
					<span class="error"></span>
					<div class="form-group">
					Marksheet : <?php if($mtechMarksheet==null) echo "<input type='file' name='mtechimage' id='mtechimage' accept='image/x-png,image/gif,image/jpeg' />"; else {echo "Marksheet Already Inserted";  echo "<input type='file' name='mtechimage' id='mtechimage' accept='image/x-png,image/gif,image/jpeg' />";} ?>			
					</div>
					<br>
					<div class="form-group">
						<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitacademic4">
					</div>
			</form>
			
			<!--PHD-->
			<form  method="POST"  onsubmit="return ac5()" name="a5"  enctype="multipart/form-data">		
					<h3>PHD</h3>
					<br>
					<div class="form-group">
						<input type="text" class="form-control"  name="phdinstitute" id="phdinstitute_id"  <?php if($phdInstitute=='') echo "placeholder='Institute Name'"; else echo "value='$phdInstitute'"; ?>>
						<span class="error" id="ins5"></span>
					</div>
					<br>
					<div class="form-group">
						<input type="number" name="phdmarks" id="phdmarks_id"  class="form-control"   min="0" max="10" step="0.01" <?php if($phdPercentile==0) echo "placeholder='CGPA'"; else echo "value=$phdPercentile"; ?>>
						<span class="error" id="phdmarks1"></span>
						&nbsp<br>
					<select name="phdyear">
    					<?php
    						foreach ($yearArray as $year) {
    							$selected = ($year == $phdYear && $phdYear!=1950) ? 'selected' : '';
       						echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
    						}
    					?>
					</select>
					</div>
					<br>
					<div class="form-group">
						<label for="sel1">Degree:</label>
						<select id="sel1" name="phddegree" class="form-control" >
							<option value='' <?php if($phdIn =='') echo "selected"; ?>>Degree</option>
							<option value='Some Name 1' <?php if($phdIn == 'Some Name 1') echo "selected"; ?> >Some Name 1 </option>
							<option> Some name 2 </option>
							<option> Some name 3 </option>
							<option> Some name 4 </option>
							<option> Some name 5 </option>
						</select>
					</div>
					<span class="error"></span>
					<div class="form-group">
						Marksheet : <?php if($phdMarksheet==null) echo "<input type='file' name='phdimage' id='phdimage' accept='image/x-png,image/gif,image/jpeg' />"; else {echo "Marksheet Already Inserted"; echo "<input type='file' name='phdimage' id='phdimage' accept='image/x-png,image/gif,image/jpeg' />"; }?>
					</div>
					<div class="form-group">
						<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitacademic5">
					</div> 
			</form>
		</div>
		</div>
		
		<!--FORM 3-->
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10 well">
		<div id="section3"> 
			<form method="post" onsubmit="return coursesvalidation()" name="coursestaught">
			<fieldset>
				<legend><h2>Courses Taught</h2></legend>
				<div class="form-group">
					<div class="category_div" id="category_div">Course Type
						<select name="category" class="required-entry form-control" id="category_id" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
							<option value="">Select course type</option>
							<option value="UG">UG</option>
							<option value="PG">PG</option>
							<option value="Labcourses">Lab Courses</option>
							<option value="AC">Audit Course</option>
							<option value="IDC">IDC</option>
						</select>
						<span class="error" id="coursetype"></span>
					</div>
				</div>
				<br>
				<div class="form-group">
					<div class="sub_category_div" id="sub_category_div">Please select course:
						<script type="text/javascript" language="JavaScript">
							document.write('<select name="subcategory" class="form-control" id="subcategory"><option value="">Please select course type</option></select>');
						</script>
						<span class="error" id="course"> </span>
					</div>
				</div>
				<br>
				<div class="form-group">
					<select class="form-control" name="courseyear" id="courseyear_id" >
						<option value="">Select Year</option>
						<option value="F.E">F.E</option>
						<option value="S.E">S.E</option>
						<option value="T.E">T.E</option>
						<option value="B.E">B.E</option>
					</select>
					<span class="error" id="courseyear1"></span>
				</div>
				<br>
				<div class="form-group">
					<select class="form-control" name="coursesem" id="coursesem_id">
						<option value="">Select semester</option>
						<option value="Odd">Odd</option>
						<option value="Even">Even</option>
					</select>
					<span class="error" id="coursesem1"></span>
				</div>
				<br>
				<div class="form-group">
					<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitcourses">
				</div>
			</form>
		</div>
		</div>

		<!--FORM 4.1-->
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10 well">
		<div id="section41">
			<form method="POST"  name="publicationbooks" onsubmit="return validateBook()" enctype="multipart/form-data">
			
				<legend><h2>Publications</h2></legend>
				<h3>Books</h3>
					<div class="form-group">
						<input type="text" class="form-control" name="bookname" id="booknameid" placeholder="Book's Name">
						<span class="error" id="bname"></span>
					</div>
					<br>
					<div class="form-group">
						<input type="text"  class="form-control" name="bookisbn" id="bookisbnid" placeholder="ISBN Number">
						<span class="error" id="bookisbn"></span>
					</div>
					<br>
					<div class="form-group">
						<input onfocus="(this.type='date')" onblur="(this.type='text')" <?php if(!empty($err[33])) echo "autofocus"; ?> id="pubdateid" class="form-control" name="pubdate" placeholder="Date of Publication">
						<span class="error" id="pubdate"><?php echo $err[33]; ?></span>
					</div>
					<br>
					<div class="form-group">
						<input type="text" class="form-control" name="bookedition"  placeholder="Book Edition">
					</div>
					<br>
					<div class="form-group">
						<input type="text"  class="form-control" name="book_pub_name" id="book_pub_nameid"  placeholder="Publisher's Name">
						<span class="error" id="book_pub_name"></span>
						<br>
					</div>
				
					<div class="form-group">
						<input type="text"  class="form-control" name="book_auth_name" id="book_auth_nameid" placeholder="Author's Name">
						&nbsp
						<span class="error" id="book_auth_name"></span>
						<br><br>
						<input type="text" id="bookauthinst" class="form-control" name="book_auth_inst" placeholder="Author's Institute">
					</div>
					<br>
					<div class="form-group">
						Co-Author 1:<br>
						<input type="text" id="bookcoauthname1" class="form-control" name="book_coauth_name1" placeholder="Name">
						&nbsp
						<input type="text" id="bookcoauthinst1" class="form-control" name="book_coauth_inst1" placeholder="Institute">
					</div>
					<br>
					<div class="form-group">
						Co-Author 2:<br>
						<input type="text" id="bookcoauthname2" class="form-control" name="book_coauth_name2" placeholder="Name">
						&nbsp
						<input type="text" id="bookcoauthinst2" class="form-control" name="book_coauth_inst2" placeholder="Institute">
					</div>
					<br>
					<div class="form-group">
						Co-Author 3:<br>
						<input type="text" id="bookcoauthname3" class="form-control" name="book_coauth_name3" placeholder="Name">
						&nbsp
						<input type="text" id="bookcoauthinst3" class="form-control" name="book_coauth_inst3" placeholder="Institute">
					</div>
					<br>
					<div class="form-group">
						<label>Book's Cover Page : </label><input type="file" name="book_image" id="book_image" accept="image/x-png,image/gif,image/jpeg,application/pdf" />
					</div>	
					<div class="form-group">
						<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitpublicationbooks">
					</div>
			</form>
		</div>
		</div>

		<!--FORM 4.2-->
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10 well">
		<div id="section42">
			<form method="post" action="" name="publicationjournal" onsubmit="return validateJour()" enctype="multipart/form-data" >
				<h3>Journals</h3>
					<br>
					<div class="form-group">
						<input type="text"  class="form-control" name="journal_name" id="journal_nameid" placeholder="Journal's Name" >
						<span class="error" id="journal_nam"></span>
					</div>
					<br>
					<div class="form-group">
						Is it a chapter from a book ? 
						<label class="radio-inline"><input type="radio" name="journal_chptr" value="YES">Yes</label>
						<label class="radio-inline"><input type="radio" name="journal_chptr" value="NO" checked>No</label>
					</div>
					<br>
					<div class="form-group">
						Type : 
						<br>
						<label class="radio-inline"><input type="radio" checked name="journal_type" value="National">National</label>
						<label class="radio-inline"><input type="radio" name="journal_type" value="International">International</label>
					</div>
					<br>
					<div class="form-group">
						<input type="text" id="journaltitle" class="form-control" name="journal_title" placeholder="Paper's Title">
						<span id=""></span>
					</div>
					<br>
					<div class="form-group">
						<input type="text" id="journal_auth_nameid" class="form-control" name="journal_auth_name"placeholder="Author's Name">
						<br>
						<span class="error" id="journal_auth_name"></span>
						
						<input onfocus="(this.type='date')" onblur="(this.type='text')" id="jour_dateid" class="form-control" name="jour_date" placeholder="Date of Publication">
						<br>
						<span class="error" id="jour_date"></span>
						
					</div>
					<br>
					<div class="form-group">
						<label>Paper : </label><input type="file" name="paper_image" accept="image/x-png,image/gif,image/jpeg,application/pdf" />
						<br>
						<label>Certificate : </label><input type="file" name="certificate_image" accept="image/x-png,image/gif,image/jpeg,application/pdf" />
					</div>
					<br>
					<div class="form-group">
						<input type="number" id="journalimpact" min="0" class="form-control" name="journal_impact" placeholder="Journal's Impact Factor">
					</div>
					<br>
					<div class="form-group">
						Peer Reviewed 
						<label class="radio-inline"><input type="radio" name="journal_peer" value="YES">Yes</label>
						<label class="radio-inline"><input type="radio" name="journal_peer" value="NO" checked>No</label>
					</div>
					<br>
					<div class="form-group">
						<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitjournals">
					</div>     
			</form>
		</div>
		</div>
		
		<!--FORM 4.3-->		
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10 well">
		<div id="section43">
			<form method="POST" onsubmit="return validateConf()" name="publicationconf" enctype="multipart/form-data" action="">
				<legend><h3>Conferences</h3></legend>
				<br>
				<div class="form-group">
					<input type="text" id="conf_nameid" class="form-control" name="conf_name"  placeholder="Conference Name">
					<span class="error" id="conf_name"></span>
				</div>
				<br>
				<div class="form-group">
					Type : 
					<br>
					<label class="radio-inline"><input type="radio" name="conf_type" checked value="National">National</label>
					<label class="radio-inline"><input type="radio" name="conf_type" value="International">International</label>
				</div>
				<br>
				<div class="form-group">
					<input type="text" id="conf_titleid" class="form-control" name="conf_title" placeholder="Event's Title">
					<span class="error" id="conf_title"></span>
				</div>
				<br>
				<div class="form-group">
					<input type="text" id="conf_speakerid" class="form-control" name="conf_speaker" placeholder="Speaker's Name">
					<span class="error" id="conf_speaker"></span>
				</div>
				<br>
				<div class="form-group">
					<input type="text" id="conf_placeid" class="form-control" name="conf_place" placeholder="Conference Location">
					<span class="error" id="conf_place"></span>
				</div>
				<br>
				<div class="form-group">
					Date of Conference : 
					<input onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="conf_date_fromid" name="conf_date_from" placeholder="From">
					<span class="error" id="conf_date_from"></span>&nbsp
					<input onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="conf_date_toid" name="conf_date_to" placeholder="To">
					<span class="error" id="conf_date_to"></span>
				</div>
				<br>
				<div class="form-group">
					<label>Paper : </label><input type="file" name="paper_image" id="paper_image" accept="image/x-png,image/gif,image/jpeg,application/pdf" />
					<br>
					<label>Certificate : </label><input type="file" name="certificate_image" id="certificate_image" accept="image/x-png,image/gif,image/jpeg,application/pdf" />
				</div>
				<div class="form-group">
					<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitconference">
				</div>
			</form>
		</div>
		</div>
		
		<!--FORM 5.1-->
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10 well">
		<div id="section51">
			<form method="POST" action="" name="sttpattended" onsubmit="return validateAttended()"  enctype="multipart/form-data">
				<legend>STTP attended</legend>
				<div class="form-group">
					<input type="text" class="form-control" id="attendednameid" placeholder="Name of the event" name = "attendedname">
					<span class="error" id="attendedname"></span>
					<br>
					<br>
				</div>
				<div class="form-group">
					<select class="form-control" name="eventtype">
						<option value="">Event type</option>
						<option value="Seminar">Seminar</option>
						<option value="Training">Training</option>
						<option value="Workshop">Workshop</option>
						<option value="Other">Other</option>
					</select>
					<br>
					<br>
				</div>
				<div class="form-group">
					<input placeholder="From"  type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="datefromattendedid" class="form-control" name="datefromattended">
					<span class="error" id="datefromattended"></span> -
					<input placeholder="To"  type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="datetoattendedid" name="datetoattended">
					<span class="error" id="datetoattended"></span>
					<br>
					<br>
				</div>
				<div class="form-group">
					<input type="text" name="organisedbyattended" class="form-control" placeholder="Organised by">
					<br>
					<br>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Location" name = "locationattended">
					<br>
					<br>
				</div>
				<div class="form-group">
					<input  name="durationattended" placeholder="Duration" class="form-control" type="text" onfocus="(this.type='time')" onblur="(this.type='text')">
					<br>
					<br>
				</div>
				<div class="form-group">
					<input type="number" name="participantsattended" class="form-control" placeholder="Total Participants">
					<br>
					<br>
				</div>
				<div class="form-group">
					<input type="text" name="speakerattended" class="form-control" placeholder="Speaker">
					<br>
					<br>
				</div>
				<div class="form-group">
					<label>Certificate : </label><input type="file" name="certificateattended" id="certificateattended" accept="image/x-png,image/gif,image/jpeg,application/pdf" />
				</div>
				<div class="form-group">
					<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitsttpattended">
				</div>
			</form>
		</div>
		</div>

		<!--FORM 5.2-->
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10 well">
		<div id="section52">
			<form onsubmit="return sttpo()" method="POST" name="sttporganised">
				<legend>STTP organised</legend>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Name of the event" id="organizedname_id" name = "organizedname">
					<span class="error" id="organizedname"></span>
					<br>
					<br>
				</div>
				<div class="form-group"> 
					<select class="form-control" name="organizedeventtype">
						<option value="">Event type</option>
						<option value="Seminar">Seminar</option>
						<option value="Training">Training</option>
						<option value="Workshop">Workshop</option>
						<option value="Other">Other</option>
					</select>
					<br>
					<br>
				</div>
				<div class="form-group">
					<input placeholder="From"  type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="datefromorganized_id" name="datefromorganized">
					<span class="error" id="datefromorganized"></span> -
					<input placeholder="To"  type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="datetoorganized_id" name="datetoorganized">
					<span class="error" id="datetoorganized"></span>
					<br>
					<br>
				</div>
				<div class="form-group">
					<input type="text" name="roleorganized" class="form-control" placeholder="Role">
					<br>
					<br>
				</div>
				<div class="form-group">
					<input type="number" name="participantsorganized" class="form-control" placeholder="Total Participants">
					<br>
					<br>
				</div>
				<div class="form-group">
					<input type="text" name="placeorganized" class="form-control" placeholder="Place">
					<br>
					<br>
				</div>
				<div class="form-group">
					<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitsttporganized">
				</div>
			</form>
		</div>
		</div>
		
		<!--FORM 5.3-->	
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10 well">
		<div id="section53">
			<form action="" method="POST" onsubmit="return validateDeli()" name="sttpdelivered">
				<legend>STTP delivered</legend>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Name of the event" id="deliverednameid" name = "deliveredname"  >
					<span class="error" id="deliveredname"></span>
					<br>
					<br>
				</div>
				<div class="form-group">
					<select class="form-control" name="deliveredeventtype">
						<option value="">Event type</option>
						<option value="Seminar">Seminar</option>
						<option value="Training">Training</option>
						<option value="Workshop">Workshop</option>
						<option value="Other">Other</option>
					</select>
					<br>
					<br>
				</div>
				<div class="form-group">
					<input placeholder="From"  type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="datefromdeliveredid" name="datefromdelivered">
					<span class="error" id="datefromdelivered" ></span> -
					<input placeholder="To"  type="text" onfocus="(this.type='date')" onblur="(this.type='text')"class="form-control" id="datetodeliveredid" name="datetodelivered" >
					<span class="error" id="datetodelivered" ></span>
					<br>
					<br>
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="5" placeholder="Activity description" class="form-control" name = "activitydescription"></textarea>
					<br>
					<br>
				</div>
				<div class="form-group">
					<input type="text" name="placedelivered" class="form-control" placeholder="Place">
					<br>
					<br>
				</div>	
				<div class="form-group">
					<input  name="durationdelivered" placeholder="Duration" class="form-control" type="text" onfocus="(this.type='time')" onblur="(this.type='text')">
					<br>
					<br>
				</div>
				<div class="form-group">
					<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitsttpdelivered">
				</div>
			</form>			
		</div>
		</div>
		
		<!--FORM 6-->
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10 well">
		<div id="section6">
			<form method="POST" onsubmit="return co()" name="co6">
				<fieldset>
					<legend><h2>Co-curricular Activities</h2></legend>
					<div class="form-group">
					<input type="text" class="form-control" placeholder="Name of the Activity" name = "cocurrname" id="cocurrname_id">
					<span class="error" id="coname"></span>
					
					<br>
					<br>
				</div>
						<div class="form-group">
							<textarea id="cocurdesc" class="form-control" name="cocurrdescription" cols="50" rows="6" placeholder="Description of Co-Curricular Activity"></textarea>
						</div><span class="error" id="codesc"></span>
						<br>
						<div class="form-group">
							<input onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" name="cocurrdate" id="cocurrdate_id" placeholder="Date">
							<span class="error" id="codate"></span>
							<br>
						</div>
						<br>
						
						<div class="form-group">
							<input type="text" id="cocurrole" class="form-control" name="cocurrrole" placeholder="Role">
						</div><span class="error" id="corole"></span>
						<br>
					
						<div class="form-group">
							Type : 
							<br>
							<label class="radio-inline"><input type="radio" name="cocurrtype" checked onclick="var input = document.getElementById('name2'); if(this.checked){ input.disabled = true; input.focus();}else{input.disabled=false;}">K. J. Somaiya</label>
							
							<label class="radio-inline"><input type="radio" name="cocurrtype" for="name2" onclick="var input = document.getElementById('name2'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}">Other</label>
							<input id="name2" name="name2" disabled="true" type="text"/>
						</div>
						<div class="form-group">
							<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitcocurricular">
						</div>
				</fieldset>
			</form>
		</div>
		</div>
		
		<!--FORM 7-->
		<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10 well">
		<div id="section7">
			<form method="POST" onsubmit="return extra()" name="ext7">
				<fieldset>
					<legend><h2>Extra Activities</h2></legend>
					<div class="form-group">
					<input type="text" class="form-control" placeholder="Name of the Activity" name = "extraname" id="extraname1">
					<span class="error" id="extname"></span>
					<br>
					<br>
					</div>
						<div class="form-group">
							<textarea id="extradesc" class="form-control" name="extradescription" cols="50" rows="6" placeholder="Description of Activity"></textarea>
							<span class="error" id="extdesc"></span>
						</div>
						<br>
						<div class="form-group">
							<input onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" name="extradate" placeholder="Date" id="extradate1">
							<span class="error" id="extdate"></span>
							<br>
						</div>
						<br>
						<div class="form-group">
							<input type="text" id="extrole" class="form-control" name="extrarole" placeholder="Role">
						</div>
						<br>
						<div class="form-group">
							<input type="text" id="extplace" class="form-control" name="extraplace" placeholder="Location">
						</div>
						<br>
						<div class="form-group">
							<input type="submit" style="color:white;" class="btn btn-primary btn-md" value="Submit" name = "submitextra">
						</div>
				</fieldset>
			</form>
		</div>
		</div>
		
		</div>
		</center>
</body>
</html>