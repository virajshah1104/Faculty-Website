

// 1. PERSONAL //
function validatePersonal() 
{
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
	while ( (!formValid) && (i < radios.length) )
	{
		if (radios[i].checked) formValid = true;
			i++;        
	}

	document.getElementById("name").innerHTML = "";
	document.getElementById("email").innerHTML = "";
	document.getElementById("contact").innerHTML = "";
	document.getElementById("date").innerHTML = "";    
	document.getElementById("address").innerHTML = "";
	document.getElementById("gender").innerHTML="";
	
	document.personal.name.style = "";
	document.getElementsByName("gender").style = "";
	document.personal.email.style = "";
	document.personal.contact.style = "";
	document.personal.date.style = "";
	document.personal.address.style = "";
	
	if( x.trim() == ""  && y.trim() == "" && z.trim() == "" && a == "" && b.trim() == "" && formValid == false)
	{
		alert("Please Fill All The Compulsory Fields For Personal Details!");
		document.getElementById("n").focus();
		return false;
	}

	if (x.trim() == "") 
	{
		nameflag=1;
		document.getElementById("name").innerHTML = "* Please Enter Name";	
		document.personal.name.style = "border:2px solid red";
	}

	if (!(/^([a-zA-Z ]{2,30})$/.test(x)))
	{
		document.getElementById("name").innerHTML = "* Please Enter A Valid Name";
		nameflag=1;
		document.personal.name.style = "border:2px solid red";
	}

	if (!formValid) 
	{
		genflag=1;
		document.getElementById("gender").innerHTML = "* Please Select Gender";
		document.getElementsByName("gender").style = "border:2px solid red";
	}

	if (y.trim() == "") 
	{
		emailflag=1;
		document.getElementById("email").innerHTML = "* Please Enter Email";
		document.personal.email.style = "border:2px solid red";
	}
	else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(y)))
		 {
			document.getElementById("email").innerHTML = "* Please Enter Valid Email";
			emailflag=1;
			document.personal.email.style = "border:2px solid red";
		 }

	if (z == "") 
	{
		contactflag=1;
		document.getElementById("contact").innerHTML = "* Please Enter Contact Number";
		document.personal.contact.style = "border:2px solid red";
	}

	if (!(/^[7-9][0-9]{9}$/.test(z)))	
	{
		document.getElementById("contact").innerHTML = "* Please Enter A Valid Contact Number";
		contactflag=1;
		document.personal.contact.style = "border:2px solid red";
	}

	if (a == "") 
	{
		dateflag=1;
		document.getElementById("date").innerHTML = "* Please Select Birth Date";
		document.personal.date.style = "border:2px solid red";
	}

	if (b == "")
	{
		addressflag=1;
		document.getElementById("address").innerHTML = "* Please Enter Your Address";
		document.personal.address.style = "border:2px solid red";
	}

	if (x == "" || !(/^([a-zA-Z]{2,30})$/.test(x))) 
		document.getElementById("n").focus();
	else if (!formValid) 
			document.getElementById("g").focus();
		 else if (y == "" || y == null || !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(y)))
				document.getElementById("e").focus();		
			  else if (z == "" || z == null || !(/^[7-9][0-9]{9}$/.test(z)))
					document.getElementById("c").focus();
				   else if (a == "" || a == null)
						document.getElementById("d").focus();
						else if (b == "" || b == null)
							document.getElementById("a").focus();
	
	if(nameflag==1 || emailflag==1 || contactflag==1 || dateflag==1 || addressflag==1 || genflag==1)
		return false;
}
	
// 2. ACADEMIC //

