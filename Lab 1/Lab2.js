window.onload = function()
{
    

var formHandle = document.forms[0];
	
	console.log(formHandle);
	console.log(formHandle.fname);
	console.log(formHandle.fname.value);
	
	formHandle.onsubmit = processForm;
	function processForm()
	{
		
		var nameValue = document.getElementById("fname");
		
		
 	 var nameValue = document.forms[0].fname.value;
        var lnameValue = document.forms[0].lname.value;
		var emailvalue = document.forms[0].email.value;
       var radiobtn = document.getElementById("gender");
        var drpdwnlist = document.getElementById("department");
        var dlist = drpdwnlist.options[drpdwnlist.selectedIndex].value;
        

	 console.log(emailvalue);
		nameMsg = document.getElementById("nameErr");
		var uploadFile = document.getElementById("myFile1");
		
				
		if(nameValue === "" || nameValue === null)
			{
				
				nameErr.style.background = "red";
				nameErr.innerHTML = "Please enter your firstname";
				nameErr.style.color = "white";
				nameErr.focus();
				 document.forms[0].fname.onblur = endHelp  ;
				function endHelp()
				{
					nameErr.innerHTML = "";
				}
			return false;
			}
      		
		else if(lnameValue === "" || lnameValue === null)
			{
				
				nameErr.style.background = "red";
				nameErr.innerHTML = "Please enter your lastname";
				nameErr.style.color = "white";
				nameErr.focus();
				 document.forms[0].lname.onblur = endHelp2  ;
				function endHelp2()
				{
					nameErr.innerHTML = "";
				}
			return false;
			}
		 else if(emailvalue === "" || emailvalue === null)
			{
				
				nameErr.style.background = "red";
				nameErr.innerHTML = "Please enter your email";
				nameErr.style.color = "white";
				document.forms[0].email.onblur = endHelp3;
				function endHelp3()
				{
					nameErr.innerHTML = "";
				}
				
			return false;
			}
		 else if((formHandle.gender[0].checked == false) && (formHandle.gender[1].checked == false))
			{
				
				nameErr.style.background = "red";
				nameErr.innerHTML = "Please select your gender";
				nameErr.style.color = "white";
				radiobtn.onblur = endHelp4;
				function endHelp4()
				{
					nameErr.innerHTML = "";
				}
				
			return false;
			}
        else if(dlist =="select")
            {
                nameErr.style.background = "red";
				nameErr.innerHTML = "Please select any one department";
				nameErr.style.color = "white";
				drpdwnlist.onblur = endHelp5;
				function endHelp5()
				{
					nameErr.innerHTML = "";
				}
				
			return false;
            }
		
		else
			{
				nameErr.innerHTML = "Your message has been sent.";
				nameErr.style.background = "green";
				nameErr.style.color = "white";
                return true;
				
		}	        
						
								
	}

}