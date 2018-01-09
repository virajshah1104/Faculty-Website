<?php include 'profile_php.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=NTR' rel='stylesheet'>
  <style>
  body{
	   font-family: 'NTR';font-size: 23px;
  }

  th, td {
    padding: 25px;
    text-align: : center;
}
  ul.nav-pills {
      top: 75px;
      position:fixed;
      float:left;
	  font-size:17px;
  }
     .navbar {
     border : none;
       background-color: #1F54AB;
	   color:white;
	   border-radius : 0px;
      width : 100%;
	  
    
	   
    }
	 .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
	 
  }
 

  
  @media screen and (max-width:1100px) {
   #section00, #section1, #section2, #section3, #section41, #section42 ,#section43, #section51, #section52, #section53 , #section6 , #section7 {
       margin-left:100px;
    }
  }
 .btn btn-primary btn-md{
	float:right;
 }
 #dia1{
  float: left;
  }
  #dia2{
  float : right;
  }
  .modal-dialog{
  width : 375px;
  }
 #edit{
	float:right;
 }
#sscimage,#hscimage,#bachelorsimage,#mastersimage,#phdimage,#coverimage,#jourpdf,#jourcert,#confpdf,#confcert,#sttpcert{
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#sscimage:hover,#hscimage:hover,#bachelorsimage:hover,#mastersimage:hover,#phdimage:hover,#coverimage:hover,#jourpdf:hover,#jourcert:hover,#confpdf:hover,#confcert:hover,#sttpcert:hover{opacity: 0.7;}

/* The Modal (background) */
.modal12 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content1 {
    margin: auto;
    display: block;
    width: 80%;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content1, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}
/* The Close Button */
.close12 {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close12:hover,
.close12:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content1 {
        width: 100%;
    }
}
h1{
	font-size:45px;
}

h2{
	font-size:30px;
}
::-webkit-scrollbar{
	width : 0px;
	height : 0px;
}
	
</style>
       <script language="javascript" type="text/javascript">
            function dynamicdropdown(listindex)
            {
                document.getElementById("subcategory").length = 0;
                switch (listindex)
                {
                    case "UG" :
                        document.getElementById("subcategory").options[0]=new Option("Please select UG course","");
                        document.getElementById("subcategory").options[1]=new Option("UG1","UG1");
                        document.getElementById("subcategory").options[2]=new Option("UG2","UG2");
                        document.getElementById("subcategory").options[3]=new Option("UG3","UG3");
                        document.getElementById("subcategory").options[4]=new Option("UG4","UG4");
                        document.getElementById("subcategory").options[5]=new Option("UG5","UG5");
                        break;
                    
                    case "PG" :
                        document.getElementById("subcategory").options[0]=new Option("Please select PG course","");
                        document.getElementById("subcategory").options[1]=new Option("PG1","PG1");
                        document.getElementById("subcategory").options[2]=new Option("PG2","PG2");
                        break;
                    case "Labcourses" :
                        document.getElementById("subcategory").options[0]=new Option("Please select lab course","");
                        document.getElementById("subcategory").options[1]=new Option("LB1","LB1");
                        document.getElementById("subcategory").options[2]=new Option("LB2","LB2");
						document.getElementById("subcategory").options[3]=new Option("LB3","LB3");
                        document.getElementById("subcategory").options[4]=new Option("LB4","LB4");
                        document.getElementById("subcategory").options[5]=new Option("LB5","LB5");
                        break;
                    case "AC" :
                        document.getElementById("subcategory").options[0]=new Option("Please select audit course","");
                        document.getElementById("subcategory").options[1]=new Option("AC1","AC1");
						document.getElementById("subcategory").options[2]=new Option("AC2","AC2");
						document.getElementById("subcategory").options[3]=new Option("AC3","AC3");
                        break;
					 case "IDC" :
                        document.getElementById("subcategory").options[0]=new Option("Please select IDC","");
                        document.getElementById("subcategory").options[1]=new Option("IDC1","IDC1");
						document.getElementById("subcategory").options[2]=new Option("IDC2","IDC2");
						document.getElementById("subcategory").options[3]=new Option("IDC3","IDC3");
                        break;
                }
                return true;
            }
       </script>
        <script>  
 $(document).ready(function(){  
      $('#insert_profile').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 }); 
 </script>  
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
<?php include 'decision.php'; ?>
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
<div class="container-fluid">
  <div class="row">


    <nav class="col-sm-2 col-lg-2 col-md-2 col-xs-2" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="#">PROFILE</a></li>
        <hr>
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
    <hr>
    <li id="section21"><a href="main.php#section21">Faculty List</a></li>
    <li id="section22"><a href="main.php#section22">Add Member</a></li>
    <li id="section23"><a href="main.php#section23">Report Generation</a></li>
      </ul>
    </nav>
	
