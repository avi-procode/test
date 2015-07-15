<?php
	$num1=$_GET["x"];
	$num2=$_GET["y"];
	$num3=$num1*$num2;

?>
<html>
<head>
	<title>User Input Example #1</title>
</head>
<body>
	<h1>User Input</h1>
	<p>The user input was <?php echo $num3 ?> </p>
	<p>The two numbers are <?php echo $num1 ?> and <?php echo $num2  ?></p>
	<p><a href="input.php?x=15&y=10">What is 15 x 10</a></p>
	<p><a href="input.php?x=150&y=12">What is 150 x 12</a></p>
	
</body>
</html>