﻿<html>
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
		
		<div class="pokedex-desc">
		<h3> Pokedex Description </h3>
		<p>Bulbasaur can be seen napping in bright sunlight. There is a seed on its back. By soaking up the sun's rays, the seed grows progressively larger. </p>
		</div>

		<div class="poke-blurb">
		<img src="Bulbasaur-main.jpg" class="poke">
		<br>
		<h3 style="margin: auto"> Bulbasaur #001 </h3>
		<span>Type: </span><span class="grass">Grass</span><span class="poison">Poison</span><br>
		<p>Abilities: Overgrow</p>
		<p>Hidden Abilities: Chlorophyll</p>
		<p>Catch Rate: 45</p>
		<p>Height: 0.7m | Weight: 6.9kg</p>
		<span>Gender ratio: </span><span style="color: blue">87.5%</span>|<span style="color: pink">12.5%</span>
		<p><a href="editpokemon.php">Edit this Pokemon</a></p>
		</div>
		
		<div class="movelist">
			<center>
			
			<table class="moves">
                <caption><h3>Moveset</h3></caption>
				<tr>
					<th>Name</th>
					<th>Type</th>
					<th>Category</th>
				</tr>
				<tr>
					<td>Tackle</td>
					<td class="normal">Normal</td>
					<td class="physical">Physical</td>
				</tr>
				<tr>
					<td>Growl</td>
                                        <td class="normal">Normal</td>
					<td class="status">Status</td>
				</tr>
					<td>Leech Seed</td>                                                  
                                        <td class="grass">Grass</td>                                                            
                                        <td class="status">Status</td>
				</tr>
				<tr>
					<td>Vine Whip</td>
                                        <td class="grass">Grass</td>                                                            
                                        <td class="physical">Physical</td>
				</tr>
				<tr>
					<td>Poison Powder</td>                         
                                        <td class="poison">Poison</td>                                                            
                                        <td class="status">Status</td>
				</tr>
					<td>Sleep Powder</td>
					<td class="grass">Grass</td>
					<td class="status">Status</td>
				</tr>
				<tr>
					<td>Razor Leaf</td>
					<td class=grass>Grass</td>
					<td class=physical>Physical</td>
				</tr>
				<tr>
					<td>Take Down</td>
					<td class=normal>Normal</td>
					<td class=physical>Physical</td>
				</tr>
				<tr>
					<td>Sweet Scent</td>
					<td class=normal>Normal</td>
					<td class=status>Status</td>
				</tr>
				<tr>
					<td>Growth</td>
					<td class=normal>Normal</td>
					<td class=status>Status</td>
				</tr>
				<tr>
					<td>Double-Edge</td>
					<td class=normal>Normal</td>
					<td class=status>Status</td>
				</tr>
				<tr>
					<td>Solar Beam</td>
					<td class=grass>Grass</td>
					<td class=special>Special</td>
				</tr>
			</table>
			</center>
		</div>
	</div>
</body>

</html>
