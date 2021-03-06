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
    <div id="view-section" class="view-display-sections">

        <div class="section-title">
          <div class="plus-button">+</div>
          <label for="view-show-menu" class="display-menu">
          View All Walking Events
          </label>
        </div>

        <input id="view-show-menu" type="checkbox" value="button">


      <div id="view-display-content">
        <?php
        $database_name = "walkingclub.sqlite";
        $db = new SQLite3($database_name);

        $results = $db->query("SELECT * FROM walk");

        echo "<table>
        <tr>
        <th>ID</th>
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
        <td>" . htmlspecialchars($row['id']) . "</td>
        <td>" . htmlspecialchars($row['name']) . "</td>
        <td>" . htmlspecialchars($row['walk_date']) . "</td>
        <td>" . htmlspecialchars($row['start_time']) . "</td>
        <td>" . htmlspecialchars($row['leader']) . "</td>
        <td>" . htmlspecialchars($row['meeting_point']) . "</td>
        <td>" . htmlspecialchars($row['meeting_latlong']) . "</td>
        <td>" . htmlspecialchars($row['distance']) . "</td>
        <td>" . htmlspecialchars($row['route']) . "</td>
        <td>" . htmlspecialchars($row['notes']) . "</td>
        <td>" . htmlspecialchars($row['status']) . "</td>
        </tr>";
        }

        echo "</table>";
        ?>
        <br><br>
        <form id="form" action="filter.php" method="get">
        <label>Filter events within # days:</label>
        <input type="number" name="filter" value="">
        <br><br>
        <input class="submit" type="submit" value="Submit">
        </form>
      </div>
    </div>

    <div id="add-section" class="add-display-sections">

        <div class="section-title">
          <div class="plus-button">+</div>
          <label for="add-show-menu" class="display-menu">
          Add/Edit Walking Events
          </label>
        </div>

        <input id="add-show-menu" type="checkbox" value="button">


      <div id="add-display-content">
        <h2>Add Walking Event</h2>
        <form id="form" action="insert.php" method="post">
          <br>
          <input id="sessionID" type="text" name="sessionID" value="ABCDEF012345">
          <label>Walk name:</label>
          <input type="text" name="walkname" value="" required>
          <br><br>
          <label>Date:</label>
          <input type="date" name="date" value="" required>
          <br><br>
          <label>Start time:</label>
          <input type="time" name="starttime" value="" required>
          <br><br>
          <label>Leader:</label>
          <input type="text" name="leader" value="">
          <br><br>
          <label>Meeting point:</label>
          <input type="text" name="meetingpoint" value="" required>
          <br><br>
          <label>Meeting Co-ordinates:</label>
          <input type="text" name="meetinglatlong" value="">
          <br><br>
          <label>Distance (miles):</label>
          <input type="number" name="distance" value="">
          <br><br>
          <label>Route:</label>
          <input type="text" name="route" value="">
          <br><br>
          <label>Notes:</label>
          <input type="text" name="notes" value="">
          <br><br>
          <label>Status:</label>
          <input type="text" name="status" value="">
          <br><br>
          <input class="submit" type="submit" value="Add Event">
        </form>
        <div id="edit-content">
          <br><br>
          <h2>Edit Walking Event</h2>
          <form id="form" action="edit.php" method="post">
            <br>
            <input id="sessionID" type="text" name="sessionID" value="ABCDEF012345">
            <label>ID:</label>
            <input type="number" name="id" value="" placeholder="ID of event to be edited">
            <br><br>
            <label>Walk name:</label>
            <input type="text" name="walkname" value="">
            <br><br>
            <label>Date:</label>
            <input type="date" name="date" value="">
            <br><br>
            <label>Start time:</label>
            <input type="time" name="starttime" value="">
            <br><br>
            <label>Leader:</label>
            <input type="text" name="leader" value="">
            <br><br>
            <label>Meeting point:</label>
            <input type="text" name="meetingpoint" value="">
            <br><br>
            <label>Meeting Co-ordinates:</label>
            <input type="text" name="meetinglatlong" value="">
            <br><br>
            <label>Distance (miles):</label>
            <input type="number" name="distance" value="">
            <br><br>
            <label>Route:</label>
            <input type="text" name="route" value="">
            <br><br>
            <label>Notes:</label>
            <input type="text" name="notes" value="">
            <br><br>
            <label>Status:</label>
            <input type="text" name="status" value="">
            <br><br>
            <input class="submit" type="submit" value="Edit Event">
          </form>
      </div>
    </div>
  </div>
</div>

<footer>
  <img id="social-media" src="social-media.png" alt="">
</footer>
</body>

</html>
