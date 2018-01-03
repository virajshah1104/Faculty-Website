<?php
session_start();
$conn = new mysqli("localhost","root","admin","Faculty");
date_default_timezone_set("Asia/Kolkata");
$empid=$_SESSION["Emp_Id"];
//IMAGE//
		if(isset($_POST["submitprofile"]))  
		{  
		  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
		  $query = "UPDATE personal_details SET Profile_Pic='$file'";  
		  $query_result = mysqli_query($conn,$query) or die(mysqli_error($conn));
		  header('Location:profile.php#section0');
		}

//profile section
$sql = "SELECT * FROM personal_details WHERE Emp3_Id=$empid";
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
	$profilepic=$row["Profile_Pic"];

	$sql = "SELECT * FROM academic_details WHERE Emp2_Id=$empid";
	$result = $conn->query($sql);
	$row1 = mysqli_fetch_assoc($result);
	$sscInstitute=$row1["SSC_Institute"];
	$sscPercentile=$row1["SSC_Percentile"];
	$sscYear=$row1["SSC_Year"];
	$sscMarksheet=$row1["SSC_Marksheet"];
	if(!$sscMarksheet == null)
	$ssc='<div class="thumbnail img-responsive" style="width:50%;height:50%"><img id="sscimage" src="data:image/jpeg;base64,'.base64_encode($sscMarksheet).'"/></div>'; 
	else
		$ssc = "Image not Inserterd";
	$hscInstitute=$row1["HSC_Institute"];
	$hscPercentile=$row1["HSC_Percentile"];
	$hscYear=$row1["HSC_Year"];
	$hscMarksheet=$row1["HSC_Marksheet"];
	if($hscMarksheet == null)
		$hsc="Image Not Inserted";
	else
	$hsc='<div class="thumbnail img-responsive" style="width:50%;height:50%"><img id="hscimage" src="data:image/jpeg;base64,'.base64_encode($hscMarksheet).'"/></div>'; 
	$bachelorsIn=$row1["Bachelors_In"];
	$bachelorsInstitute=$row1["Bachelors_Institute"];
	$bachelorsPercentile=$row1["Bachelors_Percentile"];
	$bachelorsYear=$row1["Bachelors_Year"];
	$bachelorsMarksheet=$row1["Bachelors_Marksheet"];
	if($bachelorsMarksheet == null)
		$bach="Image Not Inserted";
	else
	$bach='<div class="thumbnail img-responsive" style="width:50%;height:50%"><img id="bachelorsimage" src="data:image/jpeg;base64,'.base64_encode($bachelorsMarksheet).'"/></div>'; 
	$mastersIn=$row1["Masters_In"];
	$mastersInstitute=$row1["Masters_Institute"];
	$mastersPercentile=$row1["Masters_Percentile"];
	$mastersYear=$row1["Masters_Year"];
	$mastersMarksheet=$row1["Masters_Marksheet"];
	if($mastersMarksheet == null)
		$mast="Image Not Inserted";
	else
	$mast='<div class="thumbnail img-responsive" style="width:50%;height:50%"><img id="mastersimage" src="data:image/jpeg;base64,'.base64_encode($mastersMarksheet).'"/></div>';
	$phdIn=$row1["Phd_In"];
	$phdInstitute=$row1["Phd_Institute"];
	$phdPercentile=$row1["Phd_Percentile"];
	$phdYear=$row1["Phd_Year"];
	$phdMarksheet=$row1["Phd_Marksheet"];
	if($phdMarksheet == null)
		$phdi="Image Not Inserted";
	else
		$phdi='<div class="thumbnail img-responsive" style="width:50%;height:50%"><img id="phdimage" src="data:image/jpeg;base64,'.base64_encode($phdMarksheet).'"/></div>';
	$courseid=array();
	$coursecategory=array();
	$coursesem=array();
	$courseyear=array();
	$temp=0;

	$sql="SELECT * from courses where Emp8_Id=$empid";
	$result=$conn->query($sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$courseid[$temp]=$row["Course_Id"];
		$coursecategory[$temp]=$row["Category"];
		$coursesem[$temp]=$row["Semester"];
		$courseyear[$temp]=$row["Year"];
		$temp++;
	}
?>