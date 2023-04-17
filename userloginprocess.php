<?php
      $flag = 0;
        session_start();
         $username = $_POST["username"];
         $password = $_POST["password"];
         $flag = 0;
         if(empty($username) || empty($password)) {
            echo '<script>alert("Please fill all fields")</script>';
            include("index.php");
            $flag = 1;
        }
        
        
        $conn = mysqli_connect("localhost", "tilttheb_workportal", "workprotal@#2023", "tilttheb_workportal");


        // Check if the connection was successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);
        
        
        $sql = "SELECT * FROM portalusers WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) == 1) {
            // Login successful
            include("stafflog.php");
            exit();
        
        } else if($flag == 0 ) {
            // Login failed
            echo '<script>alert("Invalid Username or Password")</script>';
            include("index.php");
            exit();
        }
        ?>