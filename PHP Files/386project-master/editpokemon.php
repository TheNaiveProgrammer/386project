<html>
<head>
<title>Edit Bulbasaur</title>
<meta charset="utf-8">
<link rel="stylesheet" href="pokemon_style.css">
</head>	

<body>
	<div class="menu">
                <div class="menu_element"><a href="index.php">Home Page</a></div>
                <div class="menu_element"><a href="allpokemon.php">Pokemon</a></div>
                <div class="menu_element"><a href="allregions.php">Regions</a></div>
                <div class="menu_element"><a href="allmoves.php">Moves</a></div>
                <div class="menu_element"><a href="allabilities.php">Abilities</a></div>
                <div class="menu_element"><a href="alltypes.php">Types</a></div>
	</div>

	<div class="wrap">
	<form action="postedit.php" method="post">
		<?php
		if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
		{ } else { echo 'Error connecting to database'; }
		$query = 'select * from Pokemon where nat_num = '.$_POST['num'].';';
		$result = mysqli_query($connection, $query);
		$r = mysqli_fetch_array($result);
		echo '<span>Name: <input type="text" name="pokename" value="'.$r['name'].'"></span><br><br>';
		echo '<span>National Number: '.$r['nat_num'].'</span><br><br>';
		echo '<input type=hidden name=natnum value='.$r['nat_num'].'>';
		echo '<span>Species name: <input type="text" name="species" value="'.$r['species_name'].'"></span><br><br>';
		echo '<span>Types: ';
	
		$query = 'select name from Types;';
		$types = mysqli_query($connection, $query);
		$query = 'select type from IsType where nat_num = '. $r['nat_num'] .';';
		$select_types = mysqli_query($connection, $query);
		$pri_type = '';
		if ($x = mysqli_fetch_array($select_types))
			$pri_type = $x['type'];
		$sec_type = '';
		if ($x = mysqli_fetch_array($select_types))
			$sec_type = $x['type'];
		
		echo '<select name="primarytype">';
		while ($t = mysqli_fetch_array($types))
		{
			echo '<option value="'.strtolower($t['name']).'"';
			if (strcmp($t['name'], $pri_type)==0)
			{
				echo ' selected="selected"';
			}
			echo '>'.$t['name'].'</option>';
		}
			
		echo '</select>';
		
		echo '<select name="secondarytype">';
		$query = 'select name from Types';
		$types = mysqli_query($connection, $query);
		while ($t = mysqli_fetch_array($types))
		{
			echo '<option value="'.strtolower($t['name']).'"';
			if (strcmp($t['name'], $sec_type)==0)
			{
				echo ' selected="selected"';
			}
			echo '>'.$t['name'].'</option>';
		}

		echo '<option value="null"';
		if ($sec_type == '')
			echo ' selected="selected"';
		echo '>Null</option>';
		echo '</select>';
		echo '</span><br><br>';
		
		

		echo '<span>Height: <input type=text name=height value="'.$r['height'].'">m</span><br><br>';
		echo '<span>Weight: <input type=text name=weight value="'.$r['weight'].'">kg<span><br><br>';
		echo '<span>Catch Rate: <input type=text name=cr value=';
		if ($r['catch_rate'])
			echo $r['catch_rate'];
		else
			echo '0';
		echo '></span><br><br>';
		$gender = explode('-', $r['gender_ratio']);
		echo '<span>Gender Ratio (M|F): <input type=text name=male value="'.$gender[0].'"> <input type=text name=female value="'.$gender[1].'"></span><br><br>';

		$query = 'select ability_name from Norm_Ability where nat_num = '.$r['nat_num'].';';
		echo '<span>Abilities: ';
		$abilities = mysqli_query($connection, $query);
		echo '<input type=text name=primaryability value="';
		if ($a = mysqli_fetch_array($abilities))
			echo $a['ability_name'];
		else
			echo 'NULL';
		echo '">';
		echo '<input type=text name=secondaryability value="';
		if ($a = mysqli_fetch_array($abilities))
			echo $a['ability_name'];
		else
			echo 'NULL';
		echo '">';
		echo '</span><br><br>';
		echo '<span>Hidden Ability: ';
		echo '<input type=text name=hiddenability value="';
		$query = 'select ability_name from Hidden_Ability where nat_num = '.$r['nat_num'].';';
		$abilities = mysqli_query($connection, $query);
		if ($a = mysqli_fetch_array($abilities))
			echo $a['ability_name'];
		else
			echo 'NULL';
		echo '"></span><br><br>';
		echo '<span>Pokedex Entry: <br> <textarea rows=5 cols=40 name=dexentry>';
		echo $r['pokedex_desc'];
		echo '</textarea></span><br><br>';
		echo '<input type=submit value=Submit>';
	echo '</form><br><br>';
	
	?>
	
	</div>
</body>
</html>
