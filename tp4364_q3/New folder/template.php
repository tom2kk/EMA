<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="template.css"> 
  <title>techdef</title>
</head>

<body>
  <div id="canvas">
    <div id="heading">
      techdef
    </div>

    <div id="menu">

      <div class="vertical-menu">
        <div><a href="#" class="active">Menu</a></div>
        <div><a href="#">Search for a term</a></div>
        <div><a href="#">Add a new term and definition</a></div>
        <div><a href="#">Edit or delete a term</a></div>
      </div>
    </div>

    <div id="main-area">

      <div id="search-term-div">
        <h2>Search for term</h2><br>
        <form method="get">
          <label for="search-term">Term: </label><br>
          <input id="search-term" type="text" name="search-term" value=""><br>

          <label>Definition: </label><br>
          <div id="search-definition">
                      </div><br>


          <input class="input-submit" type="submit" name="search-submit" value="Search">
        </form>

      </div>

      <div id="new-term-div">
        <h2>Add new term </h2><br>
        <label for="input-term">Term: </label><br>
        <input id="input-term" type="text" name="input-term" value=""><br>

        <label for="input-definition">Definition: </label><br>
        <input id="input-definition" type="text" name="input-definition" value="">

        <input class="input-submit" type="submit" name="input-submit" value="Submit">
      </div>

      <div id="edit-term-div">
        <h2>Edit/Delete a term </h2><br>
        <label for="edit-term">Term: </label><br>
        <input id="edit-term" type="text" name="edit-term" value="">
        <input id="delete-submit" type="button" name="delete-submit" value="Delete"><br>

        <label for="edit-definition">Definition: </label><br>
        <input id="edit-definition" type="text" name="edit-definition" value="">

        <input class="input-submit" type="submit" name="input-submit" value="Edit">

      </div>
    </div>
  </div>
</body>
</html>
