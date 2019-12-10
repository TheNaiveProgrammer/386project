<html>
<body>
<p>Test</p>
<?php

if($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB')) {
	print "Connected";
} else {
	print "No connection";
}

$_POST['dexentry'] = addslashes($_POST['dexentry']);

$query = 'update Pokemon set '.'name = \''. $_POST['pokename'] . '\', gender_ratio = \'' . $_POST['male'] . '-' . $_POST['female'] . '\', species_name = \'' . $_POST['species'] . '\', pokedex_desc = \''. $_POST['dexentry'] . '\', catch_rate = '. $_POST['cr'] . ', height = \''. $_POST['height'] . '\', weight = \'' . $_POST['weight'] . '\' where nat_num = '.$_POST['natnum'].';';
print $query;
mysqli_query($connection, $query);
mysqli_close($connection);
?>
</body>
</html>
