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
  
 $kategoria=mysqli_real_escape_string($con, 
  filter_input(INPUT_POST,'Kat',FILTER_SANITIZE_STRING)); 
 $nimi=mysqli_real_escape_string($con, 
  filter_input(INPUT_POST,'Ni',FILTER_SANITIZE_STRING)); 
 $koko=mysqli_real_escape_string($con, 
  filter_input(INPUT_POST,'PK',FILTER_SANITIZE_STRING));
 $sijainti=mysqli_real_escape_string($con, 
  filter_input(INPUT_POST,'Si',FILTER_SANITIZE_STRING));
 $pvm=mysqli_real_escape_string($con,$_POST['Exp']); 
 
  
 
 $sql="CALL lisaa_tuote('$kategoria','$nimi','$koko','$sijainti','$pvm')";  
 //$sql="INSERT INTO Tekija (Etunimi, Sukunimi) VALUES ('$etunimi','$sukunimi')"; 
 if (!mysqli_query($con, $sql)){ 
  die('Error: ' . mysqli_error($con)); 
 } 
 echo "1 record added"; 
 mysqli_close($con); 
  
/* 
 * To change this license header, choose License Headers in Project Properties. 
 * To change this template file, choose Tools | Templates 
 * and open the template in the editor. 
 */ 