function ac1()
{
	
	var sscinst = document.a1.sscinstitute.value;
	var sscmarks = document.a1.sscmarks.value;
	var sscyear = document.a1.sscyear.value;
	
	var sscflag = 0;
	
	document.getElementById("ins1").innerHTML = "";
	document.a1.sscinstitute.style = "";
	document.getElementById("sscmarks1").innerHTML = "";
	document.a1.sscmarks.style = "";

	if( (sscinst.trim() == "") && (sscmarks== "") )
	{
		sscflag = 1;
		alert("Please Fill All The Compulsory Details for SSC");
		return false;
	}
	
	if(sscinst.trim() == "")
	{
		document.getElementById("ins1").innerHTML = "*Enter SSC Institue Name";
		document.a1.sscinstitute.style = "border:2px solid red";
		sscflag = 1;	
	}
	
	if(sscmarks== "")
	{
		document.getElementById("sscmarks1").innerHTML = "*Enter SSC Percentage.";
		document.a1.sscmarks.style = "border:2px solid red";
		sscflag = 1;
	}
	
	if(sscinst.trim() == "")
		document.getElementById("sscinstitute_id").focus();
	else if(sscmarks== "")
			document.getElementById("sscmarks_id").focus();
		
	if(sscflag == 1)
		return false;
	
}
	
function ac2()
{
	
	var hscinst = document.a2.hscinstitute.value;
	var hscmarks = document.a2.hscmarks.value;
	
	
	var hscflag = 0;
	
	document.getElementById("ins2").innerHTML = "";
	document.a2.hscinstitute.style = "";
	document.getElementById("hscmarks1").innerHTML = "";
	document.a2.hscmarks.style = "";
	
	if( (hscinst.trim() == "") && (hscmarks== "") )
	{
		alert("Please Fill All The Compulsory Details for HSC");
		return false;
	}
	
	if(hscinst.trim() == "")
	{
		document.getElementById("ins2").innerHTML = "*Enter HSC Institue Name";
		document.a2.hscinstitute.style = "border:2px solid red";
		hscflag = 1;	
	}
	
	if(hscmarks== "")
	{
		document.getElementById("hscmarks1").innerHTML = "*Enter HSC Percentage.";
		document.a2.hscmarks.style = "border:2px solid red";
		hscflag = 1;
	}
	
	if(hscinst.trim() == "")
		document.getElementById("hscinstitute_id").focus();
	else if(hscmarks== "")
			document.getElementById("hscmarks_id").focus();
		
	if(hscflag == 1)
		return false;
}

function ac3()
{
	var btechinst = document.a3.btechinstitute.value;
	var btechmarks = document.a3.btechmarks.value;
	var btechyear = document.a3.btechyear.value;
	var btechdegree = document.a3.btechdegree.value;
	
	var btechflag = 0;
	
	document.getElementById("ins3").innerHTML = "";
	document.a3.btechinstitute.style = "";
	document.getElementById("btechmarks1").innerHTML = "";
	document.a3.btechmarks.style = "";
	
	if( (btechinst.trim()=="") && (btechmarks== "") )
	{
		btechflag = 1;
		alert("Please Fill All The Compulsory Details for BTECH");
		return false;
	}
	
	if(btechinst.trim()=="")
	{
		document.getElementById("ins3").innerHTML = "*Enter BTech Institue Name";
		document.a3.btechinstitute.style = "border:2px solid red";
		btechflag = 1;
	}
	
	if(btechmarks== "")
	{
		document.getElementById("btechmarks1").innerHTML = "*Enter BTech Percentage.";
		document.a3.btechmarks.style = "border:2px solid red";
		btechflag = 1;
	}
	
	if(btechinst.trim() == "")
		document.getElementById("btechinstitute_id").focus();
	else if(btechmarks== "")
			document.getElementById("btechmarks_id").focus();
	
	if(btechflag == 1)
		return false;
}

function ac4()
{
	var mtechinst = document.a4.mtechinstitute.value;
	var mtechmarks = document.a4.mtechmarks.value;
	var mtechyear = document.a4.mtechyear.value;
	var mtechdegree = document.a4.mtechdegree.value;
	
	var mtechflag = 0;
	
	document.getElementById("ins4").innerHTML = "";
	document.a4.mtechinstitute.style = "";
	document.getElementById("mtechmarks1").innerHTML = "";
	document.a4.mtechmarks.style = "";
	
	if( (mtechinst.trim()=="") && (mtechmarks== "") )
	{
		mtechflag = 1;
		alert("Please Fill All The Compulsory Details for MTECH");
		return false;
	}
	
	if(mtechinst.trim()=="")
	{
		document.getElementById("ins4").innerHTML = "*Enter MTech Institue Name";
		document.a4.mtechinstitute.style = "border:2px solid red";
		mtechflag = 1;
	}
	
	if(mtechmarks== "")
	{
		document.getElementById("mtechmarks1").innerHTML = "*Enter MTech Percentage.";
		document.a4.mtechmarks.style = "border:2px solid red";
		mtechflag = 1;
	}
	
	if(mtechinst.trim() == "")
		document.getElementById("mtechinstitute_id").focus();
	else if(mtechmarks== "")
			document.getElementById("mtechmarks_id").focus();
	
	if(mtechflag == 1)
		return false;
}