<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10">

	<!--PROFILE PHOTO-->
	<div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
		<div class="profile-img" id="section00" >
			<center>
			<div class="thumbnail img-responsive" style="width:30%">
					<?php echo '<img  src="data:image/jpeg;base64,'.base64_encode($profilepic).'"/>';?>  				
			</div>
			<form method="post" action="" enctype="multipart/form-data">  
				Upload Photo Here: <input type="file" name="image" id="image">  
				<br>  
				<input type="submit" name="submitprofile" id="insert_profile" value="Save Changes" class="btn btn-info">  
			</form>  
			<br>
			</center>	
		</div>
	</div>
	
	<div id="section1">	
	
		<legend><h1>Personal details  <a href="homepage.php#section1"><span class="glyphicon glyphicon-edit"></span></a></h1></legend>
		<div class="form-group">
			Name: <?php if(!($name == '')) echo "<b>$name</b>";?>
		</div>
		<div class="form-group">
			Gender: <?php if(!($gender == 'null')) echo "<b>$gender</b>";?>
		</div>
		<div class="form-group">
			Email: <?php if(!($email == '')) echo "<b>$email</b>";?>
		</div>
		<div class="form-group">
			Contact no: <?php if(!($contact == '')) echo "<b>$contact</b>";?>
		</div>
		<div class="form-group">
			Date of Birth: <?php if(!($dob == '1950-01-01')) echo "<b>$dob</b>";?>
		</div>
		<div class="form-group">
			Address: <?php if(!($address == '')) echo "<b>$address</b>";?>
		</div>
		<div class="form-group">
			Joining Position: <?php if(!($join_pos == '')) echo "<b>".$join_pos."</b>";?><br>
			Joining Date: <?php if(!($join_date == '1950-01-01')) echo "<b>$join_date</b>";?>
		</div>
		<h2>Promotions</h2>
		<div class="form-group">
			Promotion 1: <?php if(!($pro1 == '')) echo "<b>$pro1</b>";?><br>
			Date: <?php if(!($pro1_date == '1950-01-01')) echo "<b>$pro1_date</b>";?>
		</div>
		<div class="form-group">
			Promotion 2: <?php if(!($pro2== '')) echo "<b>$pro2</b>";?><br>
			Date: <?php if(!($pro2_date == '1950-01-01')) echo "<b>$pro2_date</b>";?>
		</div>
		<div class="form-group">
			Promotion 3: <?php if(!($pro3 == '')) echo "<b>$pro3</b>";?><br>
			Date: <?php if(!($pro3_date == '1950-01-01')) echo "<b>$pro3_date</b>";?>	
		</div>
	
	</div>

	<div id="section2"> 
		
		<legend><h1>Academic Details  <a href="homepage.php#section2"><span class="glyphicon glyphicon-edit"></span></a></h1></legend>
		
			<?php
				if(!empty($sscInstitute) || !empty($hscInstitute) || !empty($bachelorsInstitute) || !empty($mastersInstitute) || !empty($phdInstitute))
				{
					echo "<div class='table-responsive '>";
					echo "<table class='table table-bordered'cellpadding='10'>";
					echo "<tr>";
					echo "<th>Qualification</th>";
					echo "<th>Institute</th>";
					echo "<th>Percentile/CGPA</th>";
					echo "<th>Year Of Passing</th>";
					echo "<th>Marksheet</th>";
					echo "</tr>";
					if(!empty($sscInstitute))
						echo "<tr><td>SSC</td><td>$sscInstitute</td><td>$sscPercentile</td><td>$sscYear</td><td><center>".$ssc."</center></td></tr>";
					
					if(!empty($hscInstitute))
						echo "<tr><td>HSC</td><td>$hscInstitute</td><td>$hscPercentile</td><td>$hscYear</td><td><center>".$hsc."</center></td></tr>";
					
					if(!empty($bachelorsInstitute))
						echo "<tr><td>Bachelors In $bachelorsIn</td><td>$bachelorsInstitute</td><td>$bachelorsPercentile</td><td>$bachelorsYear</td><td><center>".$bach."</center></td></tr>";
					
					if(!empty($mastersInstitute))
						echo "<tr><td>Masters In $mastersIn</td><td>$mastersInstitute</td><td>$mastersPercentile</td><td>$mastersYear</td><td><center>".$mast."</center></td></tr>";
					
					if(!empty($phdInstitute))
						echo "<tr><td>PHD in $phdIn</td><td>$phdInstitute</td><td>$phdPercentile</td><td>$phdYear</td><td><center>".$phdi."</center></td></tr>";
					
					echo "</table>";
					echo "</div>";
				}
				else
					echo "<h4>Details Not Filled</h4>";
				
			?>
		
	</div>

	<div id="section3"> 
		
		<legend><h1>Courses Taught  <a href="homepage.php#section3"><span class="glyphicon glyphicon-edit"></span></a></h1></legend>
		<?php 
		if($temp>0)
		{
			echo "<div class='table-responsive'>";
			echo "<table class='table table-bordered' border='1px' width='100%'>";
			echo "<tr>";
			echo "<th>Sr.No.</th>";
			echo "<th>Course Category</th>";
			echo "<th>Course Id</th>";
			echo "<th>Year</th>";
			echo "<th>Semester</th>";
			echo "</tr>";
			
			for($i=0;$i<$temp;$i++)
				echo "<tr><td>".($i+1)."</td><td>$coursecategory[$i]</td><td>$courseid[$i]</td><td>$courseyear[$i]</td><td>$coursesem[$i]</td></tr>";
			
			echo "</table>";
			echo "</div>";
		}
		else
			echo "<h4>No Courses Registered</h4>";
		?>
		
	</div>

	<div id="section41">
		
		<legend><h1>Publications</span></h1></legend>
			<h2>Books  <a href="homepage.php#section41"><span class="glyphicon glyphicon-edit"></span></a></h2>
			<?php
			$sql="SELECT * FROM publication_books WHERE Emp1_Id=$empid";
			$result=$conn->query($sql);
			if(mysqli_num_rows($result) > 0)
			{	
				echo "<div class='table-responsive '>";
				$pubbooks=1;
				echo "<table class='table table-bordered'>";
				echo "<tr>";
				echo "<th>Sr.No.</th>";
				echo "<th>Book Name</th>";
				echo "<th>ISBN</th>";
				echo "<th>Published By</th>";
				echo "<th>Date Published</th>";
				echo "<th>Author</th>";
				echo "<th>Author Institute</th>";
				echo "<th>Co-Author 1</th>";
				echo "<th>Co-Author 1 Institute</th>";
				echo "<th>Co-Author 2</th>";
				echo "<th>CO-Author 2 Institute</th>";
				echo "<th>Co-Author 3</th>";				
				echo "<th>Cover Picture</th>";
				echo "<th>CO-Author 3 Institute</th>";
				echo "<th>Edition</th>";
				echo "</tr>";
				
				while($row=mysqli_fetch_assoc($result))
				{
					if($row["Cover"] == null)
						$coverbook="Image Not Inserted";
					else
						$coverbook='<div class="thumbnail img-responsive" style="width:100%;height:100%"><img id="coverimage" src="data:image/jpeg;base64,'.base64_encode($row["Cover"]).'"/></div>';

					echo '<tr><td>'.$pubbooks.'</td><td>'.$row["Book_Name"].'</td><td>'.$row["ISBN"].'</td><td>'.$row["Publisher_Name"].'</td><td>'.$row["Date_Published"].'</td><td>'.$row["Author"].'</td><td>'.$row["Author_INST"].'</td><td>'.$row["COA1"].'</td><td>'.$row["COA1_INST"].'</td><td>'.$row["COA2"].'</td><td>'.$row["COA2_INST"].'</td><td>'.$row["COA3"].'</td><td>'.$row["COA3_INST"].'</td><td>'.$row["Edition"].'</td><td><center>'.$coverbook.'</center></td></tr>';
					
					$pubbooks++;
				}

				echo "</table>";
				echo "</div>";
			}
			else
				echo "<h4>No Books Published</h4>";	
		?>	
			
	</div>

	<div id="section42">
		
		<h2>Journals <a href="homepage.php#section42"><span class="glyphicon glyphicon-edit"></span></a></h2>
		<?php
			$sql="SELECT * FROM publication_journals WHERE Emp4_Id=$empid";
			$result=$conn->query($sql);
			if(mysqli_num_rows($result) > 0)
			{
				echo "<div class='table-responsive'>";
				$pubjour=1;
				echo "<table class='table table-bordered' border='1px' width='100%'>";
				echo "<tr>";
				echo "<th>Sr.No.</th>";
				echo "<th>Journal Name</th>";
				echo "<th>Author</th>";
				echo "<th>Title</th>";
				echo "<th>Date</th>";
				echo "<th>Type</th>";
				echo "<th>Book Chapter</th>";
				echo "<th>Peer Reviewed</th>";
				echo "<th>Impact Factor</th>";												
				echo "<th>Paper PDF</th>";
				echo "<th>Certificate</th>";
				echo "</tr>";
				while($row=mysqli_fetch_assoc($result))
				{
					if($row["Certificate"] == null)
						$jourcert="Image Not Inserted";
					else
						$jourcert='<div class="thumbnail img-responsive" style="width:100%;height:100%"><img id="jourcert" src="data:image/jpeg;base64,'.base64_encode($row["Certificate"]).'"/></div>';
					
					if($row["Paper_PDF"] == null)
						$jourpdf="Image Not Inserted";
					else
						$jourpdf='<div class="thumbnail img-responsive" style="width:100%;height:100%"><img id="jourpdf" src="data:image/jpeg;base64,'.base64_encode($row["Paper_PDF"]).'"/></div>';

					echo '<tr><td>'.$pubjour.'</td><td>'.$row["Name"].'</td><td>'.$row["Author"].'</td><td>'.$row["Title"].'</td><td>'.$row["Date"].'</td><td>'.$row["Type"].'</td><td>'.$row["Book_Chapter"].'</td><td>'.$row["Peer_Reviewed"].'</td><td>'.$row["Impact_Factor"].'</td><td><center>'.$jourpdf.'</center></td><td><center>'.$jourcert.'</center></td>';
					
					$pubjour++;
				}
				echo "</table>";
				echo "</div>";
			}
			else
				echo "<h4>No Journals Published</h4>";
			?>	
	
	</div>

