<html>
<head>
<title>Edit Hoenn</title>
<meta charset="utf-8">
<link rel="stylesheet" href="pokemon_style.css" />
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
	<?php
	if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
	{ } else { echo "No connection"; }
	$query = "select * from Region where name = \"" . $_POST['name'] . "\";";
	$r = mysqli_fetch_array(mysqli_query($connection, $query));
	?>

	<div class="wrap">
	<form action="" method="post">
		<span>Name: <input type="text" name="pokename" value=<?php echo $r['name']?>></span><br><br>
		<span>Generation: <input type=text name=height value=<?php echo $r['generation'];?>></span><br><br>
		<span>Region Description: <br> <textarea rows=5 style="resize:none;" cols=40 ><?php echo $r['description']; ?></textarea></span><br><br>
		<input type=submit value=Submit>
	</form><br><br>
	<a href="viewregion.php">Go Back</a>
	
	</div>
</body>
</html>