function ac5()
{
	var phdinst = document.a5.phdinstitute.value;
	var phdmarks = document.a5.phdmarks.value;
	
	var phdflag = 0;
	
	document.getElementById("ins5").innerHTML = "";
	document.a5.phdinstitute.style = "";
	document.getElementById("phdmarks1").innerHTML = "";
	document.a5.phdmarks.style = "";
	
	if( (phdinst.trim()=="") && (phdmarks=="") )
	{
		phdflag = 1;
		alert("Please Fill All The Compulsory Details for PhD");
		return false;
	}
	
	if(phdinst.trim()=="")
	{
		document.getElementById("ins5").innerHTML = "*Enter PhD Institue Name";
		document.a5.phdinstitute.style = "border:2px solid red";
		phdflag = 1;
	}
	
	if(phdmarks=="")
	{
		document.getElementById("phdmarks1").innerHTML = "*Enter PhD Percentage.";
		document.a5.phdmarks.style = "border:2px solid red";
		phdflag = 1;
	}
	
	if(phdinst.trim() == "")
		document.getElementById("phdinstitute_id").focus();
	else if(phdmarks== "")
			document.getElementById("phdmarks_id").focus();
	
	if(phdflag == 1)
		return false;	
}

// 3. COURSES TAUGHT //

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

function coursesvalidation()
{
	
	var course = document.coursestaught.category.value;
	var subcategory= document.coursestaught.subcategory.value;
	var year = document.coursestaught.courseyear.value;
	var sem= document.coursestaught.coursesem.value;
	
	document.coursestaught.category.style="";
	document.coursestaught.subcategory.style="";
	document.coursestaught.courseyear.style="";
	document.coursestaught.coursesem.style="";
	document.getElementById("coursetype").innerHTML="";
	document.getElementById("course").innerHTML="";
	document.getElementById("courseyear1").innerHTML="";
	document.getElementById("coursesem1").innerHTML="";
	
	var courseflag = 0;
	
	if( (course == 0) && (subcategory==0) && (year==0) &&  (sem==0) ) 
	{
		alert("Please Fill All The Compulsory Fields for Courses Taught");
		courseflag = 1;
		return false;
	}
	if(course==0)
	{
		document.getElementById("coursetype").innerHTML="*Please select course type";
		document.coursestaught.category.style="border:2px solid red";
		courseflag = 1;
	}
	if(subcategory==0)
	{
		document.getElementById("course").innerHTML="*Please select course";
		document.coursestaught.subcategory.style="border:2px solid red";
		courseflag = 1;
	}
	if(year==0)
	{
		document.getElementById("courseyear1").innerHTML="*Please select year";
		document.coursestaught.courseyear.style="border:2px solid red";
		courseflag = 1;
	}
	if(sem==0)
	{
		document.getElementById("coursesem1").innerHTML="*Please select sem";
		document.coursestaught.coursesem.style="border:2px solid red";
		courseflag = 1;
	}
	
	if(course==0)
		document.getElementById("category_id").focus();
	else if(subcategory==0)
			document.getElementById("subcategory_id").focus();
		 else if(year==0)
				document.getElementById("courseyear_id").focus();
			  else if(sem==0)
					document.getElementById("coursesem_id").focus();
	
	if( courseflag == 1)
		return false;
	
}





// 4. PUBLICATIONS // 