<div id="section43">
<h2>Conferences  <a href="homepage.php#section43"><span class="glyphicon glyphicon-edit"></span></a></h2>
						<?php
					$sql="SELECT * FROM publication_conferences WHERE Emp5_Id=$empid";
					$result=$conn->query($sql);
					if(mysqli_num_rows($result) > 0)
					{
						echo "<div class='table-responsive'>";
						$pubconf=1;
						echo "<table class='table table-bordered' border='1px' width='100%'>";
						echo "<tr>";
						echo "<th>Sr.No.</th>";
						echo "<th>Conferences Name</th>";
						echo "<th>Title</th>";
						echo "<th>Speaker</th>";
						echo "<th>Location</th>";
						echo "<th>Type</th>";
						echo "<th>Date From</th>";
						echo "<th>Date To</th>";											
						echo "<th>Paper PDF</th>";
						echo "<th>Certificate</th>";
						echo "</tr>";
						while($row=mysqli_fetch_assoc($result))
						{
              if($row["Certificate"] == null)
              $confcert="Image Not Inserted";
              else
              $confcert='<div class="thumbnail img-responsive" style="width:100%;height:100%"><img id="confcert" src="data:image/jpeg;base64,'.base64_encode($row["Certificate"]).'"/></div>';
            if($row["Paper_Pdf"] == null)
              $confpdf="Image Not Inserted";
              else
              $confpdf='<div class="thumbnail img-responsive" style="width:100%;height:100%"><img id="confpdf" src="data:image/jpeg;base64,'.base64_encode($row["Paper_Pdf"]).'"/></div>';
							echo '<tr><td>'.$pubconf.'</td><td>'.$row["Name"].'</td><td>'.$row["Title"].'</td><td>'.$row["Speaker"].'</td><td>'.$row["Place"].'</td><td>'.$row["Type"].'</td><td>'.$row["Date_From"].'</td><td>'.$row["Date_To"].'</td><td><center>'.$confpdf.'</center></td><td><center>'.$confcert.'</center></td>';
							$pubconf++;
						}
						echo "</table>";
						echo "</div>";
					}
					else{
						echo "<h4>No Conferences Reistered</h4>";
					}	
					?>
