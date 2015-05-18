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
    }
    if($_POST['Opeartion'] == 'EmptyCart')
    {
        session_destroy();
        session_start();
    }
         
 include_once './populatecart.php';
 ?>