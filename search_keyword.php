<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];


//Search the database for a specific word. Change: table_name to your table name 
echo "<h2>Showing all cards with $keywordfromform</h2>";
$sql = "SELECT id, first_name, last_name FROM table_name WHERE cname LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "Card Name: " . $row["cname"]. " - Card Set: " . $row["cset"]. " -Card Quantity: " . $row["cquantity"]. "<br>";
}
} else {
echo "0 results";
}

?>