<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="scripts/hints.js">

</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>