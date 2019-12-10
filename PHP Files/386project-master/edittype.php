<html>
<head>
<title>Edit Electric</title>
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
