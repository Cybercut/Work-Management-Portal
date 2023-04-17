<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Dates</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link  rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" />
</head>
<body>
<div class ="container">  
<div class="row mt-5">
    <div class="col-md-6 m-auto">
      <div class="card card-body">
        <h1 class="text-center mb-3"><img src = "logo.jfif"/><br><br>Access Work Report</h1>
       
        <form action="excel.php" method="POST">
          <div class="form-group">
            <label for="staffname">From Date</label>
            <input
              id="fromdate"
              name="fromdate"
              type ="date"
              class="form-control"
              placeholder="Enter From Date"
              value="<?php echo date('Y-m-d'); ?>"
            />
          </div>
          <div class="form-group">
            <label for="todate">To Date</label>
            <input
              type="date"
              id="todate"
              name="todate"
              class="form-control"
              placeholder="Enter To Date"
              value="<?php echo date('Y-m-d'); ?>"
            />
          </div>
          <button type="submit" class="btn btn-primary btn-block" style = "background-color:#228B22">Get Work Report</button>
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