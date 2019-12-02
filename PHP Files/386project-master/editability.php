<html>
<head>
<title>Edit Flash Fire</title>
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
	<form action="" method="post">
		<span>Name: <input type="text" name="pokename" value="Flash Fire"></span><br><br>
		<span>Ability Effect: <br> <textarea rows=5 cols=40 name=dexentry>Flash Fire makes the Pokémon immune to Fire-type moves and will activate when hit by one. When activated, the power of the Pokémon's Fire-type moves is increased by 50%. While subsequent hits by Fire-type moves will not provide further increases in power, the Pokémon remains immune to the moves. Flash Fire will not activate if the Pokémon is protected from the Fire-type move. Flash Fire will not work while the user is frozen.</textarea></span><br><br>
		<input type=submit value=Submit>
	</form><br><br>
	<a href="viewability.php">Go Back</a>
	
	</div>
</body>
</html>
