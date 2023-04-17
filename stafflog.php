<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link  rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" />
</head>
<body>
<div class ="container">  
<div class="row mt-5">
  <div class="col-md-6 m-auto">
    <div class="card card-body">
    <h1 class="text-center mb-3">
              <img src="logo.jfif" alt="Logo">
            <br><br>
        Log In To Work </h1>
      <form action="stafflogprocess.php" method="POST" >
        <div class="form-group">
          <label for="name">Name</label>
          <?php
          echo "<select type='name' id='name' onchange='storeValue()' name='name' class='form-control' placeholder='Enter Name' style = 'margin-bottom:10px'>";
          echo "<option>Select Staff</option>";
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
          <div class="form-group">
          <label for="Work Type">Work Type</label>
          <select type="name" id="name" name="worktype" class="form-control" placeholder="Enter Name" style = "margin-bottom:10px">
            <option>Office</option>
            <option>Work From Home</option>
          </select>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-primary btn-block" id="punch" name = "punchin" style="background-color:#228B22;" value = "Loggedin">Punch In</button>        
            <input type="hidden" name="punchinput" id="inpunch" value="">      
          </div>
          <div class="form-group" style="display:none;" id="time">
         <label for="timer">Timer</label>
         <h2><div id="timer" name = "timer">00:00:00</div></h2><br><br>
         <input type="hidden" name="timer_val" id="timer_val" value="">
      </div>
        <div class="form-group" style="display:none;" id="workdesc">
        <label for="Work Description">Work Description</label>
        <textarea class="form-control" id="workdescription" name="workdesc" rows="3"></textarea>
        </div>
       <div class="form-group" style="display:none;" id="punchout">
            <button type="submit" class="btn btn-primary btn-block" id="punchoutbtn" name="punchout" style="background-color:#FF0000;" value="Loggedout">Punch Out</button>        
          </div>
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
  <script>
     let selectedname = "MK";
    function storeValue() {
    selectedname = document.getElementById("name").value;
 // print the selected value to the console
  }
  $('#punch').click(function(){
    $('#time').show();
    $('#workdesc').show();
    $('#punchout').show();
    $('#punch').hide();
    alert("You have punched in, " + selectedname);
    var startTime = Date.now();
    setInterval(function() {
      var elapsedTime = Date.now() - startTime;
      var formattedTime = new Date(elapsedTime).toISOString().substr(11, 8);
      $('#timer').text(formattedTime);
      $('#timer_val').val(formattedTime);
    }, 1000);
  });



  $(document).ready(function() {
    $('#punch').click(function() {
      var d = new Date();
      var time = d.toLocaleTimeString();
      $('#punch').val(time);
      $('#inpunch').val(time);
    });
  });

  $('#punchoutbtn').click(function(){
    alert("You have punched out, " + selectedname);
    var d = new Date();
      var time = d.toLocaleTimeString();
      $('#punchoutbtn').val(time);
  
  });
</script>
</body>
</html>