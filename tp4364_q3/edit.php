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
    $sql= "UPDATE `walk` SET name = :walkname,walk_date = :walkdate,start_time = :starttime,leader = :leader,meeting_point = :meetingpoint,meeting_latlong = :meetinglatlong,distance = :distance,route = :route,notes = :notes,status = :status WHERE :id = id;";


    $stmt = $db->prepare( $sql );
    $stmt->bindValue(':id' ,$id);
    $stmt->bindValue(':walkname' ,$walkname);
    $stmt->bindValue(':walkdate',$walkdate);
    $stmt->bindValue(':starttime' ,$starttime);
    $stmt->bindValue(':leader',$leader);
    $stmt->bindValue(':meetingpoint',$meetingpoint);
    $stmt->bindValue(':meetinglatlong',$meetinglatlong);
    $stmt->bindValue(':distance',$distance);
    $stmt->bindValue(':route',$route);
    $stmt->bindValue(':notes',$notes);
    $stmt->bindValue(':status',$status);
    $results = $stmt->execute();

    echo '<p>Data added to table</p><br>
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
