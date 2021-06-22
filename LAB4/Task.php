<?php
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$confirmpassword="";
	$err_confirmpassword="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$birthdate="";
	$err_birthdate="";
	$gender="";
	$err_gender="";
	$heardfrom="";
	$err_heardfrom="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	
	            if($_SERVER['REQUEST_METHOD']== "POST")
				{
                if(empty($_POST["name"]))
				{
				$hasError = true;
                $err_name="No name added";
                }
                else
				{
				$name=$_POST["name"];
				}
				if(empty($_POST["username"]))
				{
				$hasError = true;
				$err_username="No username added";
				}
				else if(strlen($_POST["username"])<6)
				{
				$hasError = true;
				$err_username="*Username must be of => 6 characters";
				}
                else if (strpos($_POST["username"]," "))
				{
				$hasError = true;
                $err_username="Invalid space used";
                }
				else
				{	
				$username=$_POST["username"];
				}
				if(empty($_POST["password"]))
				{
				$hasError = true;
				$err_username="No password added";
				}
				else if(htmlspecialchars($_POST["password"]))
		 		{
				$hasError = true;
				$err_password="Invalid HTML special characters used";
				}
		 		else if(strlen($_POST["password"])<8) 
				{
				$hasError = true;
		 		$err_password="Password must contain =>8 characters";
		 		}
		 		else if(!strpos($_POST["password"],"#&&?"))
		 		{	
			    $err_password="Password must contain at least a special character";
			    }
				else if(!is_numeric($_POST["password"]))
				{
				$err_password="Password must contain =>1 numeric values";
				}
				else if(!ctype_upper($_POST["Password"]))
				{
				$err_password="Password must contain =>1 upper case values";
				}
				else if(!ctype_lower($_POST["password"]))
				{
				$err_password="Password must contain =>1 lower case values";
                }
				else
				{
				$password=$_POST["password"];
				}
				if(empty($_POST["confirmpassword"]))
				{
				$hasError = true;
				$err_password="Retype password";
				}
				else if(strcmp ($_POST["password"],$_POST["confirmpassword"])==false)
				$hasError = true;
			    $err_confirmpassword="Passwords aren't matched"
				else
				{
				$confirmpassword="$_POST["confirmpassword"]
				}
?>