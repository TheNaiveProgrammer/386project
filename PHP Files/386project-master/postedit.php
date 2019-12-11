<html>
<body>
<?php

if($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB')) {
	#print "Connected";
} else {
	print "No connection";
}

$_POST['dexentry'] = addslashes($_POST['dexentry']);

$query = 'update Pokemon set '.'name = \''. $_POST['pokename'] . '\', gender_ratio = \'' . $_POST['male'] . '-' . $_POST['female'] . '\', species_name = \'' . $_POST['species'] . '\', pokedex_desc = \''. $_POST['dexentry'] . '\', catch_rate = '. $_POST['cr'] . ', height = \''. $_POST['height'] . '\', weight = \'' . $_POST['weight'] . '\' where nat_num = '.$_POST['natnum'].';';
#print $query;
if (mysqli_query($connection, $query)) { echo "Query success, changed Pokemon"; } else { echo "Failed to update"; }

$query = 'delete from IsType where nat_num = ' . $_POST['natnum'] . ';';
mysqli_query($connection, $query);

$query = 'insert into IsType values (' . $_POST['natnum'] . ', "' . $_POST['primarytype'] . '");';
if (mysqli_query($connection, $query)) { echo "<br>Query success, changed primary type"; } else { echo "<br>Failed to chance primary type"; }

if ($_POST['secondarytype'] != 'null')
{
	$query = 'insert into IsType values (' . $_POST['natnum'] . ', "' . $_POST['secondarytype'] . '");';
	if (mysqli_query($connection, $query)) {
		echo "<br>Query success, changed secondary type";
	} else {
		echo "<br>Failed to change secondary type";
	}
}

$query = 'delete from Norm_Ability where nat_num = ' . $_POST['natnum'] . ';';
mysqli_query($connection, $query);

$query = 'insert into Norm_Ability values (' . $_POST['natnum'] . ', "' . $_POST['primaryability'] . '");';
if (mysqli_query($connection, $query)) {
	echo "<br>Query success, changed primary ability";
} else
	echo "<br>Failed to change ability";

if ($_POST['secondaryability'] != 'NULL')
{
	$query = 'insert into Norm_Ability values (' . $_POST['natnum'] . ', "' . $_POST['secondaryability'] . '");';
	if (mysqli_query($connection, $query))
		echo "<br>Query success, changed second ability";
	else
		echo "<br>Failed to change ability";
}

if ($_POST['hiddenability'] != 'NULL')
{
	$query = 'delete from Hidden_Ability where nat_num = '. $_POST['natnum'] . ';';
	mysqli_query($connection, $query);
	
	$query = 'insert into Hidden_Ability values (' . $_POST['natnum'] . ', "' . $_POST['hiddenability'] . '");';
	if (mysqli_query($connection, $query))
		echo "<br>Query success, changed hidden ability";
	else
		echo "<br>Failed to change hidden ability";
}

mysqli_close($connection);
?>

<form action="viewpokemon.php" method="post">
<input type=submit value="Go back">
<input type=hidden name=poke value=<?php echo $_POST['pokename']; ?>>
</form>
</body>
</html>
