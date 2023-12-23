<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "landing";

$conn = new mysqli($servername, $username, $password , $database);

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$Date = $_POST['date'];
$Time = $_POST['time'];
$Name = $_POST['name'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];


$sql = "INSERT INTO `landing`.`cal` ( `date`,`time`,`name`,`phone`, `email`, `dt.`) VALUES ('$Date','$Time','$Name','$Phone', '$Email', current_timestamp());";

if ($conn->query($sql) === TRUE) 
{
  header("Location: index.html?success=true");
        exit();
} 
else 
{
  echo "Error Inserting: " . $conn->error;
}
$conn->close();
?>