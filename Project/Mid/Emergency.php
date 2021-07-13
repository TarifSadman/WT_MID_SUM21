<?php
$emergency="";
$err_emergency="";

$hasError=False;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["emergency"])){
			$hasError = true;
			$err_emergency = "Invalid message";
		}
		else{
			$emergency = $_POST["emergency"];
		}
	if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["emergency"];
	}
}
?>

<html>
<head>
<title>Emergency</title>
</head>
<style>
body {background-color: khaki;}
</style>
<body>
<form action="" method="post">
<h3 style="color:blue;" align ="center"><b>Leave your message</b></h3>
<fieldset>
<table align = "center">
<tr>
<td>Message:</td>
<td><textarea name="emergency" value="<?php echo $emergency?>" placeholder="Write your message"></textarea></td>
<td><span><?php echo $err_emergency;?></span></td>
</tr>
<tr>
<td>To:</td>
<td><select> <option disabled selected value> --Select-- </option> <option>Users</option> <option>Station Master</option> <option>Train Operator</option></td>
</tr>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Send"></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>