<?php
include'../model/dbconnect.php';
function login($userName,$password){
   
    $conn = connect();
    $sql = oci_parse($conn, "select UNAME,PASS from UINFORMATION where UNAME='$userName' and PASS='$password'");       
    $res= oci_execute($sql);
    $row = oci_fetch_all($sql, $res);
    return $row;
   
  
}

?>