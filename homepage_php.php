<?php
session_start();
$image = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$empid=$_SESSION["Emp_Id"];
$err=array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
$conn = new mysqli("localhost","root","admin","Faculty");
date_default_timezone_set("Asia/Kolkata");
$maxdate = (date("Y")-22)."-12-31";
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

	if(isset($_POST["submitpersonal"]))
	{
		
		$flag=0;
		
		$name=$_POST["name"];
		$email=$_POST["email"];
		$contact=$_POST["contact"];
		if(isset($_POST["gender"]))
		$gender=$_POST["gender"];
		else
		$gender=""; 
		$address=$_POST["address"];
		$join_pos=$_POST["joining_position"];
		$pro1=$_POST["pro1"];
		$pro2=$_POST["pro2"];
		$pro3=$_POST["pro3"];
		$dob=$_POST["date"];
		$dobyear = (int)substr($dob,0,4);
		if(($dobyear+22) > (int)date("Y"))
		{
			$err[28]="* Enter Valid Date Of Birth";
			$flag=1;
		}
		
		$pro2_date=$_POST["pro2_date"];
		
		$pro3_date=$_POST["pro3_date"]; 

		if(!empty(($_POST["joining_date"])))
		{
			$join_date=$_POST["joining_date"];
			$temp = (int)substr($join_date,0,4);
			if(($temp <= $dobyear) || (($dobyear+22)>= $temp))
			{
				$err[27]="* Please Enter A Valid Joining Date ";
				$flag=1;
			}
		}
		
	if(!empty(($_POST["pro1_date"])))
	{
		$pro1_date=$_POST["pro1_date"];
		$temp1=(int)substr($pro1_date,0,4);
		if(empty($_POST["joining_date"])){
			$err[27]="* Please Enter Joining Date First";
			$flag=1;
		}
		else 
		{
			$temp = (int)substr($join_date,0,4);
			if($temp1 < $temp){
			$err[29]="* Please Enter A Valid Promotion 1 Date";
			$flag=1;
		}
		}

	}

	if(!empty(($_POST["pro2_date"])))
	{
		$pro2_date=$_POST["pro2_date"];
		$temp2=(int)substr($pro2_date,0,4);
		if(empty($_POST["joining_date"])){
			$err[27]="* Please Enter Joining Date First";
			$flag=1;
		}
		else if(empty($_POST["pro1_date"]))
		{
			$err[29]="* Please Enter Promotion 1 Date ";
			$flag=1;
		}
		else {
		$temp1=(int)substr($pro1_date,0,4);
		if($temp2 < $temp1)
		{
			$err[30]="* Please Enter A Valid Promotion 2 Date";
			$flag=1;
		}
	}

	}
	if(!empty($_POST["pro3_date"])) 
	{
		$pro3_date=$_POST["pro3_date"];
		$temp3=(int)substr($pro3_date,0,4);
		if(empty($_POST["joining_date"])){
			$err[27]="* Please Enter Joining Date First ";
			$flag=1;
		}
		else if(empty($_POST["pro1_date"]))
		{
			$err[29]="* Please Enter Promotion 1 Date";
			$flag=1;
		}
		else if(empty($_POST["pro2_date"]))
		{
			$err[30]="* Please Enter Promotion 2 Date";
			$flag=1;
		}
		else
		{
		$temp2=(int)substr($pro2_date,0,4);
		if($temp3 < $temp2)
		{
			$err[31]="* Please Enter A Valid Promotion 3 Date";
			$flag=1;
		}
	}
	}
		$temp = (int)substr($join_date,0,4);
		$temp1 = (int)date("Y");
		$years_exp = $temp1-$temp;
	if(empty($join_date))
	{
		$join_date="1950-01-01";
	}
	if(empty($pro1_date))
	{
		$pro2_date="1950-01-01";
	}
				
	if(empty($pro2_date))
	{
		$pro2_date="1950-01-01";
	}
						
	if(empty($pro3_date))
	{
		$pro3_date="1950-01-01";
	}

	$ql="SELECT * from personal_details";
		$query=mysqli_query($conn,$ql);
		while($row=mysqli_fetch_assoc($query))
		{
			if(!($email == ''))
			if(($row['Email']==$email) && ($row['Emp3_Id']!=$empid))
			{
				$err[0]="* Email already exists";
				$flag=1;
			}
			if(!($contact==''))
			if(($row['Contact']==$contact) && ($row['Emp3_Id']!=$empid))
			{
				$err[1]="* Contact already exists";
				$flag=1;
			}
		
		}
		if($flag!=1)
			{
				$sql = "UPDATE personal_details SET Name='$name',Email='$email',Contact='$contact',Address='$address',DOB='$dob',Join_Pos='$join_pos',Join_Date='$join_date',Years_Exp=$years_exp,Prom_1='$pro1',Prom_1_Date='$pro1_date',Prom_2='$pro2',Prom_2_Date='$pro2_date',Prom_3='$pro3',Prom_3_Date='$pro3_date',gender='$gender' WHERE Emp3_Id=$empid";
				if($result=$conn->query($sql))
				{
					header('Location:profile.php#section1');
				}else
				{
				echo mysqli_error($conn);
				}
			}
	}
	$sql = "SELECT * FROM academic_details WHERE Emp2_Id=$empid";
	$result = $conn->query($sql);
	$row1 = mysqli_fetch_assoc($result);
	$sscInstitute=$row1["SSC_Institute"];
	$sscPercentile=$row1["SSC_Percentile"];
	$sscYear=$row1["SSC_Year"];
	$sscMarksheet=$row1["SSC_Marksheet"];

	$hscInstitute=$row1["HSC_Institute"];
	$hscPercentile=$row1["HSC_Percentile"];
	$hscYear=$row1["HSC_Year"];
	$hscMarksheet=$row1["HSC_Marksheet"];

	$bachelorsIn=$row1["Bachelors_In"];
	$bachelorsInstitute=$row1["Bachelors_Institute"];
	$bachelorsPercentile=$row1["Bachelors_Percentile"];
	$bachelorsYear=$row1["Bachelors_Year"];
	$btechMarksheet=$row1["Bachelors_Marksheet"];
	
	$mastersIn=$row1["Masters_In"];
	$mastersInstitute=$row1["Masters_Institute"];
	$mastersPercentile=$row1["Masters_Percentile"];
	$mastersYear=$row1["Masters_Year"];
	$mtechMarksheet=$row1["Masters_Marksheet"];

	$phdIn=$row1["Phd_In"];
	$phdInstitute=$row1["Phd_Institute"];
	$phdPercentile=$row1["Phd_Percentile"];
	$phdYear=$row1["Phd_Year"];
	$phdMarksheet=$row1["Phd_Marksheet"];
	$curyear=date("Y");
	$dobyear = (int)substr($dob,0,4);
	$yearArray = range($dobyear+12, $curyear);

	if(isset($_POST["submitacademic1"]))
	{
		$sscInstitute=$_POST["sscinstitute"];
		$sscPercentile=$_POST["sscmarks"];
		if($sscPercentile==null)
			$sscPercentile=0.0;
		
		$sscYear=$_POST["sscyear"];
		if(!empty($_FILES["sscimage"]["tmp_name"])){
			$sscMarksheet = addslashes(file_get_contents($_FILES["sscimage"]["tmp_name"]));
			$image[0]=1;
		}
		else if($sscMarksheet != null)
		{
			$image[0]=0;
		}
		else
			$image[0]=0;

		if($image[0]==1){
			$sql = "UPDATE academic_details SET SSC_Marksheet='$sscMarksheet' WHERE Emp2_Id=$empid";
			$conn->query($sql);
		}
		
		$sql = "UPDATE academic_details SET SSC_Institute = '$sscInstitute',SSC_Percentile = $sscPercentile,SSC_Year = $sscYear WHERE Emp2_Id=$empid";
		if($result=$conn->query($sql))
			header('Location:homepage.php#section22');
		else
			echo mysqli_error($conn);
	}
	if(isset($_POST["submitacademic2"]))
	{
		$hscInstitute=$_POST["hscinstitute"];
		$hscPercentile=$_POST["hscmarks"];
		if($hscPercentile==null)
			$hscPercentile=0.0;
		
			$hscYear=$_POST["hscyear"];
		if(!empty($_FILES["hscimage"]["tmp_name"])){
			$hscMarksheet = addslashes(file_get_contents($_FILES["hscimage"]["tmp_name"]));
		$image[1]=1;
		}
		else if($hscMarksheet != null)
		{
			$image[1]=0;
		}
		else
		$image[1]=0;

		if($image[1]==1){
			$sql = "UPDATE academic_details SET HSC_Marksheet='$hscMarksheet' WHERE Emp2_Id=$empid";
			$conn->query($sql);
		}
		
		$sql = "UPDATE academic_details SET HSC_Institute = '$hscInstitute',HSC_Percentile = $hscPercentile,HSC_Year = $hscYear WHERE Emp2_Id=$empid";
		if($result=$conn->query($sql))
			header('Location:homepage.php#section23');
		else
			echo mysqli_error($conn);
	}

	if(isset($_POST["submitacademic3"]))
	{
		$btechInstitute=$_POST["btechinstitute"];
		$btechDegree=$_POST["btechdegree"];
		$btechPercentile=$_POST["btechmarks"];
		if($btechPercentile==null)
			$btechPercentile=0.0;
		
		
		$btechYear=$_POST["btechyear"];
		if(!empty($_FILES["btechimage"]["tmp_name"])){
			$btechMarksheet = addslashes(file_get_contents($_FILES["btechimage"]["tmp_name"]));
		$image[2]=1;
		}
		else if($btechMarksheet != null)
		{
			$image[2]=0;
		}
		else
			$image[2]=0;

		if($image[2]==1){
			$sql = "UPDATE academic_details SET Bachelors_Marksheet = '$btechMarksheet' WHERE Emp2_Id=$empid";
			$conn->query($sql);
		}
		
		$sql = "UPDATE academic_details SET Bachelors_In='$btechDegree',Bachelors_Institute = '$btechInstitute',Bachelors_Percentile = $btechPercentile,Bachelors_Year = $btechYear WHERE Emp2_Id=$empid";
		if($result=$conn->query($sql))
			header('Location:homepage.php#section24');
		else
			echo mysqli_error($conn);
	}

	if(isset($_POST["submitacademic4"]))
	{
		$mtechInstitute=$_POST["mtechinstitute"];
		$mtechDegree=$_POST["mtechdegree"];
		$mtechPercentile=$_POST["mtechmarks"];
		if($mtechPercentile==null)
			$mtechPercentile=0.0;
		
		
			$mtechYear=$_POST["mtechyear"];
		if(!empty($_FILES["mtechimage"]["tmp_name"])){
			$mtechMarksheet = addslashes(file_get_contents($_FILES["mtechimage"]["tmp_name"]));
		$image[3]=1;
		}
		else if($mtechMarksheet != null)
		{
			$image[3]=0;
		}
		else
			$image[3]=0;

		if($image[3]==1){
			$sql = "UPDATE academic_details SET Masters_Marksheet = '$mtechMarksheet' WHERE Emp2_Id=$empid";
			$conn->query($sql);
		}
		
		$sql = "UPDATE academic_details SET Masters_In='$mtechDegree',Masters_Institute = '$mtechInstitute',Masters_Percentile = $mtechPercentile,Masters_Year = $mtechYear WHERE Emp2_Id=$empid";
		if($result=$conn->query($sql))
			header('Location:homepage.php#section25');
		else
			echo mysqli_error($conn);
	}

	if(isset($_POST["submitacademic5"]))
	{
		$phdDegree=$_POST["phddegree"];
		$phdInstitute=$_POST["phdinstitute"];
		$phdPercentile=$_POST["phdmarks"];
		if($phdPercentile==null)
			$phdPercentile=0.0;
		
			$phdYear=$_POST["phdyear"];
		if(!empty($_FILES["phdimage"]["tmp_name"])){
			$phdMarksheet = addslashes(file_get_contents($_FILES["phdimage"]["tmp_name"]));
		$image[4]=1;
		}
		else if($phdMarksheet != null)
		{
			$image[4]=0;
		}
		else
			$image[4]=0;

		if($image[4]==1){
			$sql = "UPDATE academic_details SET Phd_Marksheet = '$phdMarksheet' WHERE Emp2_Id=$empid";
			$conn->query($sql);
		}
		
		$sql = "UPDATE academic_details SET Phd_In='$phdDegree',Phd_Institute = '$phdInstitute',Phd_Percentile = $phdPercentile,Phd_Year = $phdYear WHERE Emp2_Id=$empid";
		if($result=$conn->query($sql))
			header('Location:profile.php#section2');
		else
			echo mysqli_error($conn);
	}

	if(isset($_POST["submitcourses"]))
	{
		$flag2=0;
		$category=$_POST["category"];
		$subcategory=$_POST["subcategory"];
		$coursesem=$_POST["coursesem"];
		$courseyear=$_POST["courseyear"];

		


	$ql="SELECT * from courses";
		$query=mysqli_query($conn,$ql);
		while($row=mysqli_fetch_assoc($query))
		{
			if($category=="" || $subcategory=="" || $coursesem=="" || $courseyear=="")
			{
			$err[3]="Fields cannot be Empty";
			$flag2=1;
			}
			else if(($row['Course_Id']==$subcategory) && ($row['Emp8_Id']==$empid))
			{
				$err[2]="Course Already Entered";
				$flag2=1;
			}
			
		
		}
	if($flag2==0)
		{
		$sql="INSERT INTO courses VALUES($empid,'$category','$subcategory','$coursesem','$courseyear')";
		if($result=$conn->query($sql))
				{
					header('Location:profile.php#section3');
				}else
				{
				echo mysqli_error($conn);
				}
		}
	}

