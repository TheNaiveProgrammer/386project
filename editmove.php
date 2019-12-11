<html>
<head>
<title>Edit Thunderbolt</title>
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
		<span>Name: <input type="text" name="pokename" value="Thunderbolt"></span><br><br>
		<span>Type: 
			<select name="primarytype">
				<option value="normal">Normal</option>
				<option value="fire">Fire</option>
				<option value="water">Water</option>
				<option value="grass">Grass</option>
				<option value="electric" selected="selected">Electric</option>
				<option value="psychic">Psychic</option>
				<option value="ice">Ice</option>
				<option value="dragon">Dragon</option>
				<option value="dark">Dark</option>
				<option value="fairy">Fairy</option>
				<option value="fighting">Fighting</option>
				<option value="flying">Flying</option>
				<option value="poison">Poison</option>
				<option value="ground">Ground</option>
				<option value="rock">Rock</option>
				<option value="bug">Bug</option>
				<option value="ghost">Ghost</option>
				<option value="steel">Steel</option>
			</select>
		</span><br><br>

		<span>Base Power: <input type=text name=height value="90"></span><br><br>
		<span>Effect Chance: <input type=text name=weight value="10%"><span><br><br>
        <span>Accuracy: <input type=text name=weight value="100%"><span><br><br>
        <span>Attack Mode: <input type=text name=weight value="Special"><span><br><br>
		<span>Move Effect: <br> <textarea rows=5 cols=40 name=dexentry>Thunderbolt does damage and has a 10% chance of paralyzing the target. Thunderbolt cannot paralyze Electric-type Pokémon.</textarea></span><br><br>
		<input type=submit value=Submit>
	</form><br><br>
	<a href="viewmove.php">Go Back</a>
	
	</div>
</body>
</html>
