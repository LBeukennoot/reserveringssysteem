<?php
/** @var array $producten */
$host = "localhost";
$name = "root";
$password = "";
$database = "reservering";

$db = mysqli_connect($host, $name, $password, $database)
or die("MySQL connection failed" . mysqli_connect_error());

$query = "SELECT * FROM producten";
$result = mysqli_query($db, $query);

while($row = mysqli_fetch_assoc($result))
{
    $producten[] = $row;
}
mysqli_close($db);
?>
