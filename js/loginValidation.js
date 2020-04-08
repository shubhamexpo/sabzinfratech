function validate()
			{
				if(document.getElementById("email").value=="")
				{
					//alert("Enter Username");
					document.getElementById("email").focus();
					document.getElementById("email_error")
					.innerHTML="Email field is required";
					return false;
				}else
				{
					var email=document.getElementById("email").value;
					var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})+$/ ;
					if(!filter.test(email))
					{
						document.getElementById("email").focus();
						document.getElementById("email_error")
						.innerHTML="Please Enter Valid Email";
						return false;
					}
				}
				if(document.getElementById("pass").value=="")
				{
					document.getElementById("pass").focus();
					document.getElementById("pass_error").innerHTML="Please Enter Password";
					return false;
				}
			}
			function checkTextBox(x)
			{
				if(x.value!="")
				{
					document.getElementById(x.id+"_error").innerHTML="";
				}
			}