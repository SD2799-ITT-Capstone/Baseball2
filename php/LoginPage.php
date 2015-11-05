<?php
include('header.php');

include('/php/Login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: LoginSuccess.php");
}
?>

	<title>Login Form in PHP with Session</title>
	
</head>
<body>

<div id="header">
<h1>Login Page</h1>
</div>
<br>
<?php
include("navbar.php");
?>
</div>
<div id="section" name="section">
	<h1> Test user: bwood134 Password: Bwood134$</h1>
	<h2>Login Form</h2>
	<form action="" method="post">
		<label>UserName :</label>
		<input id="name" name="username" placeholder="username" type="text">
		<label>Password :</label>
		<input id="password" name="password" type="password">
		<input name="submit" type="submit" value=" Login ">
		<span><?php echo $error; ?></span>
	</form>
</div>


</body>
</html>