$flagbook=0;
	if(isset($_POST["submitpublicationbooks"]))
	{
		$bookName=$_POST["bookname"];
		$bookisbn=$_POST["bookisbn"];
		$pubdate=$_POST["pubdate"];
		$bookEdition=$_POST["bookedition"];
		$bookPubName=$_POST["book_pub_name"];
		$bookAuthName=$_POST["book_auth_name"];
		$bookAuthInst=$_POST["book_auth_inst"];
		$bookCoauthName1=$_POST["book_coauth_name1"];
		$bookCoauthInst1=$_POST["book_coauth_inst1"];
		$bookCoauthName2=$_POST["book_coauth_name2"];
		$bookCoauthInst2=$_POST["book_coauth_inst2"];
 		$bookCoauthName3=$_POST["book_coauth_name3"];
		$bookCoauthInst3=$_POST["book_coauth_inst3"];

		if(!empty($_POST["pubdate"]))
		{
			$pubdate=$_POST["pubdate"];
			$pubyear = (int)substr($pubdate,0,4);
			if($pubyear <= $dobyear)
			{
				$err[33]="* Please Enter A Valid Publication Date ";
				$flagbook=1;
			}
		}
		else
		{
			$pubdate="1950-01-01";
		}

		if(!empty($_FILES["book_image"]["tmp_name"]))
		{
		$bookImage = addslashes(file_get_contents($_FILES["book_image"]["tmp_name"]));
		$image[5]=1;
		}
		else
		$image[5]=0;

		
		if($flagbook==0)
		{
				if($image[5] == 1)	
				{
					$sql="INSERT INTO publication_books VALUES($empid,'$bookName','$bookisbn','$pubdate','$bookPubName','$bookCoauthName1','$bookCoauthInst1','$bookCoauthName2','$bookCoauthInst2','$bookCoauthName3','$bookCoauthInst3','$bookEdition','$bookAuthName','$bookAuthInst','$bookImage')";
				}
				else
				{
					$sql="INSERT INTO publication_books VALUES($empid,'$bookName','$bookisbn','$pubdate','$bookPubName','$bookCoauthName1','$bookCoauthInst1','$bookCoauthName2','$bookCoauthInst2','$bookCoauthName3','$bookCoauthInst3','$bookEdition','$bookAuthName','$bookAuthInst',null)";
				
				}
				if($result=$conn->query($sql))
				{
					header('Location:profile.php#section41');
				}else
				{
				echo mysqli_error($conn);
				}
		}
	}

