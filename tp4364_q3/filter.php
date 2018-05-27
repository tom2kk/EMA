<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style2.css">
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

    $database_name = "walkingclub.sqlite";
    $db = new SQLite3($database_name);

    if (isset($_GET['filter'])){
      $filter = $_GET['filter'];
    }

    if($filter < 0){
      $query = "select * from walk where walk_date between (date('now')+:filter) AND date('now');";
    }elseif($filter > 0){
      $query = "select * from walk where walk_date between date('now') and (date('now')+:filter);";
    }else{
      $query = "select * from walk where walk_date = date('now');";
    }

    $stmt = $db->prepare($query);
    $stmt->bindParam(':filter', $filter);
    $results = $stmt->execute();

    echo "<table>
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
    </tr>";

    while($row =  $results->fetchArray(SQLITE3_ASSOC)){
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
    </tr>";
    }

    echo "</table>";

    echo '<p>Data added to table</p>
    Click
    <a id="return-white-bg" href="walking-events.php">here</a>
    to return to the main page.
    ';
    ?>
  </div>
</div>

<footer>
  <img id="social-media" src="social-media.png" alt="">
</footer>
</body>

</html>
