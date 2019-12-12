<?php
session_start();
?>

<html>
<head>

<?php
if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
{ } else { echo "No connection<br>"; }

$query = "select * from Moves where name = \"" . $_POST['move'] . "\";";
$r = mysqli_fetch_array(mysqli_query($connection, $query));
?>

	<title><?php echo $r['name']?></title>
<meta charset="utf-8">
<link rel="stylesheet" href="pokemon_style.css" />
      <link href="sidebar_them.css" rel="stylesheet" type="text/css" /> 

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

	<div class="wrap">
		
		<div class="pokedex-desc">
		<h3> Move Effects</h3>
		<p>
		<?php
		if ($r['effect'] == '')
			echo 'This move has no additional effects beyond damage.<br>';
		else
			echo $r['effect'] . "<br>";
		?>
		 </p>
        </div>
        
        <div class="poke-blurb">
        
	<h3><?php echo $r['name']; ?></h3>
	<p>Type: <?php echo $r['movetype']; ?></p>
	<p>Base Power: <?php
		if ($r['base_power'] == '')
			echo "---";
		else
			echo $r['base_power'];
		?></p>
	<p>Effect Chance: <?php
		if ($r['effect_chance'] == 0)
			echo "---";
		else
			echo $r['effect_chance'];
	?></p>
	<p>Accuracy: <?php echo $r['accuracy']; ?></p>
	<p>Attack Mode: <span class=<?php echo strtolower($r['attack_mode']) . ">" . $r['attack_mode']; ?></span></p>
        <p><a href="editmove.php">Edit this Move</a></p>
	<?php
	if(array_key_exists('del', $_POST)) {
	$query= "delete from Moves where name = \"" . $r['name'] . "\";";
	if (mysqli_query($connection, $query)){ 
		mysqli_close($connection);
		header("Location: allmoves.php");
		} else { echo "ERROR DELETING<br>" . $query; }
	 
		//THIS IS WHERE WE WRITE QUERY TO DELETE POKEMON
		}
		if(isset($_SESSION['username'])){
				echo " <form method='post'>
						<input type='submit' value='Delete'/>
						<input type='hidden' name='del' value='delete'/>
						<input type='hidden' name='move' value='".$r['name']
						."'/></form>";
		}

	?>
	</div>
	<div class='movelist'>
	
	<center>
	<table class=moves>
	<caption><h3>Pokemon that can learn this move</h3></caption>
	<tr>
		<th>Name</th>
		<th>Type</th>
	</tr>

	<?php
	$query = "select P.nat_num, P.name from Pokemon as P, Can_Learn as L where P.nat_num = L.nat_num and L.move_name = \"" . $r['name'] . "\";";
	$poke = mysqli_query($connection, $query);
	while ($p = mysqli_fetch_array($poke))
	{
		echo "<tr>";
		echo "<td><form action=viewpokemon.php method=post>";
		echo "<input type=hidden name=poke value=" . $p['nat_num'] . "/>";
		echo "<input type=submit value=\"" . $p['name'] . "\"/>";
		echo "</form></td>";
		$query = "select type from IsType where nat_num = " . $p['nat_num'] . ";";
		$type = mysqli_query($connection, $query);
		echo "<td>";
		while ($t = mysqli_fetch_array($type))
			echo "<span class=\"" . strtolower($t['type']) . "\">" . $t['type'] . "</span>";
		echo "</td>";
		echo "</tr>";
	}
	?>
	</table>
	</div>

	</div>
</body>
<?php mysqli_close($connection); ?>
</html>

