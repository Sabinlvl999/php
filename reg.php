<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./reg.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="header1">
            <div class="logo">
                <img src="./logo.png" alt="logo">
            </div>
            <div class="h1">
                <h1 class="h1">YummyCakeNepal</h1>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="h2">
            <h1 class="h3">Registration Form</h1>
        </div>
        <form method="POST" action="">
            <div class="form-group">
                <label for="name" class="two">Name</label>
                <input type="text" class="one" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="department" class="two">Department</label>
                <input type="text" class="one" id="department" name="department" required>
            </div>

            <div class="form-group">
                <label for="Username" class="two">Username</label>
                <input type="text" class="one" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="Address" class="two">Address</label>
                <input type="text" class="one" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="Email" class="two">Email</label>
                <input type="email" class="one" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password" class="two">Password</label>
                <input type="password" class="one" id="password">
            </div>
            <div class="button">
                <button class="button1" name="submit" value="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
include 'connection.php';
if (!$connection) {
    echo "No connection with database";
} else {
    if(isset ($_POST['submit'])) {
        $name = $_POST['name'];
        $department = $_POST['department'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

   

        $query = "INSERT INTO tbl_user (Name , Department, Username, Email, password) VALUES('$name','$department','$username','$email','$password')";

      
        $res = mysqli_query ($connection, $query);
        echo $res;
        if ($res) {
            echo "Data inserted";
            header("Location: login.php");
        } else {
            echo "Error in data insert";
        }
    }
}
?>