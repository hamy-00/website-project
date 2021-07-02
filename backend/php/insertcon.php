<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../all.css">
<title>Database</title>
<div class="header" >
  <h2>database content</h2>
</div> 
<div class="simple">
>database<br><br><br>
</div>

</head>
<body>
</body>

</html><?php include("db_connect.php");
  
	switch($_POST ['proc']){
		
	case 'Add': add_fun();break;
	
	case 'Update': update_fun();break;
	
	case 'Display': Display_fun();break;
	
	case 'delete': delete_fun();break;
	
	
	case 'Display_all': all();break;
	

}
function add_fun(){
global $link;
include 'db_connect.php';

$UserID = mysqli_real_escape_string($link, $_REQUEST['u_ID']);
$UserName =mysqli_real_escape_string($link, $_REQUEST['u_Name']);

$UserAge =mysqli_real_escape_string($link, $_REQUEST['u_Age']);

$sql = "INSERT INTO users (UserID, UserName,UserAge) VALUES ($UserID, '$UserName',$UserAge)";

if(mysqli_query($link, $sql)){
	
	echo "reacords added successfully.";
}else {
	
	echo "laptop already in the database";



}
function update_fun(){
	
	global $link;
include 'db_connect.php';

$UserID = mysqli_real_escape_string($link, $_REQUEST['u_ID']);
$UserName =mysqli_real_escape_string($link, $_REQUEST['u_Name']);

$UserAge =mysqli_real_escape_string($link, $_REQUEST['u_Age']);

  $sql = "UPDATE users SET 
       `UserAge` = $UserAge, 
      
       `UserName` = '$UserName'
	   
       where `UserID` = $UserID";
       
	
	
	
if(mysqli_query($link, $sql)){
	
	echo "reacords updated successfully.";
}
else {
	
	echo "error: could not able to excute $sql. " .mysqli_error($link);
	
}	
	
	
}


}
function delete_fun(){
	
	
	
	global $link;
include 'db_connect.php';

$UserID = mysqli_real_escape_string($link, $_REQUEST['u_ID']);
$UserName =mysqli_real_escape_string($link, $_REQUEST['u_Name']);

$UserAge =mysqli_real_escape_string($link, $_REQUEST['u_Age']);

	
	$sql = "Delete from users where UserID=$UserID";
	
if(mysqli_query($link, $sql)){
	
	echo "reacords Deleted successfully.";
}
else {
	
	echo "error: could not able to excute $sql. " .mysqli_error($link);
	
}	

	
}
function Display_fun(){
	
	
	global $link;
include 'db_connect.php';

$UserID = mysqli_real_escape_string($link, $_REQUEST['u_ID']);
$UserName =mysqli_real_escape_string($link, $_REQUEST['u_Name']);
$UserEmail =mysqli_real_escape_string($link, $_REQUEST['u_Email']);
$UserAge =mysqli_real_escape_string($link, $_REQUEST['u_Age']);

	
	
$sql = "SELECT * FROM users where UserID=$UserID ";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "     name: " . $row["UserName"]. "       email: " . $row["UserEmail"]. "    Age: " . $row["UserAge"]. "<br>";
  }
  
	
if(mysqli_query($link, $sql)){
	
	echo "<br><br>reacords displayed successfully.";
}
else {
	
	echo "error: could not able to excute $sql. " .mysqli_error($link);
	
}	

	



}	





}

function all(){
	
	
	
	global $link;
include 'db_connect.php';

$UserID = mysqli_real_escape_string($link, $_REQUEST['u_ID']);
$UserName =mysqli_real_escape_string($link, $_REQUEST['u_Name']);

$UserAge =mysqli_real_escape_string($link, $_REQUEST['u_Age']);

	
	
$sql = "SELECT * FROM users  ";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<b>ID=</b> " . $row["UserID"] .    "  ||       <b>Laptop name:</b>    " . $row["UserName"]. "  ||               <b>Price:</b> " . $row["UserAge"]. "<br><br>";
  }
  
	
if(mysqli_query($link, $sql)){
	
	echo "<br><br>reacords displayed successfully.";
}
else {
	
	echo "error: could not able to excute $sql. " .mysqli_error($link);
	
}	

	



}	




	
}
?>