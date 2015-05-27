<?php
session_start();
include_once './head.php'; 
$_SESSION['username']=$_POST['name'];
$_SESSION['email_addr']=$_POST['email'];
$_SESSION['phone_num']=$_POST['phone'];
$_SESSION['addr']=$_POST['address'];
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
<table class="table table-striped">
    <tr><th>Name</th><td><?= $_POST['name'];?></td></tr>
    <tr><th>Email</th><td><?= $_POST['email'];?></td></tr>
    <tr><th>Phone</th><td><?= $_POST['phone'];?></td></tr>
    <tr><th>Address</th><td><?= $_POST['address'];?></td></tr>
</table>
        </div>
    </div>
<?php 
$removeButtonNotRequired = true;
$showGrandTotal = true;
include_once './populatecart.php';
?>

