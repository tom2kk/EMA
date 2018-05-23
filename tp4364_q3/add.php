<?php define('ISITSAFETORUN', TRUE); 
$mytable="tp4364";//set a variable for the database table

error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <title> Erehwon Guest House </title>
        <link rel="stylesheet" type="text/css" href="style2.css" />
    </head>
    <body>
        <h1 id="title">Erehwon Guest House - D1499126</h1>

<?php

if (!empty($_POST))
{
    foreach ($_POST as $key => $value)
    {
		if ( is_array( $value )){ 
			foreach ($value as $cbkey => $cbvalue) 
			{
				$webdata[$key.$cbkey] = $cbvalue; 
			}
		} else{
        
        $webdata[$key] = $value;
		}
    }
} else{
}
?>

<?php
//connect to this host
require "mydatabase.php";
$dbhandle = mysqli_connect( $hostname, $username, $password ) or die( "Unable to connect to MySQL");
?>



<div id="currentCon">
<?php
//select database
$selected = mysqli_select_db(  $dbhandle, $mydatabase ) or die("Unable to connect to " . $mydatabase );
echo "<p>Connected to database {$mydatabase}"
?> 
</div>

<?php
$thisquery = "SHOW TABLES FROM " . $mydatabase ;
$result = mysqli_query( $dbhandle, $thisquery ) or die (" Could not action the query " . $thisquery );
while ($row = mysqli_fetch_array($result)) {
}
?>

<?php
if (isset($webdata['firstname'] ) && !empty($webdata['firstname'] )){
	$sql = "INSERT INTO tp4364  (firstname, lastname, email, comments) VALUES ('{$webdata['firstname']}','{$webdata['lastname']}','{$webdata['email']}','{$webdata['comments']}')";

	if (mysqli_query($dbhandle, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($dbhandle);
	}
}
?>
        
<div id="dataform">
    <div id="form">
<h2 class="headers1">Enter a new record:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  name = "tp4364form" >
        
    <div class="label"><label for="firstname">First name: </label></div><p>
    <div><input class="textinput" type="text" name="firstname" id="firstname" placeholder="firstname" required maxlength="30" minlength="1" value="" ></div>
        
	<div class="label"><p><label for="lastname">Last name: </label></div><p>
    <div><input class="textinput" type="text" name="lastname" id="lastname" pattern="[a-zA-Z0-9.-]+" placeholder="lastname" required maxlength="30" minlength="1" value=""> </div>
        
	<div class="label"><p><label for="email">Email: </label></div><p>
    <div><input class="textinput" type="text" name="email" id="email" placeholder="email"  maxlength="50" minlength="4" value="" ></div><p>
        
    <div class="label"><p><label for="comments">Comments: </label></div><p>
    <div><textarea class="textinput" name="comments" ROWS=6 COLS=60 id="comments" placeholder="comments"  maxlength="65000" minlength="1">
    </textarea></div>
        
        
	<p><label for="submit"></label><input type="submit" name="submit" id="submit" value="Submit New">
    </form>
    </div>
    
</div>

</body>
</html>
