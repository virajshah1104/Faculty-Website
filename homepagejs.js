
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




        function validatePersonal() {
			alert("dfgs");
		var nameflag=0;
		var genflag=0;
		var emailflag=0;
		var contactflag=0;
		var dateflag=0;
		var addressflag=0;
    	var x = document.personal.name.value;
    	var y = document.personal.email.value;
    	var z = document.personal.contact.value;
    	var a = document.personal.date.value;
    	var b = document.personal.address.value;
    	var radios = document.getElementsByName("gender");
    	var formValid = false;
    	var i = 0;
    	while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    	}
    	
   		var err1 = "* Please Enter Name";
		document.getElementById("name").innerHTML = "";
		document.getElementById("email").innerHTML = "";
    	document.getElementById("contact").innerHTML = "";
    	document.getElementById("date").innerHTML = "";    
		document.getElementById("address").innerHTML = "";
		document.getElementById("gender").innerHTML="";
		if( x==""  && y == "" && z == "" && a == "" && b== "" && formValid==false)
		{
			document.getElementById("name").innerHTML = "* Please Enter Name";
			document.getElementById("email").innerHTML = "* Please Enter Email";
    		document.getElementById("contact").innerHTML = "* Please Enter Contact Number";
    		document.getElementById("date").innerHTML = "* Please Select Birth Date";    
			document.getElementById("address").innerHTML = "* Please Enter Your Address";
			document.getElementById("n").focus();
			return false;
		}
	
		if (x == "" || x== null) {

    	nameflag=1;
		document.getElementById("name").innerHTML = "* Please Enter Name";	
		}

		if (!(/^([a-zA-Z ]{2,30})$/.test(x))) {
    	document.getElementById("name").innerHTML = "* Please Enter A Valid Name";
    	nameflag=1;
		}

		if (!formValid) 
		{

    	genflag=1;
		document.getElementById("gender").innerHTML = "* Please Select Gender";
		}
	
   
		if (y == "" || y == null) {
        emailflag=1;
    	document.getElementById("email").innerHTML = "* Please Enter Email";
		}
	
		else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(y)))
		{
		document.getElementById("email").innerHTML = "* Please Enter Valid Email";
		emailflag=1;
		}

		if (z == "" || z == null) {
		contactflag=1;
		document.getElementById("contact").innerHTML = "* Please Enter Contact Number";
    	}

		if (!(/^[7-9][0-9]{9}$/.test(z))) {
    	document.getElementById("contact").innerHTML = "* Please Enter A Valid Contact Number";
    	contactflag=1;
		}

		if (a == "" || a == null) {
        dateflag=1;
		document.getElementById("date").innerHTML = "* Please Select Birth Date";
    	}
	
    	if (b == "" || b == null) {
        addressflag=1;
		document.getElementById("address").innerHTML = "* Please Enter Your Address";
    	}

    	if (x == "" || x== null || !(/^([a-zA-Z]{2,30})$/.test(x))) {

    	document.getElementById("n").focus();
		}
		else if (!formValid) 
		{
		document.getElementById("g").focus();
		}
	
   
		else if (y == "" || y == null || !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(y))) {
        document.getElementById("e").focus();
		}
	
		else if (z == "" || z == null || !(/^[7-9][0-9]{9}$/.test(z))) {
		document.getElementById("c").focus();
    	}
  
		else if (a == "" || a == null) {
        document.getElementById("d").focus();
    	}
	
    	else if (b == "" || b == null) {
       document.getElementById("a").focus();
    	}


		if(nameflag==1 || emailflag==1 || contactflag==1 || dateflag==1 || addressflag==1 || genflag==1)
		{
		return false;
		}
	
	
	}
	
	
	function academicvalidation()
	{

		//SSC//
		var sscinst = document.academic.sscinstitute.value;
		var sscmarks = document.academic.sscmarks.value;
		var sscyear = document.academic.sscyear.value;
		
		//HSC//
		var hscinst = document.academic.hscinstitute.value;
		var hscmarks = document.academic.hscmarks.value;
		var hscyear = document.academic.hscyear.value;
		
		//Bachelor's//
		var btechinst = document.academic.btechinstitute.value;
		var btechmarks = document.academic.btechmarks.value;
		var btechyear = document.academic.btechyear.value;
		var btechdegree = document.academic.btechdegree.value;
		
		//Master's//
		var mtechinst = document.academic.mtechinstitute.value;
		var mtechmarks = document.academic.mtechmarks.value;
		var mtechyear = document.academic.mtechyear.value;
		var mtechdegree = document.academic.mtechdegree.value;
		
		//PhD//
		var phdinst = document.academic.phdinstitute.value;
		var phdmarks = document.academic.phdmarks.value;
		var phdyear = document.academic.phdyear.value;
		var phddegree = document.academic.phddegree.value;
		
		var sscflag = 0;
		var hscflag = 0;
		var btechflag = 0;
		var mtechflag = 0;
		var phdflag = 0;
		
		
		document.getElementById("ins1").innerHTML = "";
		document.academic.sscinstitute.style = "";
		/*
		document.getElementById("sscmarks1").innerHTML = "";
		document.academic.sscmarks.style = "";
		document.getElementById("ins2").innerHTML = "";
		document.academic.hscinstitute.style = "";
		document.getElementById("hscmarks1").innerHTML = "";
		document.academic.hscmarks.style = "";	
		document.getElementById("ins3").innerHTML = "";
		document.academic.btechinstitute.style = "";
		document.getElementById("btechmarks1").innerHTML = "";
		document.academic.btechmarks.style = "";
		document.getElementById("ins4").innerHTML = "";
		document.academic.mtechinstitute.style = "";
		document.getElementById("mtechmarks1").innerHTML = "";
		document.academic.mtechmarks.style = "";
		document.getElementById("ins5").innerHTML = "";
		document.academic.mtechinstitute.style = "";
		document.getElementById("phdmarks1").innerHTML = "";
		document.academic.mtechmarks.style = "";*/
		
		//SSC//
		if( (sscinst.trim() == "") && (sscmarks== "") && (hscinst.trim() == "") && (hscmarks== "") && (btechinst.trim()=="") && (btechmarks== "") && (mtechinst.trim()=="") && (mtechmarks== "") && (phdinst.trim()=="") && (phdmarks=="") )
		{
			/*document.getElementById("ins1").innerHTML = "*Enter SSC Institue Name";
			document.academic.sscinstitute.style = "border:2px solid red";
			document.getElementById("sscmarks1").innerHTML = "*Enter SSC Percentage.";
			document.academic.sscmarks.style = "border:2px solid red";
			document.getElementById("ins2").innerHTML = "*Enter HSC Institue Name";
			document.academic.hscinstitute.style = "border:2px solid red";
			document.getElementById("hscmarks1").innerHTML = "*Enter HSC Percentage.";
			document.academic.hscmarks.style = "border:2px solid red";
			document.getElementById("ins3").innerHTML = "*Enter BTech Institue Name";
			document.academic.btechinstitute.style = "border:2px solid red";
			document.getElementById("btechmarks1").innerHTML = "*Enter BTech Percentage.";
			document.academic.btechmarks.style = "border:2px solid red";
			document.getElementById("ins4").innerHTML = "*Enter MTech Institue Name";
			document.academic.mtechinstitute.style = "border:2px solid red";
			document.getElementById("mtechmarks1").innerHTML = "*Enter MTech Percentage.";
			document.academic.mtechmarks.style = "border:2px solid red";*/
			alert("Sab khaali mat chod!");
			return false;
		}
		
		if(sscinst.trim() == "")
		{
			document.getElementById("ins1").innerHTML = "*Enter SSC Institue Name";
			document.academic.sscinstitute.style = "border:2px solid red";
			sscflag = 1;	
		}
		
		/*if(sscmarks== "" || sscmarks==null)
		{
			document.getElementById("sscmarks1").innerHTML = "*Enter SSC Percentage.";
			document.academic.sscmarks	.style = "border:2px solid red";
			sscflag = 1;
		}
		
		//HSC//
		if(hscmarks== "" || hscmarks==null)
		{
			document.getElementById("hscmarks1").innerHTML = "*Enter HSC Percentage.";
			document.academic.hscmarks	.style = "border:2px solid red";
			hscflag = 1;
		}
		
		if(hscinst.trim() == "")
		{
			document.getElementById("ins2").innerHTML = "*Enter HSC Institue Name";
			document.academic.hscinstitute.style = "border:2px solid red";
			hscflag = 1;	
		}
		
		//Bachelor's//
		if(btechinst.trim()=="")
		{
			document.getElementById("ins3").innerHTML = "*Enter BTech Institue Name";
			document.academic.btechinstitute.style = "border:2px solid red";
			btechflag = 1;
		}
		
		if(btechmarks== "" || btechmarks==null)
		{
			document.getElementById("btechmarks1").innerHTML = "*Enter BTech Percentage.";
			document.academic.btechmarks.style = "border:2px solid red";
			btechflag = 1;
		}
		
		//Master's//
		if(mtechinst.trim()=="")
		{
			document.getElementById("ins4").innerHTML = "*Enter MTech Institue Name";
			document.academic.mtechinstitute.style = "border:2px solid red";
			mtechflag = 1;
		}
		
		if(mtechmarks== "" || mtechmarks==null)
		{
			document.getElementById("mtechmarks1").innerHTML = "*Enter MTech Percentage.";
			document.academic.mtechmarks.style = "border:2px solid red";
			mtechflag = 1;
		}
		
		//PhD//
		if(phdinst.trim()=="")
		{
			document.getElementById("ins5").innerHTML = "*Enter PhD Institue Name";
			document.academic.mtechinstitute.style = "border:2px solid red";
			phdflag = 1;
		}
		
		if(phdmarks=="")
		{
			document.getElementById("phdmarks1").innerHTML = "*Enter PhD Percentage.";
			document.academic.mtechmarks.style = "border:2px solid red";
			phdflag = 1;
		}*/
		
		
		if(sscflag == 1 || hscflag == 1 || btechflag == 1 || mtechflag == 1 || phdflag == 1)
			return false;
		
		
		
	}
	
	
	
