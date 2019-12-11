<html>
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
	<?php
	if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
	{ } else { echo "No connection"; }
	$query = "select * from Abilities where name = \"" . $_POST['ability'] . "\";";
	$r = mysqli_fetch_array(mysqli_query($connection, $query));
	?>
	<div class="wrap">
	<form action="posteditability.php" method="post">
	<span>Name: <?php echo $r['name']; ?></span><br><br>
	<input type=hidden name=name value= <?php echo $r['name']; ?>>
	<span>Ability Effect: <br> <textarea rows=5 cols=40 name=desc><?php echo $r['description']; ?></textarea></span><br><br>
		<input type=submit value=Submit>
	</form><br><br>
	<a href="viewability.php">Go Back</a>
	
	</div>
</body>
</html>