</div>

<div id="section51">

<legend><h1>STTP</h1></legend>
					<h2>STTP attended  <a href="homepage.php#section51"><span class="glyphicon glyphicon-edit"></span></a></h2>
					<?php
					$sql="SELECT * FROM sttp_event_attended WHERE Emp6_Id=$empid";
					$result=$conn->query($sql);
					if(mysqli_num_rows($result) > 0)
					{
						echo "<div class='table-responsive'>";
						$sttpattended=1;
						echo "<table class='table table-bordered' border='1px' >";
						echo "<tr>";
						echo "<th>Sr.No.</th>";
						echo "<th>Title</th>";
						echo "<th>Speaker</th>";
						echo "<th>Organized By</th>";
						echo "<th>Event Type</th>";
						echo "<th>Location</th>";
						echo "<th>Duration</th>";
						echo "<th>Date From</th>";
						echo "<th>Date To</th>";											
						echo "<th>Total Participation</th>";
						echo "<th>Certificate</th>";
						echo "</tr>";
						while($row=mysqli_fetch_assoc($result))
						{
               if($row["Certificate"] == null)
              $sttpcert="Image Not Inserted";
              else
              $sttpcert='<div class="thumbnail img-responsive" style="width:100%;height:100%"><img id="sttpcert" src="data:image/jpeg;base64,'.base64_encode($row["Certificate"]).'"/></div>';
							echo '<tr><td>'.$sttpattended.'</td><td>'.$row["Title"].'</td><td>'.$row["Speaker"].'</td><td>'.$row["Organized_By"].'</td><td>'.$row["Event_Type"].'</td><td>'.$row["Place"].'</td><td>'.$row["Duration"].'</td><td>'.$row["Date_From"].'</td><td>'.$row["Date_To"].'</td><td>'.$row["Total_Participation"].'</td><td><center>'.$sttpcert.'</center></td>';
							$sttpattended++;
						}
						echo "</table>";
						echo "</div>";
					}
					else{
						echo "<h4>No STTP Events Attended</h4>";
					}	
					?>
					
