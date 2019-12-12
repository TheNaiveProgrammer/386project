<?php
session_start();
?>

<html>
<head>

<?php
if($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB')) { }
else { echo "No connection"; }
$query = "select * from Pokemon where nat_num='".($_POST['poke'])."';";
$result = mysqli_query($connection, $query);
$r = mysqli_fetch_array($result);
echo '<title>'.$r['name'].'</title>';
?>
<meta charset="utf-8">
<link rel="stylesheet" href="pokemon_style.css" />
<link href="sidebar_them.css" rel="stylesheet" type="text/css" /> 
<link href="link.css" rel="stylesheet" type="text/css" /> 

</head>



<main class="main">
  <aside class="sidebar">
    <nav class="nav">
      <ul>
        <li class="active"><a href="allpokemon.php">Pokemon</a></li>
        <li><a href="allregions.php">Regions</a></li>
        <li><a href="allmoves.php">Moves</a></li>
        <li><a href="allabilities.php">Abilities</a></li>
		<li><a href="alltypes.php">Types</a></li>
      </ul>
    </nav>
  </aside>
</main>



<body>
<?php


?>

	<div class="wrap">
		<?php
		if($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB')) { }
		else {
			echo "No connection";
		}
		$query = "select * from Pokemon where nat_num='".($_POST['poke'])."';";
		$result = mysqli_query($connection, $query);
		echo '<div class="pokedex-desc">';
		echo "<a href='index.php'>Back to Menu</a>";
		
		if(isset($_SESSION['username'])){
		      echo "<span  style='float:right;'> Username: " . $_SESSION['username'] . "</span>" ;
		  
		} else {
		echo "<a href='login.php' style='float:right;'>Admin Login</a>";
		}
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
		if(array_key_exists('del', $_POST)) {
			$query= "delete from Pokemon where nat_num = " . $r['nat_num'] . ";";
			if (mysqli_query($connection, $query))
			{ 
				mysqli_close($connection);
				header("Location: allpokemon.php");
			} else { echo "ERROR DELETING<br>" . $query; }

		//THIS IS WHERE WE WRITE QUERY TO DELETE POKEMON
		}
		if(isset($_SESSION['username'])){
				echo " <form method='post'>
						<input type='submit' value='Delete'/>
						<input type='hidden' name='del' value='delete'/>
						<input type='hidden' name='poke' value='".$r['nat_num']
						."'/></form>";
		}
		else{
		}

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

