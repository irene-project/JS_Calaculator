<!DOCTYPE html>
<html>
<head>
	<title>Javascript Calculator</title>
    <link rel="stylesheet" type="text/css" href="calc.css">
    <!-- <script type="text/javascript" src="calc.js"></script> -->
    <!-- bootstrap, jquery library, javascript  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<h1 class="name1">Electronic Calculator</h1>

	<div id="calculator">
		<form>
		  <input type="text" name="display" id="display" disabled>
			<br>
			<input type="button" value="C" id="keys" onclick="addtoscreen('c')" >
			<input type="button" value="CE" id="keys" onclick="backspace()" >
			<input type="button" value="x^2" id="keys" onclick="power()" >
			<!-- x<sup>2</sup> to give as power like x square -->
			<input type="button" value="+" id="keys" onclick="addtoscreen('+')" >
			<br>

			<input type="button" value="7" id="keys" onclick="addtoscreen('7')" >
			<input type="button" value="8" id="keys" onclick="addtoscreen('8')" >
			<input type="button" value="9" id="keys" onclick="addtoscreen('9')" >
			<input type="button" value="-" id="keys" onclick="addtoscreen('-')" >
			<br>

			<input type="button" value="4" id="keys" onclick="addtoscreen('4')" >
			<input type="button" value="5" id="keys" onclick="addtoscreen('5')" >
			<input type="button" value="6" id="keys" onclick="addtoscreen('6')" >
			<input type="button" value="*" id="keys" onclick="addtoscreen('*')" >
			<br>

			<input type="button" value="1" id="keys" onclick="addtoscreen('1')" >
			<input type="button" value="2" id="keys" onclick="addtoscreen('2')" >
			<input type="button" value="3" id="keys" onclick="addtoscreen('3')" >
			<input type="button" value="/" id="keys" onclick="addtoscreen('/')" >
			<br>

			<input type="button" value="0" id="keys" onclick="addtoscreen('0')" >
			<input type="button" value="." id="keys" onclick="addtoscreen('.')" >
			<input type="button" value="=" id="equal" onclick="answer()" >
		</form>
	<h3 class="name2">e-Calculator</h3>
		
	</div>
</body>
<script type="text/javascript" src="calc.js"></script>
</html>