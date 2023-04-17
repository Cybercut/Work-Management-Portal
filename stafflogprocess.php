<?php
session_start();
$name = $_POST['name'];
$work = $_POST['worktype'];
$punchin = $_POST['punchinput'];
$punchout = $_POST['punchout'];
$workdesc = $_POST['workdesc'];
$timer =$_POST['timer_val'];


$conn = mysqli_connect("localhost", "tilttheb_workportal", "workprotal@#2023", "tilttheb_workportal");


$date = date("Y-m-d");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = mysqli_real_escape_string($conn, $name);
$work = mysqli_real_escape_string($conn, $work);
$workdesc = mysqli_real_escape_string($conn, $workdesc);
$punchin = mysqli_real_escape_string($conn, $punchin);
$punchout = mysqli_real_escape_string($conn, $punchout);
$timer = mysqli_real_escape_string($conn, $timer);


  // Add user details to the SQL database
  $stmt = $conn->prepare("INSERT INTO report VALUES (?, ?, ?, ?, ?, ?, ?)");

  // assume $value1, $value2, $value3 are the user input values
  $stmt->bind_param("sssssss", $name, $work, $punchin, $workdesc, $punchout,$date, $timer);


if (mysqli_stmt_execute($stmt)) {
    include("index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>



?>