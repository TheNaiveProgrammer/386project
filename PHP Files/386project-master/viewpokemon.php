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
		echo '<h3 style="margin: auto">' .$r['name'] . ' #'. $r['nat_num'] . '</h3>'
		?>
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

