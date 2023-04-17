<?php

require_once 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Csv;


$conn = mysqli_connect("localhost", "tilttheb_workportal", "workprotal@#2023", "tilttheb_workportal");

        
  // Check if the connection was successful
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
// Retrieve data from the SQL table
$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];
$sql = "SELECT * FROM report WHERE date BETWEEN '$fromdate' and '$todate'";
$result = mysqli_query($conn, $sql);

// Create an Excel file
$spreadsheet = new Spreadsheet();

// Add a new worksheet
$worksheet = $spreadsheet->getActiveSheet();
$worksheet->setCellValue('A1', 'Name');
$worksheet->setCellValue('B1', 'Work Type');
$worksheet->setCellValue('C1', 'Punch-In');
$worksheet->setCellValue('D1', 'Work_Desc');
$worksheet->setCellValue('E1', 'Punch-Out');
$worksheet->setCellValue('F1', 'Date');
$worksheet->setCellValue('G1', 'Work Time');

// Write data to the Excel file
$row = 2;
while ($data = mysqli_fetch_assoc($result)) {
    $worksheet->setCellValue('A'.$row, $data['name']);
    $worksheet->setCellValue('B'.$row, $data['work']);
    $worksheet->setCellValue('C'.$row, $data['punchin']);
    $worksheet->setCellValue('D'.$row, $data['workdesc']);
    $worksheet->setCellValue('E'.$row, $data['punchout']);
    $worksheet->setCellValue('F'.$row, $data['date']);
    $worksheet->setCellValue('G'.$row, $data['WorkTime']);

    $row++;
}

// Download the Excel file
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;filename="workreport.csv"');
header('Cache-Control: max-age=0');

$writer = new Csv($spreadsheet);
$writer->setDelimiter(',');
$writer->setEnclosure('"');
$writer->setSheetIndex(0);
$writer->save('php://output');
exit;

mysqli_close($conn);
header("Location:admin.php");
?>
