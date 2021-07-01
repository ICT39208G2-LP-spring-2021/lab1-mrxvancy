<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'gtu_lms';

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
  die("შეცდომა ბაზასთან კავშირი არარი: " . $connection->connect_error);
}
echo "მონაცემთა ბაზასთან კავშირი დამყარებულია<br><br><br>";


$sql = "SELECT FirstName, LastName, PersonalNumber FROM students";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row["FirstName"]. " " . $row["LastName"]." - ". $row["PersonalNumber"] . "<br>";
  }
} else {
  echo "0 results";
}

$connection->close();

?>
