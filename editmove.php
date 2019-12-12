<html>
<head>
<?php
if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
{ } else { echo "No connection<br>"; }
echo $_POST['move'];
$query = "select * from Moves where name = \"" . $_POST['move'] . "\";";
$m = mysqli_fetch_array(mysqli_query($connection, $query));
?>
<title>Edit <?php echo $m['name']; ?></title>
<meta charset="utf-8">
<link rel="stylesheet" href="pokemon_style.css">
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
	<form action="" method="post">
		<input type=hidden name=query value=q/>
		<span>Name: <input type="text" name="movename" value= <?php echo "\"". $m['name'] . "\"";  ?>></span><br><br>
		<span>Type:
			<select>
			<?php
			$query = "select * from Types;";
			$type = mysqli_query($connection, $query);
			while ($t = mysqli_fetch_array($type))
			{
				echo "<option value=\"".$t['name']."\">" . $t['name'] . "</option>";
			}
			?> 
			</select>
		</span><br><br>

		<span>Base Power: <input type=text name=pow value= <?php echo $m['base_power']; ?>></span><br><br>
		<span>Effect Chance: <input type=text name=weight value=<?php echo $m['effect_chance']; ?>>%<span><br><br>
        <span>Accuracy: <input type=text name=weight value="100%"><span><br><br>
        <span>Attack Mode: <input type=text name=weight value="Special"><span><br><br>
		<span>Move Effect: <br> <textarea rows=5 cols=40 name=dexentry>Thunderbolt does damage and has a 10% chance of paralyzing the target. Thunderbolt cannot paralyze Electric-type Pokémon.</textarea></span><br><br>
		<input type=submit value=Submit>
	</form><br><br>
	<a href="viewmove.php">Go Back</a>
	
	</div>
</body>
</html>
