<!DOCTYPE html>
// php script that accepts a name from user and prints that name along with a random number between 6 and 15.
<html>
<head>
   <title>Challenge</title>
   </head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>


<?php 
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    echo wignify("$name");
}
function wignify($name)
{
	    $no = rand(6,15);
		echo "$name"."$no";
}
?>
	
</body>
</html>
