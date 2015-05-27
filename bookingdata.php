<?php
session_start();
$film = $_POST['film'];
$day = $_POST['day'];
$time = $_POST['time'];
$sa = $_POST['sa'];
$sp = $_POST['sp'];
$sc = $_POST['sc'];
$fa = $_POST['fa'];
$fc = $_POST['fc'];
$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$b3 = $_POST['b3'];
$sa_price = $_POST['sa_price'];
$sp_price = $_POST['sp_price'];
$sc_price = $_POST['sc_price'];
$fa_price = $_POST['fa_price'];
$fc_price = $_POST['fc_price'];
$b1_price = $_POST['b1_price'];
$b2_price = $_POST['b2_price'];
$b3_price = $_POST['b3_price'];
$total = $_POST['total'];

if( !isset($_SESSION['cart']) )
{
	$_SESSION['cart'] = array();
}

  $grand_total = 0;

  foreach($_SESSION as $key => $value)
  {
  	  if(is_array($value))
  	  {
  		foreach($value as $v)
  		{
  			$grand_total += $v[18];
  		}

  	}
  }
 

  $_SESSION['grand_total'] = isset($_SESSION['voucher']) ? ($grand_total+$total) - (($grand_total+$total)*0.2) : $grand_total+$total;
  $_SESSION['total'] = $grand_total+$total;

$count = count($_SESSION['cart']);

$_SESSION['cart'][$count] = array($day, $time, $sa, $sa_price, $sp, $sp_price, $sc, $sc_price, $fa, $fa_price,
    $fc, $fc_price, $b1, $b1_price, $b2, $b2_price, $b3, $b3_price, $total, $film);

echo 'Added succesfully';