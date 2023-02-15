<?php
// Get the report ID from the URL
$report_id = $_GET["report_id"];

// Connect to the database
$conn = new mysqli("localhost", "root", "", "klik_loginsystem");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $reply = $_POST["reply"];

    // Insert the reply into the database
    $sql = "UPDATE reports SET reply = '$reply' WHERE id = $report_id";
    $conn->query($sql);
}

// Get the report data from the database
$sql = "SELECT * FROM reports WHERE id = $report_id";
$result = $conn->query($sql);

// Fetch the report data
if ($result->num_rows > 0) {
    $report = $result->fetch_assoc();
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Reply</title>
    <style>
        form {
            padding: 10px;
            background-color: lightgray;
            margin-bottom: 10px;
        }
        h3 {
            margin-top: 10px;
        }
        textarea {
            width: 100%;
            height: 200px;
            background-color: lightgray;
            border: none;
            resize: none;
        }
    </style>
</head>
<body>
    <h1>Admin Reply</h1>
    <form>
        <p>
            <strong>Report ID:</strong> <?php echo $report["id"]; ?><br>
            <strong>Report Description:</strong> <?php echo $report["description"]; ?><br>
            <strong>File Path:</strong> <a href="<?php echo $report["file_path"]; ?>">Download</a>
        </p>
        <h3>Admin Reply:</h3>
        <textarea readonly><?php echo $report["reply"]; ?></textarea><br>
    </form>
    <p><a href="admin.php">Back to Admin Panel</a></p>
</body>
</html>
