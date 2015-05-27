<?php
session_start();
if( empty($_POST['Opeartion']) == true || empty($_SESSION['cart']) == true)
{
    return;
}
 if( $_POST['Opeartion'] == 'RemoveFromCart')
    {
        $key = $_POST['key'];

        unset($_SESSION['cart'][$key]);

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
 
  $_SESSION['grand_total'] = isset($_SESSION['voucher']) ? $grand_total - ($grand_total*0.2) : $grand_total;
  $_SESSION['total'] = $grand_total;

    }
    if($_POST['Opeartion'] == 'EmptyCart')
    {
        $voucher = NULL;

        if(isset($_SESSION['voucher']))
        {
            $voucher = $_SESSION['voucher'];
        }

        session_destroy();
        session_start();

        $_SESSION['voucher'] = $voucher;
    }
         
 include_once './populatecart.php';
 ?>