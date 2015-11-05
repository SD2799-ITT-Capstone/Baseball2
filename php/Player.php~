<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
include('/php/PlayerPHP.php');
include('header.php');
?>



<script type="text/javascript"> 

function getPlayer(val)
{
	
	var str = val.split("#")[1];
	$.ajax(
   {
     type: 'post',
     url: '/php/PlayerAjax.php',
     data: 
	 {
       aPlayerID:str
     },
     success: function (response) 
	 {
       document.getElementById("PHPGenerated").innerHTML=response; 
     }
   });
   
	
}





</script>
</head>

<body>

<div id="header">
	<h1>Player Stats</h1>
</div>
<br>
<?php
include("navbar.php");
?>


<br>
<div id="section">
	<form name="PlayerForm" id="PlayerForm" action="Player.php" method="Post">
		First name: <input type="text" name="PlayerFirstnameText" onkeyup="ShowHint(this.value, 'nameFirst')" placeholder="first name">
		Last name: <input type="text" name="PlayerLastname">
		<input name="submit" type="submit" value="Find Player">
	</form>
</div>

<div name="phpError" id="phpError"><span></span><span id="nameFirstTxtHint"></span><?php echo($error); ?></div>
<div name="PHPGenerated" id ="PHPGenerated">
<?php echo($playerTable) ?>
<?php echo($playerInfo) ?>
<?php echo($battingTable) ?>
<?php echo($fieldingTable) ?>
<?php echo($pitchingTable) ?>
</div>
<br>

</body>
</html>
