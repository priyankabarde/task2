<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$DEBUG = 0;
class DatabaseUtil{
    
private $server = 'localhost:8889';
private $user = 'root';
private $password = 'root';
private $dbName = 'CD';
private $DBhandle = false;

public function connectToDB() { 
    $this->DBhandle = mysqli_connect($this->server,$this->user,$this->password,$this->dbName) or die("hello");
    if(!$this->DBhandle)
    {
        echo('Could not connect: ' . mysqli_error());
    }
    else if($DEBUG)
    {
      echo 'Connected to MySqlServer Successfully sss';
    }
}

//Function to perform ant query on the database
public function performQuery($sqlQuery = ''){
   //echo 'in performQuery <br>';
    if(!$this->DBhandle)
    {
        echo('DB handle nil');
    }
    else if($DEBUG)
    {
        echo 'DB Handle present';
    }
    $result = mysqli_query($this->DBhandle, $sqlQuery);
    return $result;
    
}

public function insertTo_Coupon($CouponId, $CouponName, $Value = '0') {
    if($DEBUG)
    {
         echo 'in readFromDBCoupon <br>';
    }
    
    $sqlQuery = 'insert into Coupon (CouponId, CouponName, Value) values(\''.$CouponId.'\',\''.$CouponName.'\',\''.$Value.'\');';
   
    if($DEBUG)
    {
         echo $sqlQuery;
    }
    $result = $this->performQuery($sqlQuery);
    
    if($result == 0)
        echo 'insert failed!!';
   

}

public function readFrom_Coupon() {
    if($DEBUG)
    {
        echo 'in readFromDBCoupon <br>';
    }
 
    
    $sqlQuery = 'Select * from Coupon;';
    $result = $this->performQuery($sqlQuery);
    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result)){
            echo "Got a row: ".$row['CouponId'].','.$row['CouponName'].','.$row['Value'].'<br>';
        }
    }
    else
    {
        echo "No results<br>";
    }
    
}

public function searchFrom_Coupon($searchKey){      //it will search on CouponName
    if($DEBUG)
    {
        echo 'in searchFrom_Coupon <br>';
        echo $searchKey;
        
    }
    
    $sqlQuery = 'SELECT * FROM Coupon
                 WHERE CouponName LIKE \'%'.$searchKey.'%\';';
    
    if($DEBUG)
    {
        echo 'sqlquery:'.$sqlQuery;
    }
    
    $result = $this->performQuery($sqlQuery);
    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result)){
            echo "Got a row: ".$row['CouponId'].','.$row['CouponName'].','.$row['Value'].'<br>';
        }
    }
    else
    {
        echo "No results<br>";
    }
    
}


}

?>