</div>

<div id="section52">

<legend><h2>STTP organised  <a href="homepage.php#section52"><span class="glyphicon glyphicon-edit"></span></a></h2></legend>
					<?php
					$sql="SELECT * FROM sttp_event_organized WHERE Emp7_Id=$empid";
					$result=$conn->query($sql);
					if(mysqli_num_rows($result) > 0)
					{
						echo "<div class='table-responsive'>";
						$sttporganized=1;
						echo "<table class='table table-bordered' border='1px' width='100%'>";
						echo "<tr>";
						echo "<th>Sr.No.</th>";
						echo "<th>Event Name</th>";
						echo "<th>Event Type</th>";
						echo "<th>Role</th>";
						echo "<th>Location</th>";
						echo "<th>Date From</th>";
						echo "<th>Date To</th>";											
						echo "<th>Total Participation</th>";
						echo "</tr>";
						while($row=mysqli_fetch_assoc($result))
						{
							echo '<tr><td>'.$sttporganized.'</td><td>'.$row["Name"].'</td><td>'.$row["Type"].'</td><td>'.$row["Role"].'</td><td>'.$row["Place"].'</td><td>'.$row["Date_From"].'</td><td>'.$row["Date_To"].'</td><td>'.$row["Number_Participants"].'</td>';
							$sttporganized++;
						}
						echo "</table>";
						echo "</div>";
					}
					else{
						echo "<h4>No STTP Events Organized</h4>";
					}
					?>
</div>

<div id="section53">
<legend><h2>STTP delivered  <a href="homepage.php#section53"><span class="glyphicon glyphicon-edit"></span></a></h2></legend>
					<?php
					$sql="SELECT * FROM sttp_event_delivered WHERE Emp9_Id=$empid";
					$result=$conn->query($sql);
					if(mysqli_num_rows($result) > 0)
					{
						echo "<div class='table-responsive'>";
						$sttpdelivered=1;
						echo "<table class='table table-bordered' border='1px' width='100%'>";
						echo "<tr>";
						echo "<th>Sr.No.</th>";
						echo "<th>Event Name</th>";
						echo "<th>Event Description</th>";
						echo "<th>Event Type</th>";
						echo "<th>Duration</th>";
						echo "<th>Location</th>";
						echo "<th>Date From</th>";
						echo "<th>Date To</th>";											
						echo "</tr>";
						while($row=mysqli_fetch_assoc($result))
						{
							echo '<tr><td>'.$sttpdelivered.'</td><td>'.$row["Name"].'</td><td>'.$row["Description"].'</td><td>'.$row["Event_Type"].'</td><td>'.$row["Duration"].'</td><td>'.$row["Place"].'</td><td>'.$row["Date_From"].'</td><td>'.$row["Date_To"].'</td>';
							$sttpdelivered++;
						}
						echo "</table>";
						echo "</div>";
					}
					else{
						echo "<h4>No STTP Events Delivered</h4>";
					}
					?>