function validateBook() 
{
	var bookname = document.publicationbooks.bookname.value;
	var bookisbn = document.publicationbooks.bookisbn.value;
	var pubdate = document.publicationbooks.pubdate.value; 
	var bookedition = document.publicationbooks.bookedition.value;
	var book_pub_name = document.publicationbooks.book_pub_name.value;
	var book_auth_name = document.publicationbooks.book_auth_name.value;
	var book_auth_inst = document.publicationbooks.book_auth_inst.value;
	var book_coauth_name1 = document.publicationbooks.book_coauth_name1.value;
	var book_coauth_inst1 = document.publicationbooks.book_coauth_inst1.value;
	var book_coauth_name2 = document.publicationbooks.book_coauth_name2.value;
	var book_coauth_inst2 = document.publicationbooks.book_coauth_inst2.value;
	var book_coauth_name3 = document.publicationbooks.book_coauth_name3.value;
	var book_coauth_inst3 = document.publicationbooks.book_coauth_inst3.value;
	
	var pbflag = 0;
	
	document.getElementById("pubdate").innerHTML = "";
	document.getElementById("bname").innerHTML = "";
	document.getElementById("bookisbn").innerHTML = "";
	document.getElementById("book_pub_name").innerHTML = "";
	document.getElementById("book_auth_name").innerHTML = "";
	document.publicationbooks.bookname.style = "";
	document.publicationbooks.pubdate.style = "";
	document.publicationbooks.bookisbn.style = "";
	document.publicationbooks.book_pub_name.style = "";
	document.publicationbooks.book_auth_name.style = "";
	
	if(bookname.trim() == "" && bookisbn.trim() == "" && book_pub_name == "" && book_auth_name == "" && pubdate == "")
	{
		alert("Please Enter all compulsory Fields for Books");
		return false;
	}
	
	if (pubdate == "" || pubdate == null) 
	{
		pbflag=1;
		document.getElementById("pubdate").innerHTML = "* Please Enter Book Name";	
		document.publicationbooks.pubdate.style = "border:2px solid red";
	}
	
	if (bookname.trim() == "" || bookname == null) 
	{
		pbflag=1;
		document.getElementById("bname").innerHTML = "* Please Enter Book Name";	
		document.publicationbooks.bookname.style = "border:2px solid red";
	}
	if(bookisbn.trim() == "" || bookisbn == null)
	{
		pbflag=1;
		document.getElementById("bookisbn").innerHTML = "* Please Enter Book ISBN";	
		document.publicationbooks.bookisbn.style = "border:2px solid red";
	}
	if(book_pub_name == "" || book_pub_name == null)
	{
		pbflag=1;
		document.getElementById("book_pub_name").innerHTML = "* Please Enter Publisher's Name";	
		document.publicationbooks.book_pub_name.style = "border:2px solid red";
	}
	if(book_auth_name == "" || book_auth_name == null)
	{
		pbflag=1;
		document.getElementById("book_auth_name").innerHTML = "* Please Enter Author's Name";	
		document.publicationbooks.book_auth_name.style = "border:2px solid red";
	}
	
	if(book_auth_name == "" || book_auth_name == null)
		document.getElementById("book_auth_nameid").focus();
	
	if(book_pub_name == "" || book_pub_name == null)
		document.getElementById("book_pub_nameid").focus();
	
	if (pubdate == "" || pubdate == null)
		document.getElementById("pubdateid").focus();
	
	if(bookisbn.trim() == "" || bookisbn == null)
		document.getElementById("bookisbnid").focus();
	
	if (bookname.trim() == "" || bookname == null) 
		document.getElementById("booknameid").focus();
	
	if( pbflag==1)
		return false;
}

function validateJour() 
{
	var journal_name = document.publicationjournal.journal_name.value;
	var jour_date = document.publicationjournal.jour_date.value;
	var journal_auth_name = document.publicationjournal.journal_auth_name.value;
	
	var pjflag=0;
	
	document.publicationjournal.journal_name.style = "";
	document.getElementById("journal_nam").innerHTML = "";
	document.publicationjournal.jour_date.style = "";
	document.getElementById("jour_date").innerHTML = "";
	document.publicationjournal.journal_auth_name.style = "";
	document.getElementById("journal_auth_name").innerHTML = "";
	
	if(journal_name.trim() == "" && journal_auth_name.trim() == "" && jour_date == "")
	{
		alert("Please Enter all compulsory Fields for Journals");
		return false;
	}
	
	if (journal_name.trim() == "" || journal_name == null) 
	{
		pjflag=1;
		document.getElementById("journal_nam").innerHTML = "* Please Enter Journal Name";	
		document.publicationjournal.journal_name.style = "border:2px solid red";
	}
	
	if (journal_auth_name.trim() == "" || journal_auth_name == null)
	{
		pjflag=1;
		document.getElementById("journal_auth_name").innerHTML = "* Please Enter Journal's Author Name";	
		document.publicationjournal.journal_auth_name.style = "border:2px solid red";
	}
	if (jour_date == "" || jour_date == null) 
	{
		pjflag=1;
		document.getElementById("jour_date").innerHTML = "* Please Enter Journal Date";	
		document.publicationjournal.jour_date.style = "border:2px solid red";
	}
	
	if (jour_date == "" || jour_date == null) 
		document.getElementById("jour_dateid").focus();
	
	if (journal_auth_name.trim() == "" || journal_auth_name == null)
		document.getElementById("journal_auth_nameid").focus();
	
	if (journal_name.trim() == "" || journal_name == null)
		document.getElementById("journal_nameid").focus();

	if( pjflag==1)
		return false;

}

