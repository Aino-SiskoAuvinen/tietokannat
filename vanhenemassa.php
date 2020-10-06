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
  
$result = mysqli_query($con,"SELECT * FROM vanhenemassa"); 
echo "Nämä tuotteet vanhenevat pian";
echo "<table border='1'> 
<tr> 
<th>ID</th>
<th>Nimi</th> 
<th>Pakkauskoko</th> 
<th>PVM</th>
<th>Sijainti</th>
</tr>"; 
while($row = mysqli_fetch_array($result)) { 
echo "<tr>"; 
echo "<td>" . $row['idTuote'] . "</td>";
echo "<td>" . $row['Nimi'] . "</td>"; 
echo "<td>" . $row['Pakkauskoko'] . "</td>"; 
echo "<td>" . $row['PVM'] . "</td>";
echo "<td>" . $row['Sijainti'] . "</td>";
echo "</tr>"; 
} 
echo "</table>"; 
  
mysqli_close($con); 