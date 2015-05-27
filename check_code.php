
<?php
session_start();
	$letter=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	$str = $_POST['code'];
	$sub_str = explode("-",$str);
	$sub_str1=$sub_str[0];
	$sub_str2=$sub_str[1];
	$sub_str3=$sub_str[2];
	$sub_len1=strlen($sub_str1);
	$sub_len2=strlen($sub_str2);

	if($sub_len1<5 || $sub_str2<5)
	{
		echo 0;
		return;
	}

	$sub_str2=$sub_str[1];
	$sub_str3=$sub_str[2];
	$num1=$sub_str1[0];
	$num2 =$sub_str1[1];
	$num3=$sub_str1[2];
	$num4=$sub_str1[3];
	$num5=$sub_str1[4];
	$num6=$sub_str2[0];
	$num7=$sub_str2[1];
	$num8=$sub_str2[2];
	$num9=$sub_str2[3];
	$num0=$sub_str2[4];
	$check_str1=$sub_str3[0];
	$check_str2=$sub_str3[1];
	$check1=(($num1*$num2+$num3)*$num4+$num5)%26;
	$check2=(($num6*$num7+$num8)*$num9+$num0)%26;
	$res_str1=$letter[$check1];
	$res_str2=$letter[$check2];

	if(($res_str1==$check_str1) && ($res_str2 == $check_str2))
	{
 
        $_SESSION['voucher'] = $_POST['code'];

        $grand_total = 0;

        $grand_total = $_SESSION['grand_total'];

        $new_val = $grand_total - ($grand_total * 0.2);

        $_SESSION['grand_total'] = $new_val;

        echo $new_val;


	}else{

		echo 0;

	}
?>