function validateConf()
{
	var conf_name = document.publicationconf.conf_name.value;
	var conf_title = document.publicationconf.conf_title.value;
	var conf_speaker = document.publicationconf.conf_speaker.value;
	var conf_date_from = document.publicationconf.conf_date_from.value;
	var conf_date_to = document.publicationconf.conf_date_to.value;
	
	var pcflag = 0;
	
	document.publicationconf.conf_name.style = "";
	document.getElementById("conf_name").innerHTML = "";
	document.publicationconf.conf_title.style = "";
	document.getElementById("conf_title").innerHTML = "";
	document.publicationconf.conf_speaker.style = "";
	document.getElementById("conf_speaker").innerHTML = "";
	document.publicationconf.conf_date_from.style = "";
	document.getElementById("conf_date_from").innerHTML = "";
	document.publicationconf.conf_date_to.style = "";
	document.getElementById("conf_date_to").innerHTML = "";
	
	if(conf_name.trim() == "" && conf_title.trim() == "" && conf_speaker.trim() == "" && conf_date_from == "" && conf_date_to == "")
	{
		alert("Please Enter all compulsory Fields for Conferences");
		return false;
	}
	if (conf_name.trim() == "" || conf_name == null) 
	{
    	pcflag=1;
		document.getElementById("conf_name").innerHTML = "Please Enter the Conference Name";
		document.publicationconf.conf_name.style = "border:2px solid red";
	}

	if (conf_title.trim() == "" || conf_title == null) 
	{
    	pcflag=1;
		document.getElementById("conf_title").innerHTML = "Please Enter the Conference Title";
		document.publicationconf.conf_title.style = "border:2px solid red";
	}	
	if (conf_speaker.trim() == "" || conf_speaker == null) 
	{
    	pcflag=1;
		document.getElementById("conf_speaker").innerHTML = "Please Enter the Conference Speaker's Name";
		document.publicationconf.conf_speaker.style = "border:2px solid red";
	}	
	if (conf_date_from == "" || conf_date_from == null)
	{
    	pcflag=1;
		document.getElementById("conf_date_from").innerHTML = "* Please Enter Conference Start Date";	
		document.publicationconf.conf_date_from.style = "border:2px solid red";
	}
	if (conf_date_to == "" || conf_date_to == null) 
	{
    	pcflag=1;
		document.getElementById("conf_date_to").innerHTML = "* Please Enter Conference End Date";	
		document.publicationconf.conf_date_to.style = "border:2px solid red";
	}
	
	if (conf_date_to == "" || conf_date_to == null)
		document.getElementById("conf_date_toid").focus();

	if (conf_date_from == "" || conf_date_from == null)
		document.getElementById("conf_date_fromid").focus();
	
	if (conf_speaker.trim() == "" || conf_speaker == null)
		document.getElementById("conf_speakerid").focus();

	if (conf_title.trim() == "" || conf_title == null)
		document.getElementById("conf_titleid").focus();

	if (conf_name.trim() == "" || conf_name == null)
		document.getElementById("conf_nameid").focus();

	if( pcflag == 1)
		return false;
}

// 5. STTP //

