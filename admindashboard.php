<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMP Portal</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link  rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" />
</head>
<body>
<div style="position: absolute; top: 0; right: 0; padding: 10px;">
  <!--<img src="logo.jfif" alt="Company Logo" style="width: 100px; height: 100px;">-->
</div>
<?php
  $username = $_SESSION['username'];
  

  echo '<div style="display: flex; justify-content:center;: center; padding-top: 50px; padding-left: 50px; color:black;">';
  echo '<img src="logo.jfif" style="border-radius: 50%; width: 100px; height: 100px; margin-right: 20px;"/>';
  echo '<h2> Welcome www.ayurvedam4you.com,</h2>';
  echo '</div>';
  echo '<div style="padding-top: 20px;display: flex; justify-content: center;">';
  echo '<button style="background-color: forestgreen; color: white; border: none; padding: 100px 20 0px; border-radius: 5px; font-size: 16px; margin-right: 10px;"><a href="dates.php" style="text-decoration: none; color: white"><b>Work Report</b></a></button>';
  echo '<button style="background-color: forestgreen; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; margin-right: 10px;"><a href="addstaff.php" style="text-decoration: none; color: white"><b>Add New Staff</b></a></button>';
  echo '<button style="background-color: forestgreen; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; margin-right: 10px;"><a href="deletestaff.php" style="text-decoration: none; color: white"><b>Remove Staff</b></a></button>';
  echo '<button style="background-color: forestgreen; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; margin-right: 10px;"><a href="index.php" style="text-decoration: none; color: white"><b>Log Out</b></a></button>';
  echo '</div>';

?> 
<script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"
  ></script>
  <script>

var prescriptionsDropdown = document.querySelector('.dropdown-btn');
var prescriptionsDropdownContent = document.querySelector('.dropdown-content');

prescriptionsDropdown.addEventListener('mouseenter', function() {
  prescriptionsDropdownContent.style.display = 'block';
});

prescriptionsDropdown.addEventListener('mouseleave', function() {
  setTimeout(function() {
    prescriptionsDropdownContent.style.display = 'none';
  }, 2000);
});


</script>
</body>
</html>