<html>
<head>

<title>Flash Fire</title>
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
	{} else { echo "no connection"; }
	$query = "select * from Abilities where name = \"" . $_POST['ability'] . "\";";
	
       	$r = mysqli_fetch_array(mysqli_query($connection, $query));	
?>
	<div class="wrap">
		
		<div class="pokedex-desc">
		<h3> Ability Effect</h3>
		<p><?php echo $r['description']; ?></p>
        </div>
        
        <div class="poke-blurb">
		<h3><?php echo $r['name']; ?></h3>
	<form action="editability.php" method="post">
	<input type="hidden" name="ability" value=<?php echo "\"".$r['name']."\""?>>
	<input type=submit value="Edit this ability">
	</form>
        </div>
		
	</div>
<?php mysqli_close($connection); ?>
</body>

</html>

