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

$query = 'insert into Pokemon(nat_num, name, gender_ratio, species_name, pokedex_desc, catch_rate, height, weight) values (' . $_POST['natnum'] .', \''. $_POST['pokename'] . '\', \'' . $_POST['male'] . '-' . $_POST['female'] . '\', \'' . $_POST['species'] . '\', \''. $_POST['dexentry'] . '\', '. $_POST['cr'] . ', \''. $_POST['height'] . '\', \'' . $_POST['weight'] . '\');';
print $query;
mysqli_query($connection, $query);
mysqli_close($connection);
?>
</body>
</html>
