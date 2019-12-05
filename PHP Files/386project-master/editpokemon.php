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
		<span>Name: <input type="text" name="pokename" value="Bulbasaur"></span><br><br>
		<span>National Number: <input type="text" name="natnum" value="001"></span><br><br>
		<span>Species name: <input type="text" name="species" value="Seed Pokemon"></span><br><br>
		<span>Types: 
			<select name="primarytype">
				<option value="normal">Normal</option>
				<option value="fire">Fire</option>
				<option value="water">Water</option>
				<option value="grass" selected="selected">Grass</option>
				<option value="electric">Electric</option>
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
			<select name="secondarytype">
                                <option value="normal">Normal</option>
                                <option value="fire">Fire</option>
                                <option value="water">Water</option>
                                <option value="grass">Grass</option>
                                <option value="electric">Electric</option>
                                <option value="psychic">Psychic</option>
                                <option value="ice">Ice</option>
                                <option value="dragon">Dragon</option>
                                <option value="dark">Dark</option>
                                <option value="fairy">Fairy</option>
                                <option value="fighting">Fighting</option>
                                <option value="flying">Flying</option>
                                <option value="poison" selected="selected">Poison</option>
                                <option value="ground">Ground</option>
                                <option value="rock">Rock</option>
                                <option value="bug">Bug</option>
                                <option value="ghost">Ghost</option>
                                <option value="steel">Steel</option>
				<option value="null">None</option>
			</select>
		</span><br><br>

		<span>Height: <input type=text name=height value="0.7">m</span><br><br>
		<span>Weight: <input type=text name=weight value="6.9">kg<span><br><br>
		<span>Catch Rate: <input type=text name=cr value=45></span><br><br>
		<span>Gender Ratio (M|F): <input type=text name=male value="87.5"> <input type=text name=female value="12.5"></span><br><br>
		<span>Abilities: <input type=text name=primaryability value=Overgrow> <input type=text name=secondaryability value=NULL></span><br><br>
		<span>Hidden Ability: <input type=text name=hiddenability value=Chlorophyll></span><br><br>
		<span>Pokedex Entry: <br> <textarea rows=5 cols=40 name=dexentry>Bulbasaur can be seen napping in bright sunlight. There is a seed on its back. By soaking up the sun's rays, the seed grows progressively larger.</textarea></span><br><br>
		<input type=submit value=Submit>
	</form><br><br>
	<a href="viewpokemon.php">Go Back</a>
	
	</div>
</body>
</html>