function validateAttended()
{
	var attendedname = document.sttpattended.attendedname.value;
	var datefromattended = document.sttpattended.datefromattended.value;
	var datetoattended = document.sttpattended.datetoattended.value;
	
	var sa = 0;
	
	document.sttpattended.attendedname.style = "";
	document.getElementById("attendedname").innerHTML = "";
	document.sttpattended.datefromattended.style = "";
	document.getElementById("datefromattended").innerHTML = "";
	document.sttpattended.datetoattended.style = "";
	document.getElementById("datetoattended").innerHTML = "";
	
	if(attendedname.trim() == "" && datefromattended == "" && datetoattended == "")
	{
		alert("Please Enter all compulsory Fields for STTP Attended");
		return false;
	}
	
	if (attendedname.trim() == "" || attendedname == null) 
	{
    	sa=1;
		document.getElementById("attendedname").innerHTML = "Please Enter the STTP Attended Name";
		document.sttpattended.attendedname.style = "border:2px solid red";
	}
	
	if (datefromattended == "" || datefromattended == null) 
	{
    	sa=1;
		document.getElementById("datefromattended").innerHTML = "* Please Enter STTP Start Date";	
		document.sttpattended.datefromattended.style = "border:2px solid red";
	}
	
	if (datetoattended == "" || datetoattended == null) 
	{
    	sa=1;
		document.getElementById("datetoattended").innerHTML = "* Please Enter STTP End Date";	
		document.sttpattended.datetoattended.style = "border:2px solid red";
	}
	if (datetoattended == "" || datetoattended == null)
		document.getElementById("datetoattendedid").focus();
	
	if (datefromattended == "" || datefromattended == null) 
		document.getElementById("datefromattendedid").focus();
	
	if (attendedname.trim() == "" || attendedname == null)
		document.getElementById("attendednameid").focus();
	
	if(sa == 1)
		return false;
}

function sttpo()
{
	var oname = document.sttporganised.organizedname.value;
	var ofrom = document.sttporganised.datefromorganized.value;
	var oto = document.sttporganised.datetoorganized.value;
	
	var so = 0;
	
	document.getElementById("organizedname").innerHTML = "";
	document.sttporganised.organizedname.style = "";
	document.getElementById("datefromorganized").innerHTML = "";
	document.sttporganised.datefromorganized.style = "";
	document.getElementById("datetoorganized").innerHTML = "";
	document.sttporganised.datetoorganized.style = "";
	
	if( (oname.trim()=="") && (ofrom=="") && (oto=="") )
	{
		alert("Please Enter all compulsory Fields for STTP Organised");
		so = 1;
		return false;
	}
	
	if(oname.trim()=="")
	{
		document.getElementById("organizedname").innerHTML = "*Enter Event's Name";
		document.sttporganised.organizedname.style = "border:2px solid red";
		so = 1;
	}
	
	if(ofrom=="")
	{
		document.getElementById("datefromorganized").innerHTML = "*Enter Event's From Date";
		document.sttporganised.datefromorganized.style = "border:2px solid red";
		so = 1;
	}
	
	if(oto=="")
	{
		document.getElementById("datetoorganized").innerHTML = "*Enter Event's to Date";
		document.sttporganised.datetoorganized.style = "border:2px solid red";
		so = 1;
	}
	
	if(oname.trim()=="")
		document.getElementById("organizedname_id").focus();
	else if(ofrom=="")
			document.getElementById("datefromorganized_id").focus();
		 else if(oto=="")
				document.getElementById("datetoorganized_id").focus();
			
	if(so == 1)
		return false;
}