$flagjour=0;

	if(isset($_POST["submitjournals"]))
	{
		$journalName=$_POST["journal_name"];
		$journalChptr=$_POST["journal_chptr"];
		$journalType=$_POST["journal_type"];
		$journalTitle=$_POST["journal_title"];
		$journalAuthName=$_POST["journal_auth_name"];
		$jourDate=$_POST["jour_date"];
		$journalImpact=$_POST["journal_impact"];
		$journalPeer=$_POST["journal_peer"];
		if(!empty($_FILES["paper_image"]["tmp_name"]))
		{
			$paperImage = addslashes(file_get_contents($_FILES["paper_image"]["tmp_name"]));
			$image[6]=1;
		}
		
		else
			$image[6]=0;
		
		if(!empty($_FILES["certificate_image"]["tmp_name"]))
		{
			$certificateImage = addslashes(file_get_contents($_FILES["certificate_image"]["tmp_name"]));
			$image[7]=1;
		}
		
		else
			$image[7]=0;

		
		if(empty($jourDate))
		{
			$jourDate="1950-01-01";
		}

		
		if($flagjour==0)
		{
				if($image[7] == 1 && $image[6]==1)	
				{
					$sql="INSERT INTO publication_journals VALUES($empid,'$journalType','$journalName','$journalTitle','$journalAuthName','$jourDate','$journalChptr','$certificateImage','$journalPeer','$paperImage','$journalImpact')";
				}
				else if($image[6]==1)
				{
					$sql="INSERT INTO publication_journals VALUES($empid,'$journalType','$journalName','$journalTitle','$journalAuthName','$jourDate','$journalChptr','$certificateImage','$journalPeer',null,'$journalImpact')";
				}
				else if($image[7]==1)
				{
					$sql="INSERT INTO publication_journals VALUES($empid,'$journalType','$journalName','$journalTitle','$journalAuthName','$jourDate','$journalChptr',null,'$journalPeer','$paperImage','$journalImpact')";
				}
				else
				{
					$sql="INSERT INTO publication_journals VALUES($empid,'$journalType','$journalName','$journalTitle','$journalAuthName','$jourDate','$journalChptr',null,'$journalPeer',null,'$journalImpact')";
				}
				if($result=$conn->query($sql))
				{
					header('Location:profile.php#section42');
				}else
				{
				echo mysqli_error($conn);
				}

		}

}
$flagconf=0;
	if(isset($_POST["submitconference"]))	
	{
		$confName=$_POST["conf_name"];
		$confType=$_POST["conf_type"];
		$confTitle=$_POST["conf_title"];
		$confSpeaker=$_POST["conf_speaker"];
		$confPlace=$_POST["conf_place"];
		$confDateFrom=$_POST["conf_date_from"];
		$confDateTo=$_POST["conf_date_to"];
		if(empty($confDateFrom))
		{
			$confDateFrom="1950-01-01";
		}
		if(empty($confDateTo))
		{
			$confDateTo="1950-01-01";
		}

		if(!empty($_FILES["paper_image"]["tmp_name"]))
		{
		$paperImage = addslashes(file_get_contents($_FILES["paper_image"]["tmp_name"]));
		$image[8]=1;
		}
		
		else
		$image[8]=0;


	if(!empty($_FILES["certificate_image"]["tmp_name"]))
		{
		$certificateImage = addslashes(file_get_contents($_FILES["certificate_image"]["tmp_name"]));
		$image[9]=1;
		}
		
		else
		$image[9]=0;

		
		
		if($flagconf==0)
		{


				if($image[9] == 1 && $image[8]==1)	
				{
					$sql="INSERT INTO publication_conferences VALUES($empid,'$confType','$confName','$confSpeaker','$confPlace','$confDateFrom','$confDateTo','$certificateImage','$confTitle','$paperImage')";
				}
				else if($image[8]==1)
				{

					$sql="INSERT INTO publication_conferences VALUES($empid,'$confType','$confName','$confSpeaker','$confPlace','$confDateFrom','$confDateTo',null,'$confTitle','$paperImage')";
				}
				else if($image[9]==1)
				{
					$sql="INSERT INTO publication_conferences VALUES($empid,'$confType','$confName','$confSpeaker','$confPlace','$confDateFrom','$confDateTo','$certificateImage','$confTitle',null)";
				}
				else
				{
					$sql="INSERT INTO publication_conferences VALUES($empid,'$confType','$confName','$confSpeaker','$confPlace','$confDateFrom','$confDateTo',null,'$confTitle',null)";
				}
				if($result=$conn->query($sql))
				{
					header('Location:profile.php#section43');
				}else
				{
				echo mysqli_error($conn);
				}
	}
}
$flagatten=0;
	if(isset($_POST["submitsttpattended"]))
	{
		$attendedname = $_POST["attendedname"];
		$eventtype=$_POST["eventtype"];
		$datefromattended=$_POST["datefromattended"];
		$datetoattended=$_POST["datetoattended"];
		$organizedbyattended=$_POST["organizedbyattended"];
		$durationattended=$_POST["durationattended"];
		$participantsattended=$_POST["participantsattended"];
		$speakerattended=$_POST["speakerattended"];
		$locationattended=$_POST["locationattended"];

		if(empty($participantsattended))
			{
				$participantsattended =0;
			}

		if(!empty($_FILES["certificateattended"]["tmp_name"]))
		{
		$certificateattended = addslashes(file_get_contents($_FILES["certificateattended"]["tmp_name"]));
		$image[10]=1;
		}
		else
		$image[10]=0;

		
		if($flagatten==0)
		{
		if($image[10] == 1)
		{
			$sql="INSERT INTO sttp_event_attended VALUES ($empid,'$datefromattended','$datetoattended','$organizedbyattended','$locationattended','$durationattended',$participantsattended,'$speakerattended','$eventtype','$certificateattended','$attendedname')";
		}
		else
		{
			$sql="INSERT INTO sttp_event_attended VALUES ($empid,'$datefromattended','$datetoattended','$organizedbyattended','$locationattended','$durationattended',$participantsattended,'$speakerattended','$eventtype',null,'$attendedname')";
		}
		if($result=$conn->query($sql))
				{
					header('Location:profile.php#section51');
				}else
				{
				echo mysqli_error($conn);
				}
	}
}
$flagorg=0;
if(isset($_POST["submitsttporganized"]))
{
	$organizedname=$_POST["organizedname"];
	$eventtype=$_POST["organizedeventtype"];
	$datefromorganized=$_POST["datefromorganized"];
	$datetoorganized=$_POST["datetoorganized"];
	$role=$_POST["roleorganized"];
	$participantsorganized=$_POST["participantsorganized"];
	$placeorganized=$_POST["placeorganized"];

	if(empty($participantsorganized))
	{
		$participantsorganized=0;
	}
	
	if($flagorg==0)
	{
		$sql="INSERT INTO sttp_event_organized VALUES($empid,'$eventtype','$role',$participantsorganized,'$placeorganized','$datefromorganized','$datetoorganized','$organizedname')";
			if($result=$conn->query($sql))
				{
					header('Location:profile.php#section52');
				}else
				{
				echo mysqli_error($conn);
				}
	}

}
$flagdel=0;
if(isset($_POST["submitsttpdelivered"]))
{
	$deliveredname=$_POST["deliveredname"];
	$datefromdelivered=$_POST["datefromdelivered"];
	$eventtype=$_POST["deliveredeventtype"];
	$datetodelivered=$_POST["datetodelivered"];
	$activitydescription=$_POST["activitydescription"];
	$placedelivered=$_POST["placedelivered"];
	$durationdelivered=$_POST["durationdelivered"];

	
	if($flagdel==0)
	{
		$sql="INSERT INTO sttp_event_delivered VALUES($empid,'$activitydescription','$placedelivered','$durationdelivered','$datefromdelivered','$datetodelivered','$deliveredname','$eventtype')";
			if($result=$conn->query($sql))
				{
					header('Location:profile.php#section53');
				}else
				{
				echo mysqli_error($conn);
				}
	}
}

