<?php


$time=8;
$b=false;
$c="Indore";
$msg="";
switch($time){
	case 7:
	case 8:
	case 9:
	case 10:
	case 11:
	case 12:
		$msg="Good Morning";
		if($time<10){
			echo "wow<br>";
		}
		break;
	case 13:
		$msg="Good Afternoon";
		break;
	default;
		$msg="Good Night";
}

echo $msg;











/*
if($c=="Indore" && (!$b OR $time==21 ) ){
	echo "Good Afternoon";
}else{
	echo "Good Morning";
}
*/

/*
	$a="Hello";
	$b='world';
	$c= $a." ".$b."<br> It is a beautiful".$b ;
	$d =$a.' '.$b.' <br>It\'s a beautiful '.$b;
	echo $c."<br>".$d;
*/
