<?php
include('header.php');


include('/php/UserCreatePHP.php'); // Includes Login Script




if(isset($_SESSION['login_user'])){
header("location: /php/LoginSuccess.php");
}
?>

</head>
<body>

<div id="header">
	<h1>Create User</h1>
</div>
<br>
<?php
include("navbar.php");
?>

<div name="section" id="section">
<h1>Test user: bwood134 Password: Bwood134$</h1>
<h2>Create User Form</h2>

<form action="" method="post">
<label>Firstname :</label>
<input id="firstname" name="firstname" placeholder="firstname" type="text">
<br>
<label>Lastname :</label>
<input id="lastname" name="lastname" placeholder="lastname" type="text">
<br>
<label>UserName :</label>
<input id="username" name="username" placeholder="username" type="text">
<br>
<label>E-mail :</label>
<input id="email" name="email" placeholder="E-mail" type="text">
<br>
<label>Password :</label>
<input id="password" name="password" type="password">
<br>
<label>Verify Password :</label>
<input id="vpassword" name="vpassword" type="password">
<br>
<input name="submit" type="submit" value=" Login ">
<span id = "error" name = "error"><?php echo $error; ?></span>
</form>
</div>

</body>
</html>