if(isset($_POST["submitcocurricular"]))
{
	$cocurrname=$_POST["cocurrname"];
	$cocurrdescription=$_POST["cocurrdescription"];
	$cocurrdate=$_POST["cocurrdate"];
	$cocurrrole=$_POST["cocurrrole"];
	if(isset($_POST["name2"]))
		$cocurrtype=$_POST["name2"];
	else
		$cocurrtype="KJ Somaiya";

	
		$sql="INSERT INTO co_curricular VALUES ($empid,'$cocurrdescription','$cocurrdate','$cocurrrole','$cocurrname','$cocurrtype')";
			if($result=$conn->query($sql))
				{
					header('Location:profile.php#section6');
				}else
				{
				echo mysqli_error($conn);
				}
	
}

if(isset($_POST["submitextra"]))
{
	$extraname=$_POST["extraname"];
	$extradesc=$_POST["extradescription"];
	$extradate=$_POST["extradate"];
	$extrarole=$_POST["extrarole"];
	$extraplace=$_POST["extraplace"];
	
		$sql="INSERT INTO extra VALUES($empid,'$extradesc','$extrarole','$extraplace','$extradate','$extraname')";
			if($result=$conn->query($sql))
				{
					header('Location:profile.php#section7');
				}else
				{
				echo mysqli_error($conn);
				}
	
}
?>