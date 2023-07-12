<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <link rel="stylesheet" type="text/css" href="./dashboardcss.css">
</head>
<body>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Name FROM employee_tbl";
    $result = $connection->query($sql);

    session_start(); 

    if (isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
       // echo  "username".$username;
        //echo $_SESSION["login"];
    } else {
        $username = "Guest";
        echo $username;
        echo $_SESSION["login"];
    }
?>
<div class="header">
          <div class="header1">
            <div class="logo">
                <img src="./logo.png" alt="logo">
             </div>
             <div class="h1">
                <h1>Welcome, <?php echo $username; ?>!</h1>
                <h1>YummyCakeNepal</h1>
             </div>
         </div>
          <div class="button">
              <a href="./login.php"><button class="button1">Log in</button></a> 
              <a href="./reg.php"><button class="button1">Register</button></a> 
            </div>
    </div>
    <div class="navbar">
    <div class="nav">
        <ul>
            <li><a href="#">Home</a> </li>
            <li><a href="#">order us</a> </li>
            <li><a href="#">services</a> </li>
            <li><a href="#">contact us</a> </li>
        </ul>
    </div>
    <div class="s">
        <input class="form" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </div>
</div>
<div class="card">
    <div class="card-container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card" >
                    <img src="./New folder/FB_IMG_1679375750916.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body">
                      <p class="card-text">Wedding cake</p>
                       <p>Rs.5000</p>
                      <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="card" >
                    <img src="./New folder/FB_IMG_1679375762387.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body">
                      <p class="card-text">Fornite Theme Cake  </p>
                      <p>Rs.2400</p>
                      <a href="#" class="btn btn-primary"> Buy</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="./New folder/FB_IMG_1679375738647.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body">
                      <p class="card-text">Minion theme cake</p>
                      <p>Rs.2000</p>
                      <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
   <div class="container">
    <div class="info">
       <h1>Email:yummycakenepal111@gmail.com</h1> 
       <h1>mobile no. 9869345990</h1> 
        
    </div>
    <div class="address">
        Samakhusi,Kathmandu
    </div>
   </div>
</div>
  </html>