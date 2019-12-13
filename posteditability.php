<html>
<?php

if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB')) {
} else { echo "No connection"; }

$query = "update Abilities set description = \"". addslashes($_POST['desc']) . "\" where name = \"" . $_POST['name'] . "\";";
//echo $query;

if (mysqli_query($connection, $query))
	echo "Updated ability!";
else
	echo "Failed to update";
echo "<br>";

echo "<form action=viewability.php method=post><input type=submit value=\"Go Back\"/>";
echo "<input type=hidden name=ability value=\"" . $_POST['name'] . "\"/></form>";

mysqli_close($connection);

?>
</html>
