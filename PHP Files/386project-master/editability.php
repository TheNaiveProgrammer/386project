﻿<html>
<head>
<title>Edit Flash Fire</title>
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
		<span>Name: <input type="text" name="pokename" value="Flash Fire"></span><br><br>
		<span>Ability Effect: <br> <textarea rows=5 cols=40 name=dexentry>Flash Fire makes the Pokémon immune to Fire-type moves and will activate when hit by one. When activated, the power of the Pokémon's Fire-type moves is increased by 50%. While subsequent hits by Fire-type moves will not provide further increases in power, the Pokémon remains immune to the moves. Flash Fire will not activate if the Pokémon is protected from the Fire-type move. Flash Fire will not work while the user is frozen.</textarea></span><br><br>
		<input type=submit value=Submit>
	</form><br><br>
	<a href="viewability.php">Go Back</a>
	
	</div>
</body>
</html>
