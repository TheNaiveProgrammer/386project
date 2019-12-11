<html>
<?php

if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB')) {
} else { echo "No connection"; }

$query = "update Abilities set description = \"". addslashes($_POST['desc']) . "\" where name = \"" . $_POST['name'] . "\";";
echo $query;

mysqli_query($connection, $query);

mysqli_close($connection);

?>
</html>
