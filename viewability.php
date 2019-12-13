<?php
session_start()
?>

<html>
<head>

<title>Flash Fire</title>
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
<?php
	if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
	{} else { echo "no connection"; }
	$query = "select * from Abilities where name = \"" . $_POST['ability'] . "\";";
	
       	$r = mysqli_fetch_array(mysqli_query($connection, $query));	
?>
	<div class="wrap">
		
		<div class="pokedex-desc">
		<a href = "index.php">Back to Menu</a>
		<?php
		if(isset($_SESSION['username'])){
		      echo "<span  style='float:right;'> Username: " . $_SESSION['username'] . "</span>" ;
		  
		} else {
		echo "<a href='login.php' style='float:right;'>Admin Login</a>";
		}
		?>
		<h3> Ability Effect</h3>
		<p><?php echo $r['description']; ?></p>
		<br>

		
	</div>
        
        <div class="poke-blurb">
		<h3><?php echo $r['name']; ?></h3>
	<form action="editability.php" method="post">
	<input type="hidden" name="ability" value=<?php echo "\"".$r['name']."\""?>>
	<input type=submit value="Edit this ability">
	</form>
       <?php
	if(array_key_exists('del', $_POST)) {
	$query= "delete from Abilities where name = \"" . $r['name'] . "\";";
	if (mysqli_query($connection, $query)){ 
		mysqli_close($connection);
		header("Location: allabilities.php");
		} else { echo "ERROR DELETING<br>" . $query; }
	 
		//THIS IS WHERE WE WRITE QUERY TO DELETE POKEMON
		}
		if(isset($_SESSION['username'])){
				echo " <form method='post'>
						<input type='submit' value='Delete'/>
						<input type='hidden' name='del' value='delete'/>
						<input type='hidden' name='ability' value='".$r['name']
						."'/></form>";
		}

	?>
	</div>

	<div class="movelist">
	<center>
	<table class="moves">
	<caption><h3>Pokemon with this Ability</h3></caption>
		<tr>
		<th>Pokemon</th>
		<th>Type</th>
		</tr>
		<?php
		$query = "select Pokemon.nat_num, Pokemon.name from Pokemon, (select * from Norm_Ability union select * from Hidden_Ability) as A where Pokemon.nat_num = A.nat_num and A.ability_name = \"" . $r['name'] . "\";";
		$poke = mysqli_query($connection, $query);
		while ($p = mysqli_fetch_array($poke)) 
		{
			echo "<tr>";
			echo "<td>";
			echo "<form method=post action=viewpokemon.php>";
			echo "<input type=hidden name=poke value=\"" . $p['nat_num'] . "\">";
			echo "<input type=submit value=\"" .$p['name'] . "\">";
			echo "</form>";
		       	echo "</td>";
			$query = "select type from IsType where nat_num = " . $p['nat_num'] . ";";
			$type = mysqli_query($connection, $query);
			echo "<td>";
			while ($t = mysqli_fetch_array($type))
			{
				echo "<span class=" . strtolower($t['type']) . ">" . $t['type'] . "</span>";
			}
			echo "</tr>";
		}
		?>
	</table>
	</center>
	</div>

	</div>
<?php mysqli_close($connection); ?>
</body>

</html>