function validateDeli()
{
	var deliveredname = document.sttpdelivered.deliveredname.value;
	var datefromdelivered = document.sttpdelivered.datefromdelivered.value;
	var datetodelivered = document.sttpdelivered.datetodelivered.value;
	
	var sd = 0;
	
	document.sttpdelivered.deliveredname.style = "";
	document.getElementById("deliveredname").innerHTML = "";
	document.sttpdelivered.datefromdelivered.style = "";
	document.getElementById("datefromdelivered").innerHTML = "";
	document.sttpdelivered.datetodelivered.style = "";
	document.getElementById("datetodelivered").innerHTML = "";
	
	if(deliveredname.trim() == "" && datefromdelivered == "" && datetodelivered == "")
	{
		alert("Please Enter all compulsory Fields for STTP Delivered");
		return false;
	}
	if (deliveredname.trim() == "" || deliveredname == null) 
	{
    	sd=1;
		document.getElementById("deliveredname").innerHTML = "Please Enter the STTP Delivered Name";
		document.sttpdelivered.deliveredname.style = "border:2px solid red";
	}
	
	
	if (datefromdelivered == "" || datefromdelivered == null) 
	{
    	sd=1;
		document.getElementById("datefromdelivered").innerHTML = "* Please Enter STTP Start Date";	
		document.sttpdelivered.datefromdelivered.style = "border:2px solid red";
	}
	
	if (datetodelivered == "" || datetodelivered == null) 
	{
    	sd=1;
		document.getElementById("datetodelivered").innerHTML = "* Please Enter STTP End Date";	
		document.sttpdelivered.datetodelivered.style = "border:2px solid red";
	}
	
	if (datetodelivered == "" || datetodelivered == null)
		document.getElementById("datetodeliveredid").focus();
	
	if (datefromdelivered == "" || datefromdelivered == null)
		document.getElementById("datefromdeliveredid").focus();
	
	if (deliveredname.trim() == "" || deliveredname == null)
		document.getElementById("deliverednameid").focus();
	
	if(sd == 1)
		return false;
}

// 6. CO-CURRICULAR //

function co()
{
	var cocurrname = document.co6.cocurrname.value;
	var cocurrdesc = document.co6.cocurrdescription.value;
	var cocurrrole = document.co6.cocurrrole.value;
	var cocurrdate = document.co6.cocurrdate.value;
	
	var cocurrflag = 0;
	
	document.getElementById("coname").innerHTML = "";
	document.co6.cocurrname.style = "";
	document.getElementById("codesc").innerHTML = "";
	document.co6.cocurrdescription.style = "";
	document.getElementById("corole").innerHTML = "";
	document.co6.cocurrrole.style = "";
	document.getElementById("codate").innerHTML = "";
	document.co6.cocurrdate.style = "";
	
	
	if( (cocurrname.trim()=="") && (cocurrdesc.trim()=="") && (cocurrrole.trim()=="") && (cocurrdate=="") )
	{
		alert("Please Enter all compulsory Fields for Co-Curricular Activities");
		cocurrflag = 1;
		return false;
	}
	
	if(cocurrname.trim()=="")
	{
		document.getElementById("coname").innerHTML = "*Enter the name of Co-curricular Activity's Name";
		document.co6.cocurrname.style = "border:2px solid red";
		cocurrflag = 1;
	}
	
	if(cocurrdate=="")
	{
		document.getElementById("codate").innerHTML = "*Enter Co-curricular Activity's Date";
		document.co6.cocurrdate.style = "border:2px solid red";
		cocurrflag = 1;
	}
	
	if(cocurrname.trim()=="")
		document.getElementById("cocurrname_id").focus();
	else if(cocurrdate=="")
			document.getElementById("cocurrdate_id").focus();
		
	if(cocurrflag == 1)
		return false;
}

// 7. EXTRAS //

function extra()
{
	var extraname = document.ext7.extraname.value;
	var extradate = document.ext7.extradate.value;
	
	var extraflag = 0;
	
	document.getElementById("extname").innerHTML = "";
	document.ext7.extraname.style = "";
	document.getElementById("extdate").innerHTML = "";
	document.ext7.extradate.style = "";
	
	if( (extraname.trim()=="") && (extradate=="") )
	{
		alert("Please Enter all compulsory Fields for Extra Activities");
		extraflag = 1;
		return false;
	}
	
	if(extraname.trim()=="")
	{
		document.getElementById("extname").innerHTML = "*Enter Extra Activity's Name";
		document.ext7.extraname.style = "border:2px solid red";
		extraflag = 1;
	}
	
	if(extradate=="")
	{
		document.getElementById("extdate").innerHTML = "*Enter Extra Activity's Date";
		document.ext7.extradate.style = "border:2px solid red";
		extraflag = 1;
	}
	
	if(extraname.trim()=="")
		document.getElementById("extraname1").focus();
	else if(extradate=="")
			document.getElementById("extradate1").focus();
	
	if( extraflag == 1 )
		return false;
}