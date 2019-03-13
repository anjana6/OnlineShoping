<?php 
if(isset($_POST['submit'])){
    $FullName = $_POST['FullName'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $UserName = $_POST['UserName'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    
    $connection = mysqli_connect('localhost','root','','createaccount');
    
    
    $query = "INSERT INTO userdata(FullName,PhoneNumber,UserName,Email,Password)";
    $query .= "VALUES ('$FullName','$PhoneNumber','$UserName','$Email','$Password')";
    $result =  mysqli_query($connection,$query);
    
    if(!$result){
        die('Query Failed'.mysql_error());
    }


    
}




?>


<!Doctype html>
<html>
<head>
	<title>Dressmore CreateAccount system</title>
	<link rel="stylesheet"  href="CreateAccount.css">
    <style>
        
    </style>
    
    
</head>
<body background = " photo\Background\2.jpg";>
    
    
    <div class="header">
	
        <ul id="menu">
			<li><a  href="index.php">Home</a></li>
			<li><a href="Categery.html">Categories</a></li>
			<li><a href="CreateAccount.php">Create Account</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</div>
	<div class="CreateAccount">
	<form action="CreateAccount.php" method="post">
		
			<h1>Create Account</h1>
		<p>FullName <br><input type="text" name="FullName" placeholder="FullName"></p>
		<br><br>
		<p>Phone Number<br><input type="text" name="PhoneNumber" placeholder="Phone Number"></p>
		<br><br>
		<P>Email<br><input type="email" name="Email" placeholder="Email"></P>
        <br><br>
        <p>UserName<br><input type="text" name="UserName" placeholder="UserName"></p>
		<br><br>
		<P>Password<br><input type="password" name="Password" placeholder="Password"></P>
		<br><br>
		<input type="submit" name="submit" value="Login">
        
	
	</form>
</div>
	

</body>
	
</html>
