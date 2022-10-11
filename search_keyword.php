<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];


//Search the database for a specific word.
echo "<div id='searchhead' align='center'>";
echo "<img src='/images/MHA_Set3_FB-860-x-320_2.jpg'>";
echo "<h1>Results</h1>";
echo  "</div>";

$sql = "SELECT cname, ctext, cquantity FROM uvs_coll_db WHERE cname LIKE '%" . $keywordfromform . "%' OR ctext LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);  

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo"<div id='cinfo' align='center'>";
echo "<br>" . "<h3>Card Name: </h3>" . $row["cname"]. "<br>" . "<br>" . "<h3>Card Text: </h3>" . $row["ctext"]. "<br>" . "<br>" . "<h3 id='cquantity'>Card Quantity: </h3>" . $row["cquantity"]. "<br>" . "<br>";
echo"</div>";


}
} else {
echo "<div id='noresults' align='center'>";
echo "<h3>0 results</h3>";
echo "</div>";
}

echo"<div align='center'>";
echo "<a id='home' href='/index.php'>Return To Search</a>";
echo "</div>";
?>