</div>

<div id="section6">

<legend><h1>Co-curricular Activities  <a href="homepage.php#section6"><span class="glyphicon glyphicon-edit"></span></a></h1></legend>
					<?php
					$sql="SELECT * FROM co_curricular WHERE Emp10_Id=$empid";
					$result=$conn->query($sql);
					if(mysqli_num_rows($result) > 0)
					{
						echo "<div class='table-responsive'>";
						$cocurr=1;
						echo "<table class='table table-bordered' border='1px' width='100%'>";
						echo "<tr>";
						echo "<th>Sr.No.</th>";
						echo "<th>Activity Name</th>";
						echo "<th>Activity Description</th>";
						echo "<th>Activity Type</th>";
						echo "<th>Role</th>";
						echo "<th>Date</th>";										
						echo "</tr>";
						while($row=mysqli_fetch_assoc($result))
						{
							echo '<tr><td>'.$cocurr.'</td><td>'.$row["Name"].'</td><td>'.$row["Description"].'</td><td>'.$row["Type"].'</td><td>'.$row["Role"].'</td><td>'.$row["Date"].'</td>';
							$cocurr++;
						}
						echo "</table>";
						echo "</div>";
					}
					else{
						echo "<h4>No Co-Curricular Activities Registered</h4>";
					}
					?>
</div>

<div id="section7">
<legend><h1>Extra Activities  <a href="homepage.php#section7"><span class="glyphicon glyphicon-edit"></span></a></h1></legend>
						<?php
					$sql="SELECT * FROM extra WHERE Emp11_Id=$empid";
					$result=$conn->query($sql);
					if(mysqli_num_rows($result) > 0)
					{
						echo "<div class='table-responsive'>";
						$extra=1;
						echo "<table class='table table-bordered' border='1px' width='100%'>";
						echo "<tr>";
						echo "<th>Sr.No.</th>";
						echo "<th>Activity Name</th>";
						echo "<th>Activity Description</th>";
						echo "<th>Location</th>";
						echo "<th>Role</th>";
						echo "<th>Date</th>";										
						echo "</tr>";
						while($row=mysqli_fetch_assoc($result))
						{
							echo '<tr><td>'.$extra.'</td><td>'.$row["Name"].'</td><td>'.$row["Description"].'</td><td>'.$row["Place"].'</td><td>'.$row["Role"].'</td><td>'.$row["Date"].'</td>';
							$extra++;
						}
						echo "</table>";
						echo "</div>";
					}
					else{
						echo "<h4>No Extra Activities Registered</h4>";
					}
					?>
</div>
<br>
<br>
</div>
<br><br>
</div>
</div>

<div id="myModal12" class="modal12">
  <span class="close12">&times;</span>
  <img class="modal-content1" id="img01">
  <div id="caption12"></div>
</div>
<script>
var modal = document.getElementById('myModal12');

var sscimg = document.getElementById('sscimage');
if(sscimg !=null){
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption12");
sscimg.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close12")[0];
span.onclick = function() { 
    modal.style.display = "none";
} 
}
var hscimg = document.getElementById('hscimage');
if(hscimg != null){
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption12");
hscimg.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close12")[0];
span.onclick = function() { 
    modal.style.display = "none";
} 
}
var bachimg = document.getElementById('bachelorsimage');
if(bachimg != null){
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption12");
bachimg.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close12")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
}
var mastimg = document.getElementById('mastersimage');
if(mastimg != null){
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption12");
mastimg.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close12")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
}
var phdimg = document.getElementById('phdimage');
if(phdimg != null){
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption12");
phdimg.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close12")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
}
var coverimg = document.getElementById('coverimage');
if(coverimg != null){
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption12");
coverimg.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close12")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
}
var jourpdf = document.getElementById('jourpdf');
if(jourpdf != null){
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption12");
jourpdf.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close12")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
}
var jourcert = document.getElementById('jourcert');
if(jourcert != null){
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption12");
jourcert.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close12")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
}
var confpdf = document.getElementById('confpdf');
if(confpdf != null){
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption12");
confpdf.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close12")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
}
var confcert = document.getElementById('confcert');
if(confcert != null){
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption12");
confcert.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close12")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
}
var sttpcert = document.getElementById('sttpcert');
if(sttpcert != null){
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption12");
sttpcert.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close12")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
}
</script>
</body>
</html>