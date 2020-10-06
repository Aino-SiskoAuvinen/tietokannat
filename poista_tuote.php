<?php 
  
 /* 
  * To change this license header, choose License Headers in Project Properties. 
  * To change this template file, choose Tools | Templates 
  * and open the template in the editor. 
  */ 
 $host='localhost'; 
 $dbname='t9auai00'; 
 $username='t9auai00'; 
 $password=''; 
  
 $con=mysqli_connect($host,$username,$password,$dbname); 
  
 if (mysqli_connect_errno()) 
 { 
  echo "Yhteys epäonnistui" . mysqli_connect_error(); 
 } 
  
 $id=mysqli_real_escape_string($con, 
  filter_input(INPUT_POST,'ID',FILTER_SANITIZE_STRING)); 
 
 $sql="delete from Tuote where idTuote=$id";
  
 
 
 if (!mysqli_query($con, $sql)){ 
  die('Error: ' . mysqli_error($con)); 
 } 
 echo "1 record deleted"; 
 mysqli_close($con); 
  
/* 
 * To change this license header, choose License Headers in Project Properties. 
 * To change this template file, choose Tools | Templates 
 * and open the template in the editor. 
 */ 