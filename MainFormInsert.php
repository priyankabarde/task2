<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once("DatabaseUtil.php");
$DBobj = new DatabaseUtil();
$DBobj->connectToDB();

//inserting valure in table Coupon

$DBobj->insertTo_Coupon($_POST['couponName'],$_POST['couponValue']);
echo 'Status of DB after insertion: <br>';
$DBobj->readFrom_Coupon();
?>
<form action="MainForm.php" method="get" accept-charset="UTF-8" align="center">
<input type="submit" name="submit" value="BACK" />
</form>