<?php
$search="";
$err_search="";

$hasError=False;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["search"])){
			$hasError = true;
			$err_search = "Invalid message";
		}
		else{
			$search = $_POST["search"];
		}
	if(!$hasError){
			echo "<h1>Search succeeded</h1>";
			echo $_POST["search"];
	}
}
?>


<html>
<head>
<title>Search User</title>
</head>
<body>
<h1 align ="center">Search passenger</h1>
<fieldset>
<form action="" method="post">
<table align = "center">
<tr>
<td>User ID:</td>
<td><input type="text" name="search" value="<?php echo $search?>" placeholder="Insert ID"></textarea></td>
<td><span><?php echo $err_search;?></span></td>
</tr>
<tr>
<td colspan="2" align="right"> <input type="submit" value="Search"></td>
</tr>
</table>
</form>
</fieldset>
</body>
</html>