<?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $connection = mysqli_connect('localhost','root','','createaccount');
    
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
                    
    
    
    $query = "SELECT * FROM userdata WHERE UserName = '{$username}' AND Password ='{$password}' ";
    
    $result =  mysqli_query($connection,$query);
    
   if($result){
       
       
           echo '<script>alert("successfully!")</script>';
           echo '<script>window.location = "Cart.php"</script>';
      
        
    }else{
       die("Query Failed".mysqli_error($connection));
   }
    
    
        

        
}

?>






<!Doctype html>
<html>
<head>
	<title>Dressmore Login system</title>
	<style >
	.login{
		width: 320px;
		height: 420px;
		background: #000;
		color: white;
		top: 20%;
		left: 40%;
		position: absolute;
		padding: 20px 70px;
		box-sizing: border-box;
	}

	h1{
		text-align: center;
	}

	.login input[type="text"], input[type="Password"]{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
	.login button[type="submit"]{
	text-align: center;
	border: none;
	height: 30px;
	width: 80px;
	background: #fb2525;
	color: #fff;
	border-radius: 10px;
	}

	.login button[type="submit"]:hover{
	cursor: pointer;
	background: green;
	color: #000;
}
	.login button[type="submit"]:active{
		border-color: #111;
	}

		

	</style>
	
</head>
<body id="main" background = " photo\Background\1.png";
>
    
    
	<div class="login">
		<form action="Login.php" method="post">
		
			<h1>Login Here</h1>
		<p>UserName</p>
        <input type="text" name="username" placeholder="UserName">
        <br><br>
		<p>Password</p>
		<input type="Password" name="password" placeholder="Password">
		<br><br>
		<button type="submit" name="submit">login</button>
	
	</form>
</div>
	

</body>
	
</html>
