<?php
	$priv = array(-1,-1,-1,-1);
	$empid=$_SESSION["Emp_Id"];
	$conn = mysqli_connect("localhost","root","admin","Faculty") or die("Connection failed".mysqli_connect_error());
	$sql = "SELECT * FROM login where Emp_Id=$empid";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	if($row["P1"] == 'TRUE')
		$priv[0] = 1;
	if($row["P2"] == 'TRUE')
		$priv[1] = 1;
	if($row["P3"] == 'TRUE')
		$priv[2] = 1;
	if($row["P4"] == 'TRUE')
		$priv[3] = 1;
	/*
	0 = Profile & Forms
	1 = Edit Privelleges
	2 = Add MEMBER
	3 = Report Generation
	*/
	echo "<style>"." #section0,#section21,#section22,#section23,#section3,#section31,#section32,#section33,#section34,#section35,#section36,#section37{ display:none!important; visibility:hidden!important; } "."</style>";
	
	if($priv[0]!=-1)
	{
		echo "<style>"." #section0{ display:block!important; visibility:visible!important; } "."</style>";
		echo "<style>"." #section3,#section31,#section32,#section33,#section34,#section35,#section36,#section37{ display:block!important; visibility:visible!important; } "."</style>";
	}

	if($priv[1]!=-1 )
	{
		echo "<style>"." #section21{ display:block!important; visibility:visible!important; } "."</style>";
	}

	if($priv[2]!=-1)
	{
		echo "<style>"." #section22{ display:block!important; visibility:visible!important; } "."</style>";
	}
	
	if($priv[3]!=-1)
	{
		echo "<style>"." #section23{ display:block!important; visibility:visible!important; } "."</style>";
	}

?>