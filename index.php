<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();


echo "Welcome to OpenShift Online Developer Preview";
echo "<br>To test the database, hit the dbtest.php URL";


echo "<br><br>This assumes that you have the correct env variables set";
echo "<BR><BR>The environment variables required are databaseuser, databasepassword, and databasenmae.";
?>
