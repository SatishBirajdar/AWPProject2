		
	function validateForm()
{
	var a=document.forms["reg"]["user_name"].value;
	var b=document.forms["reg"]["email_address"].value;
	var c=document.forms["reg"]["confirm_email_address"].value;
	var d=document.forms["reg"]["password"].value;
	var e=document.forms["reg"]["confirm_password"].value;

	if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
	{
	alert("All Fields must be filled out");
	return false;
	}
	if (a==null || a=="")
	{
	alert("Username must be filled out");
	return false;
	}
	if (b==null || b=="")
	{
	alert("Email Address must be filled out");
	return false;
	}
	if (c==null || c=="")
	{
	alert("Confirm Email Address must be filled out");
	return false;
	}
	if (d==null || d=="")
	{
	alert("Password must be filled out");
	return false;
	}
	if (e==null || e=="")
	{
	alert("Confirm Password must be filled out");
	return false;
	}
	if (b!==c)
	{
	alert("Email address and confirm email address didn't matched");
	return false;
	}
	if (d!==e)
	{
	alert("Password and Confirm Password didn't matched");
	return false;
	}

}
	