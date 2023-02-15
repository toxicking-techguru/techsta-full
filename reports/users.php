<?php

// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "klik_loginsystem";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert user data into the database
if (isset($_POST["submit"])) {
    $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
    $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);

    $sql = "INSERT INTO users (first_name, last_name, email)
    VALUES ('$first_name', '$last_name', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>
