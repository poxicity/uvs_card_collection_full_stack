<?php
//if there are any values in the table, display them one at a time.
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") ". $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

$sql = "SELECT cname, cset, cquantity FROM uvs_coll_db";
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