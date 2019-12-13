<?php
	if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
	{ } else { echo "No connection"; }
?>
<html>
<head>
<title>Edit Hoenn</title>
<meta charset="utf-8">
<link rel="stylesheet" href="pokemon_style.css" />
      <link href="sidebar_them.css" rel="stylesheet" type="text/css" /> 


      
      <?php
      if(isset($_POST['sub'])){
	$q = "UPDATE Region SET generation = " . $_POST['generation'] . ", description = '" . $_POST['description'] . "' WHERE name = '" . $_POST['n'] . "';";
	//print $q;
	mysqli_query($connection, $q);
		$query = "select * from Region where name = \"" . $_POST['n'] . "\";";
	$r = mysqli_fetch_array(mysqli_query($connection, $query));
	} else {
		$query = "select * from Region where name = \"" . $_POST['name'] . "\";";
	$r = mysqli_fetch_array(mysqli_query($connection, $query));
	}
      ?>
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


	?>

	<div class="wrap">
	<br>
	<form action="editregion.php" method="post">
		<span>Name: <?php echo $r['name']?></span><br><br>
		<span>Generation: <input type=text name=generation value=<?php echo $r['generation'];?>></span><br><br>
		<span>Region Description: <br> <textarea rows=5 style="resize:none;" name="description" cols=40 ><?php echo $r['description']; ?></textarea></span><br><br>
		<input type=hidden name="n" value=<?php echo "\"" . $r['name'] . "\"" ?>>
		<input type=submit name="sub" value=Submit>
	</form>
	
	<br><br>
	
	
	<form action="viewregion.php" method=post>
	<input type=submit value="Go back">
	<input type=hidden name=name value=<?php echo "\"" . $r['name'] . "\"" ?>>
	</form>
	
	</div>
</body>
</html>
