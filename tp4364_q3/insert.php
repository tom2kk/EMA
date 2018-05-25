<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="script.js"></script>
  <title>Walking Events</title>
</head>
<body>
  <div id="content">
  <div id="header">

  </div>



  <div id="link-bar">
    <div id="head">
      <img id="logo-image" src="logo3.png" alt="">
      OU Running Club |</div>
      <div id="show-main-menu">
        <div id="menu1">
          <a href="main.html">Home</a>
          <a href="admin-main.html">Admin</a>
        </div>
        <div id="menu2">
          <a href="login.html">Login</a>
          <a href="register.html">Register</a>
        </div>
    </div>
  </div>



  <div id=main>
    <?php
    define('ISITSAFETORUN', TRUE);
    $database_name = "walkingclub.sqlite";
    $db = new SQLite3($database_name);
    if (isset($_POST['walkname'])){
      $walkname = $_POST['walkname'];
      $walkdate = $_POST['date'];
      $starttime = $_POST['starttime'];
      $leader = $_POST['leader'];
      $meetingpoint = $_POST['meetingpoint'];
      $meetinglatlong = $_POST['meetinglatlong'];
      $distance = $_POST['distance'];
      $route = $_POST['route'];
      $notes = $_POST['notes'];
      $status = $_POST['status'];
    }
    $sql= "INSERT INTO `walk`(`name`,`walk_date`,`start_time`,`leader`,`meeting_point`,`meeting_latlong`,`distance`,`route`,`notes`,`status`) VALUES ('$walkname','$walkdate','$starttime','$leader','$meetingpoint','$meetinglatlong','$distance','$route','$notes','$status');";
    $db->exec($sql) or die('Add data failed');
    echo '<p>Data added to table:</p>';
    echo '<pre>';
    $results = $db->query("SELECT * FROM walk");

    echo "<table border='1'>
    <tr>
    <th>Walk Name</th>
    <th>Walk Date</th>
    <th>Start Time</th>
    <th>Leader</th>
    <th>Meeting Point</th>
    <th>Meeting Lat/Long</th>
    <th>Distance</th>
    <th>Route</th>
    <th>Notes</th>
    <th>Status</th>
    </tr>


    "; // start a table tag in the HTML

    while($row =  $results->fetchArray(SQLITE3_ASSOC)){   //Creates a loop to loop through results
    echo "
    <tr>
    <td>" . $row['name'] . "</td>
    <td>" . $row['walk_date'] . "</td>
    <td>" . $row['start_time'] . "</td>
    <td>" . $row['leader'] . "</td>
    <td>" . $row['meeting_point'] . "</td>
    <td>" . $row['meeting_latlong'] . "</td>
    <td>" . $row['distance'] . "</td>
    <td>" . $row['route'] . "</td>
    <td>" . $row['notes'] . "</td>
    <td>" . $row['status'] . "</td>
    </tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML


    ?>
  </div>
</div>

<footer>
  <img id="social-media" src="social-media.png" alt="">
</footer>
</body>

</html>
