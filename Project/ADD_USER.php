<?php
	$eid="";
	$err_eid="";
	$name="";
	$err_name="";
	$pass="";
	$err_pass="";
	$gender="";
	$err_gender="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$nid="";
	$err_nid="";
	$dob ="";
	
	$hasError=false;

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["eid"])){
			$err_eid="*Employee ID Required";
			$hasError = true;
		}
		else if(strlen($_POST["eid"]) <=6){
			$err_eid="*Employee ID must be greater than 6";
			$hasError = true;
		}
		else{
			$eid=$_POST["eid"];
		}
		if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=3){
			$err_name="*Name Must be greater than 3";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["pass"])){
			$err_pass="*Pass Required";
			$hasError = true;
		}
		else if(strlen($_POST["pass"]) <=6){
			$err_pass="*Pass Must be greater than 6";
			$hasError = true;
		}
		else{
			$pass=$_POST["pass"];
		}
		if(!isset($_POST["gender"])){
			$err_gender="*Gender Required";
			$hasError = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["email"])){
			$err_email="*Email Required";
			$hasError = true;
		}
		else if(strlen($_POST["email"]) <=10){
			$err_email="*___@email.com";
			$hasError = true;
		}
		else{
			$email = $_POST["email"];
		}
		if(!isset($_POST["phone"])){
			$err_phone="*Phone Required";
			$hasError = true;
		}
		else if(strlen($_POST["phone"]) <=10){
			$err_phone="*Must be a valid phone number";
			$hasError = true;
		}
		else{
			$phone = $_POST["phone"];
		}
		if(empty($_POST["address"])){
			$err_address="*Address Required";
			$hasError = true;
		}
		else{
			$address = $_POST["address"];
		}
		if(!isset($_POST["nid"])){
			$err_nid="*NID Required";
			$hasError = true;
		}
		else if(strlen($_POST["nid"]) <=8){
			$err_nid="*Must be a valid nid number";
			$hasError = true;
		}
		else{
			$nid = $_POST["nid"];
		}
		
		if(!$hasError){
			echo $_POST["eid"]."<br>";
			echo $_POST["name"]."<br>";
			echo $_POST["pass"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["nid"]."<br>";
			echo $_POST["address"]."<br>";
		}
		
		
	}
?>
<html>
    <head></head>
    <body>
		<h1 align="center">Add User</h1>
        <fieldset>
		<center>
			<form action="" method="post">
            <table>            
                <tr>
					<td>Employee ID</td>
					<td><input type="text" name="eid" value="<?php echo $eid;?>" placeholder="eid"></td>
					<td><span><?php echo $err_eid;?></span></td>
				</tr> 
				<tr>
					<td>Name </td>
					<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
					<td><span><?php echo $err_name;?></span></td>
				</tr>              
                <tr>
						<td>password </td>
						<td><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="pass"></td>
						<td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
						<td>Gender </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
						<td>Email </td>
						<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
						<td>Phone </td>
						<td><input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span><?php echo $err_phone;?></span></td>
				</tr>
				<tr>
                <td>DOB</td>
                    <td> <input type="text" value ="<?php echo $dob;?>" placeholder="DOB"> </td>
                </tr>
				<tr>
                <td>Age</td>
                    <td> <input type="text" placeholder="Age"> </td>
                </tr>
				<tr>
                <td>Blood Group</td>
                    <td> <input type="text" placeholder="Blood Group"> </td>
                </tr>
				<tr>
                <td>Nationality</td>
                    <td> <input type="text" placeholder="Nationality"> </td>
                </tr>
                <tr>
						<td>NID: </td>
						<td><input type="text" name="nid" value="<?php echo $nid;?>" placeholder="nid"></td>
						<td><span><?php echo $err_nid;?></span></td>
				</tr>
				<tr>
						<td>Address: </td>
						<td>
						<textarea name="address"><?php echo $address;?></textarea>
						</td>
						<td><span><?php echo $err_address;?></span></td>
				</tr>                
                <tr>
						<td align="right" colspan="2"><input type="submit" value="Submit"></td>
				</tr>
                </table>
				</center>
        </fieldset>
        </form>
    </body>
</html> 