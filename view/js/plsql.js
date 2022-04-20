function validation(val){
	//value initialization
    var mid = val.mid.value;
    var sal = val.sal.value;
 var cid = val.cid.value;
	var flag = true;
// js validation
    if(mid==="")
	{
	   document.getElementById('midErr').innerHTML="Field can't be empty";
		flag = false;
	}
    if(sal==="")
	{
	   document.getElementById('salErr').innerHTML="Field can't be empty";
		flag = false;
	}
    if(cid==="")
	{
	   document.getElementById('cidErr').innerHTML="Field can't be empty";
		flag = false;
	}
	
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax1(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit1",pform.submit1.value);
        fd.append("mid",pform.mid.value);
		fd.append("sal",pform.sal.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg1").innerHTML = this.responseText; //msg id jekhane oikhane php theke ja echo hoito ota show korbe
			}
		}
		xhttp.open("POST","../controller/plsqlAction.php"); //connected with backend
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}
function ajax2(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit2",pform.submit2.value);
        fd.append("cid",pform.mid.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg2").innerHTML = this.responseText; //msg id jekhane oikhane php theke ja echo hoito ota show korbe
			}
		}
		xhttp.open("POST","../controller/plsqlAction.php"); //connected with backend
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}