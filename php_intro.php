<html>
	<head>
		<title>This is PHP intro</title>
		<style>
			p{
				color:blue;
				font-family:Verdana, Arial, Tahoma;
			}
		</style>
	</head>
	<body>
		<h1>Hello PHP</h1>
		
		<?php
			$num1=3;
			for($x=1;$x<=10;$x++){
				$num3=$num1*$x;
				echo "<br>The value of $num1 x $x = $num3";
			}
		?>
		
		<p>This is the first PHP Page.</p>
	</body>
</html>
