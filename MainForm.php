<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
//TO DO
//Handling error condiions and default cases

?>
<html>
<head>
  <script>
      
      function validateFormSearch()
      {
          var x = document.forms["search"]["SearchKey"].value;
            if (x == null || x == "") {
                alert("Name must be filled out");
                return false;
            }
      }
      function validateFormInsert()
      {
          var x = document.forms["insert"]["couponName"].value;
          var y = document.forms["insert"]["couponValue"].value;
            if (x == null || x == "" || y == null || y == "") {
                alert("Both Name and Value must be filled out");
                return false;
            }
     }
     
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1345.38">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica}
  </style>
</head>
<body>
    <br><br><br>
    <!-- this form is for searching in Coupon table -->
    <form id="Search" name="search" action="MainFormSearch.php" onsubmit="return validateFormSearch()" method="post" accept-charset="UTF-8" align="center">
        <label>Coupon Name :</label>
        <input type="text" name="SearchKey" id="SearchKey" maxlength="50" /><br>
        <input type="submit" name="submit" value="Search" />
    </form>
    <br><br><br><br><br><br>
    <!-- this form is for inserting into in Coupon table -->
    <form id ="Insert" name="insert" action="MainFormInsert.php" onsubmit="return validateFormInsert()" method="post" accept-charset="UTF-8" align="center">
        <label>Insert values:</label><br>
        <label>Coupon ID:</label>
      <!--  <input type="text" name="couponId" id="couponId" maxlength="4" /><br>  * should be auto incremented-->  
        <label>Coupon Name:</label>
        <input type="text" name="couponName" id="couponName" maxlength="50" /><br>
        <label>Coupon Value:</label>
        <input type="text" name="couponValue" id="couponValue" maxlength="4" /><br>
        <input type="submit" name="submit" value="submit" />
    </form>

</body>
</html>