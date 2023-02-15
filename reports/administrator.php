<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
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
        }
        input[type="submit"] {
            margin-top: 10px;
            float: right;
        }
    </style>
</head>
<body>
    <h1>Welcome to TECHStA Admin Panel,</h1>
    <h2>Reports:</h2>
    <?php 
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "klik_loginsystem");

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the reports data from the reports table
    $sql = "SELECT * FROM reports";
    $result = $conn->query($sql);

    // Fetch the reports data into an array
    $reports = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $reports[] = $row;
        }
    }

    // Close the connection
    $conn->close();
    ?>
    <?php foreach ($reports as $report): ?>
        <form action="admin_reply.php" method="post">
            <input type="hidden" name="report_id" value="<?php echo $report["id"]; ?>">
            <p>
                <strong>Report ID:</strong> <?php echo $report["id"]; ?><br>
                <strong>Report Description:</strong> <?php echo $report["description"]; ?><br>
                <strong>File Path:</strong> <a href="<?php echo $report["file_path"]; ?>">Download</a>
            </p>
            <h3>Admin Reply:</h3>
            <textarea name="reply" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Reply">
        </form>
    <?php endforeach; ?>
  <p><a href="logout.php">Logout</a></p>
</body>
</html>
