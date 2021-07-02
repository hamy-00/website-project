 <!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="icon" href="simple.gif" type="image/gif" >
<link rel="stylesheet" href="all.css">

 <div class="header" >
  <h2>Login in first</h2>
</div> 
<div class="simple">
>advance<br><br><br>
</div>
<center>

  <label style="font-size:25pt;">  Email:       </label><br>
 <input type="text" id="email"name="email" style="width:190px;height:30px;"><br><br><br><br><br><br>
 <label style="font-size:25pt;"> Password:   </label><br>
 <input type="password" id="password" name="password" style="width:190px;height:30px;"><br><br><br><br><br>
<input type="submit" value="submit" onclick="return check();" style="width:90px;height:50px;"/> </form>
 </center>


<script>


 function check(){
 var mailformat = /\S+@\S+\.\S+/;
 
  
	var password=document.getElementById("password").value;
	var email=document.getElementById("email").value;
	







  if(email.match(mailformat))
{
 if(password.length<6)
{  alert("Password must be at least 6 characters long.");
document.getElementById("password").focus();
return false;}

else alert("ok,  succesful login!");
go();
return true;

}
else
{
alert("You have entered an invalid email address!");
document.getElementById("email").focus();

return false;
}

}
function go(){
	
	window.location.href = "php/table.html";
}
</script>

<html>