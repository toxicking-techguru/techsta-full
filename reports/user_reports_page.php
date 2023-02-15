<html>
<head>
  <title>User Reports</title>
</head>
<body>
  <h1>User Reports</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Report Title</th>
    </tr>
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
    
      // Retrieve all reports submitted by the user
      $user_id = mysqli_real_escape_string($conn, $_SESSION["user_id"]);
      $sql = "SELECT * FROM reports WHERE user_id = '$user_id'";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["id"] . "</td><td><a href='view_report.php?report_id=" . $row["id"] . "'>" . $row["title"] . "</a></td></tr>";
          }
      } else {
          echo "No reports found for this user";
      }
      
      mysqli_close($conn);
      ?>
  </table>
</body>
</html>
