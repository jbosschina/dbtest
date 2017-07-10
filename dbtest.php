<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbname = getenv("MYSQL_DATABASE");
$dbpwd = getenv("MYSQL_PASSWORD");
 


$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));


$query = "SELECT * from PRODUCT" or die("Error in the consult.." . mysqli_error($connection));

echo "Hello All.. Here is the list of products: <br>";
$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo "ID: ".$row['ID'] . " SYMBOL: " . $row['SYMBOL'] . " COMPANY_NAME: " . $row['COMPANY_NAME'] . "<br>";
}
echo "End of the list <br>";

mysqli_close($connection);

?>
