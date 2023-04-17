<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Staff</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link  rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" />
</head>
<body>
<div class ="container">  
<div class="row mt-5">
    <div class="col-md-6 m-auto">
      <div class="card card-body">
        <h1 class="text-center mb-3"><img src = "logo.jfif"/><br><br>Remove Staff</h1>
       
        <form action="deletestaffprocess.php" method="POST">
          <div class="form-group">
            <label for="staffname">Staff Name</label>
            <?php
            echo "<select id='staffname' name='staffname' class='form-control' placeholder='Enter Staff Name'>";
            $count = 0;
            $conn = mysqli_connect("localhost", "tilttheb_workportal", "workprotal@#2023", "tilttheb_workportal");

          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM staff";    
        $result = mysqli_query($conn, $sql);
        $count = 0;
        if (mysqli_num_rows($result) > 0 and $count <= mysqli_num_rows($result))
        {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option>" . $row['staffname'] . "</option>";
            $count = $count + 1;
        }
      }  
       else {
        echo "<option> No rows found! </option";
       }
          echo "</select>";
          ?>
          </div>
          <button type="submit" class="btn btn-primary btn-block" style = "background-color:#228B22">Remove Staff</button>
        </form>
      </div>
    </div>
  </div>
</div>
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
</body>
</html>