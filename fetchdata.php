<?php
$locations = array(
				'Charbagh' => 0,
				'Indira Nagar'=>10,
				'BBD'=> 30,
				'Barabanki'=>60,
				'Basti'=>150,
				'Gorakhpur'=>210,
				'Faizabad'=>100
			);

$pickup = $_REQUEST['pickup'];
$drop = $_REQUEST['drop'];
// if ($pickup==$drop) {
//  echo '<script>alert("same location not allowed")</script>';
//  return false;


$cabtype = $_REQUEST['cabtype'];
$luggage = $_REQUEST['luggage'];

$fare = 0;
$dis =  abs(($locations[$pickup]) -  ($locations[$drop]));
$originaldis=$dis;
switch ($cabtype) {
	case 'CedMicro':
	if ($dis<=10) {
$fare =$dis*13.5;
$fare+=50;
		break;		# code...
	}
	elseif ($dis>10&&$dis<=60) {
		$dis=$dis-10;
		$fare=135+($dis*12);
		$fare+=50;
		break;
	}
	elseif ($dis>=60&&$dis<=160) {
		$dis=$dis-60;
		$fare=735+($dis*10.20);
		$fare+=50;
break;
	}
	else
	{
		$dis=$dis-160;
		$fare=1755+($dis*8.50);
		$fare+=50;
break;
	}
	case 'CedMini':
	
	if($dis<=10) {
$fare = $dis*14.5;
$fare+=150;
		break;		# code...
	}
	elseif ($dis>10&&$dis<=60) {
		$dis=$dis-10;
		$fare=145+($dis*13);
		$fare+=150;
		break;
	}
	elseif ($dis>=60&&$dis<=160) {
		$dis=$dis-60;
		$fare=795+($dis*11.20);
		$fare+=150;
break;
	}
	else
	{
		$dis=$dis-160;
		$fare=1915+($dis*9.50);
		$fare+=150;
break;
}
	case 'CedRoyal':
	if($dis<=10) {
$fare =$dis*15.5;
$fare+=200;
		break;		# code...
	}
	elseif($dis>10&&$dis<=60) {
		$dis=$dis-10;
		$fare=155+($dis*14);
		$fare+=200;
		break;
	}
	elseif ($dis>=60&&$dis<=160) {
		$dis=$dis-60;
		$fare=855+($dis*12.20);
		$fare+=200;
break;
	}
	else
	{
		$dis=$dis-160;
		$fare=2075+($dis*10.50);
		$fare+=200;
break;
}
		case 'CedSUV':
		if($dis<=10) {
$fare =$dis*16.5;
$fare+=250;
		break;		# code...
	}
	elseif ($dis>10&&$dis<=60) {
		$dis=$dis-10;
		$fare=165+($dis*15);
		$fare+=250;
		break;
	}
	elseif ($dis>=60&&$dis<=160) {
		$dis=$dis-60;
		$fare=915+($dis*13.20);
		$fare+=250;
break;
	}
	else
	{
		$dis=$dis-160;
		$fare=2235+($dis*11.50);
		$fare+=250;
break;
}
		# code...
		break;
	default:
		# code...
		break;
}
if($luggage<=10 && $luggage!=0)
{
	if ($cabtype == 'CedSUV') {
$fare+=100;
			}
			else
			{
	$fare+=50;
}
}
elseif ($luggage>10 && $luggage<=20) {
	if ($cabtype== 'CedSUV') {
$fare+=200;
			}
			else
			{
	$fare+=100;
}
}
elseif ($luggage>20) {
	if ($cabtype== 'CedSUV') {
$fare+=400;
			}
			else
			{
	$fare+=200;
}
}
else
{
	$fare+=0;
}


echo '<p> Your Total Fare : <strong>Rs. '.$fare.'</strong></p>';
echo '<p> Your Total Distance : <strong> '.$originaldis.' km</strong></p>';
echo '<p> Your CAB Type : <strong> '.$cabtype.'</strong></p>';

?>