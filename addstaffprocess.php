<?php

$staff = $_POST['staffname'];
$id = $_POST['id'];


$conn = mysqli_connect("localhost", "tilttheb_workportal", "workprotal@#2023", "tilttheb_workportal");


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$staff = mysqli_real_escape_string($conn, $staff);
$stmt = $conn->prepare("INSERT INTO staff VALUES (?, ?)"); 

$stmt->bind_param("si", $staff, $id);

if (mysqli_stmt_execute($stmt)) {
  echo '<script>alert("You have added new staff")</script>';
  include("admin.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>