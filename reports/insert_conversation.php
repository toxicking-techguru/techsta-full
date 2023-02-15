
<?php



<form action="insert_conversation.php" method="post">
  Report ID: <input type="text" name="report_id"><br><br>
  Sender ID: <input type="text" name="sender_id"><br><br>
  Message: <textarea name="message"></textarea><br><br>
  <input type="submit" value="Submit">
</form>


 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "klik_loginsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$report_id = $_POST['report_id'];
$sender_id = $_POST['sender_id'];
$message = $_POST['message'];

$sql = "INSERT INTO conversations (report_id, sender_id, message)
VALUES ('$report_id', '$sender_id', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "New conversation added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
