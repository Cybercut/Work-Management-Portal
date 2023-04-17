<?php

$staff = $_POST['staffname'];


$conn = mysqli_connect("localhost", "tilttheb_workportal", "workprotal@#2023", "tilttheb_workportal");


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM staff WHERE staffname = '$staff' ";    
$result = mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Successfully removed staff")</script>';
   include("admin.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);