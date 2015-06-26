<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once("DatabaseUtil.php");
//echo 'staring<br>';
$DBobj = new DatabaseUtil();
$DBobj->connectToDB();

//searching from table Coupon
$DBobj->searchFrom_Coupon($_POST['SearchKey']);

?>
<form action="MainForm.php" method="get" accept-charset="UTF-8" align="center">
<input action="MainForm.php" type="submit" name="submit" value="BACK" />
</form>