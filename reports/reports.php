<html>
<head>
  <title>Vulnerability Report Submission</title>
</head>
<body>
  <h1>Vulnerability Report Submission</h1>
  <form action="reports.php" method="post" enctype="multipart/form-data">
    <label for="user_id">User ID:</label>
    <input type="text" id="user_id" name="user_id"><br><br>
    <label for="title">Report Title:</label>
    <input type="text" id="title" name="title"><br><br>
    <label for="description">Report Description:</label>
    <textarea id="description" name="description"></textarea><br><br>
    <label for="screenshot">Screenshot:</label>
    <input type="file" id="screenshot" name="screenshot"><br><br>
    <label for="pdf">PDF:</label>
    <input type="file" id="pdf" name="pdf"><br><br>
    <input type="submit" value="Submit Report" name="submit">
  </form>
</body>
</html>

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

// Insert report data into the database
if (isset($_POST["submit"])) {
    $user_id = mysqli_real_escape_string($conn, $_POST["user_id"]);
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $screenshot = mysqli_real_escape_string($conn, $_FILES["screenshot"]["name"]);
    $pdf = mysqli_real_escape_string($conn, $_FILES["pdf"]["name"]);

    $sql = "INSERT INTO reports (user_id, title, description, screenshot, pdf)
    VALUES ('$user_id', '$title', '$description', '$screenshot', '$pdf')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>
