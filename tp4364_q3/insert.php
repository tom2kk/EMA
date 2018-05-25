
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
      $id = $_POST['id'];
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

    $sql= INSERT INTO 'walk' VALUES ($id, $walkname, $walkdate , $starttime , $leader , $meetingpoint , $meetinglatlong , $distance , $route , $notes , $status);
    $db->exec($sql) or die('Add data failed');

    echo '<p>Data added to table:</p>';

    echo '<pre>';
    $results = $db->query("SELECT * FROM walk");
    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        var_dump($row);
    }
    echo '</pre>';

    ?>
  </div>
</div>

<footer>
  <img id="social-media" src="social-media.png" alt="">
</footer>
</body>

</html>
