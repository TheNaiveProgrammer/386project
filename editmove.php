<html>
<head>
<?php
if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
{ } else { echo "No connection<br>"; }


if (isset($_POST['query']))
{
	$effect = '';
	if ($_POST['effect'] !='')
		$effect = "\"". $_POST['effect'] . "\"";
	else
		$effect = "NULL";
	
	$effect_chance ='';
	if ($_POST['effectchance'] != '')
		$effect_chance = "\"" . $_POST['effectchance'] . "\"";
	else
		$effect_chance = "NULL";

	$power = '';
	if ($_POST['pow'] == '')
		$pow = "NULL";
	else
		$pow = $_POST['pow'];

	$mode = "\"" . $_POST['mode'] . "\"";
	$acc = $_POST['acc'];
	$type = "\"" . $_POST['type'] . "\"";

	$query = "update Moves set effect = " . $effect .
		", effect_chance = " . $effect_chance .
		", base_power = " . $pow .
		", attack_mode = " . $mode .
		", accuracy = " . $acc .
		", movetype = " . $type .
		" where name = \"" . $_POST['move'] . "\";";

	$updated = mysqli_query($connection, $query);
}


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
	<form action="editmove.php" method="post">
		<input type=hidden name=query value=q />
		<input type=hidden name=move value="<?php echo $m['name']; ?>"/>
		<br><span>Name: <?php echo $m['name'];  ?></span><br><br>
		<span>Type:
			<select name=type>
			<?php
			$query = "select * from Types;";
			$type = mysqli_query($connection, $query);
			while ($t = mysqli_fetch_array($type))
			{
				echo "<option value=\"".$t['name']."\"";
				if ($t['name'] == $m['movetype'])
					echo " selected=selected";
				echo ">" . $t['name'] . "</option>";
			}
			?> 
			</select>
		</span><br><br>

		<span>Base Power: <input type=text name=pow value= <?php echo $m['base_power']; ?>></span><br><br>
		<span>Effect Chance: <input type=text name=effectchance value=<?php echo $m['effect_chance']; ?>>%<span><br><br>
		<span>Accuracy: <input type=text name=acc value="<?php echo $m['accuracy']; ?>">%<span><br><br>
		<span>Attack Mode: <input type=text name=mode value="<?php echo $m['attack_mode']; ?>"><span><br><br>
		<span>Effect: </span><textarea name=effect rows=4 cols=50><?php echo $m['effect']; ?></textarea><br><br>
		<input type=submit value=Submit>
	</form><br><br>
	<form action=viewmove.php method=post>
	<input type=submit value="Go Back"/>
	<input type=hidden name=move value="<?php echo $m['name']; ?>"/>
	</form>


	<?php
		if ($updated)
			echo "<h3>Updated</h3>";
		else
			echo "<h3>Failed to update</h3>";

	?>
	</div>
</body>
</html>
