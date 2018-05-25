
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
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad incidunt ipsum perspiciatis soluta, porro repudiandae impedit commodi ex iure quod suscipit laudantium aut culpa aliquam a quae aperiam, doloribus similique, deserunt placeat autem! Eveniet beatae, velit ex obcaecati porro corrupti veritatis ipsam delectus, dolor, perspiciatis quam a praesentium, cum dolore!

      </div>
    </div>

    <div id="add-section" class="add-display-sections">

        <div class="section-title">
          <div class="plus-button">+</div>
          <label for="add-show-menu" class="display-menu">
          Add Walking Events
          </label>
        </div>

        <input id="add-show-menu" type="checkbox" value="button">


      <div id="add-display-content">
        <form id="form" action="insert.php" method="post">
          <br>
          <input id="sessionID" type="text" name="sessionID" value="ABCDEF012345">
          <label>ID:</label>
          <input type="text" name="id" value="">
          <br><br>
          <label>Walk name:</label>
          <input type="text" name="walkname" value="">
          <br><br>
          <label>Date:</label>
          <input type="text" name="date" value="">
          <br><br>
          <label>Start time:</label>
          <input type="text" name="starttime" value="">
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
          <input type="text" name="distance" value="">
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
          <input class="submit" type="submit" value="Submit">
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
