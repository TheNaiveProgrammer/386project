<html>
<head>
<title>Edit Electric</title>
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
		<span>Name: <input type="text" name="pokename" value="Electric"></span><br><br>
		<span>Strong Against: <input type=text name=height value="Water, Flying"></span><br><br>
		<span>Weak Against: <input type=text name=weight value="Ground"><span><br><br>
		<span>Type Description: <br> <textarea rows=5 cols=40 name=dexentry>Bulbasaur can be seen napping in bright sunlight. There is a seed on its back. By soaking up the sun's rays, the seed grows progressively larger.</textarea></span><br><br>
		<input type=submit value=Submit>
	</form><br><br>
	<a href="viewtype.php">Go Back</a>
	
	</div>
</body>
</html>
