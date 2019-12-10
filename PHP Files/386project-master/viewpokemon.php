<html>
<head>

<title>Bulbasaur</title>
<meta charset="utf-8">
<link rel="stylesheet" href="pokemon_style.css"

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
		<?php
		if($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB')) { }
		else {
			echo "No connection";
		}
		$query = "select * from Pokemon where name='".($_POST['poke'])."';";
		$result = mysqli_query($connection, $query);
		echo '<div class="pokedex-desc">';
		echo '<h3> Pokedex Description </h3>';
		$r = mysqli_fetch_array($result);
		echo "<p>" . $r['pokedex_desc'] . "</p>";
		echo '</div>';
		
		echo "<div class='poke-blurb'>";
		echo '<img src="'. $r['name'] .'.jpg" class="poke">';
		echo '<br>';
		echo '<h3 style="margin: auto">' .$r['name'] . ' #'. $r['nat_num'] . '</h3>';
		$query = "select type from IsType where nat_num = " . $r['nat_num'] . ";";
		$types = mysqli_query($connection, $query);
		echo '<span>Type: </span>';
		while ($row = mysqli_fetch_array($types))
			echo '<span class="'.strtolower($row['type']).'">'.$row['type'].'</span>';
		echo '<br>';
		echo '<p>Abilities: ';
		$query = 'select ability_name from Norm_Ability where nat_num = '. $r['nat_num'].';';
		$ability = mysqli_query($connection, $query);
		if ($row = mysqli_fetch_array($ability))
			echo $row['ability_name'];
		if ($row = mysqli_fetch_array($ability))
			echo ', ' . $row['ability_name'];
		echo '</p>';
		echo '<p>Hidden Abilities: ';
		$query = 'select ability_name from Hidden_Ability where nat_num = ' . $r['nat_num'] . ';';
		$ability = mysqli_query($connection, $query);
		if ($row = mysqli_fetch_array($ability))
			echo $row['ability_name'];
		else
			echo 'None';
		echo '</p>';
		echo '<p>Catch Rate: '.$r['catch_rate'].'</p>';
		echo '<p>Height: '.$r['height'].'m | Weight: '.$r['weight'].'kg</p>';
		echo '<span>Gender ratio: '.$r['gender_ratio'].'</span>';
		echo '<form action=editpokemon.php method=POST>';
		echo '<input name="num" type=hidden value="'. $r['nat_num'] .'">';
		echo '<input type=submit value="Edit this Pokemon">';
		echo '</form>';
		echo '</div>';
		
		
		echo '<div class="movelist">';
			echo '<center>';
			
			echo '<table class="moves">';
			echo '<caption><h3>Moveset</h3></caption>';
			echo '<tr>';
			echo '<th>Name</th>';
			echo '<th>Type</th>';
			echo '<th>Category</th>';
			echo '</tr>';

			$query = 'select name, attack_mode, movetype from Moves, (select * from Can_Learn where nat_num='. $r['nat_num'] .') as L where name = L.move_name;';
			$moves = mysqli_query($connection, $query);
			while ($m = mysqli_fetch_array($moves))
			{
				$t = $m['movetype'];
				$a = $m['attack_mode'];

				echo '<tr>';
				echo '<td class="">'.$m['name'] .'</td>';
				echo '<td class="'.strtolower($t).'">'.$t.'</td>';
				echo '<td class="'.strtolower($a).'">'.$a.'</td>';
				echo '</tr>';
			}
			?>
			</table>
			</center>
		</div>
	</div>
</body>

</html>

