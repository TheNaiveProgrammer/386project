﻿<html>
<head>
<?php
if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
{ } else { echo "No connection<br>"; }


if (isset($_POST['query']))
{
	
}


$query = "select * from Types where name = \"" . $_POST['type'] . "\";";
$type = mysqli_fetch_array(mysqli_query($connection, $query));
?>
<title>Edit <?php echo $type['name']; ?></title>
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
	<form action="edittype.php" method="post">
		<input type=hidden name=query value=q />
		<input type=hidden name=type value="<?php echo $_POST['type']; ?>"/>
		<span>Name: <?php echo $type['name']; ?></span><br><br>
		<span>Strong Against: <input type=text name=sa value="<?php
			$query = "select defending from Strong_Against where attacking = \"" . $type['name'] . "\";";
			$SA = mysqli_query($connection, $query);
			if ($sa = mysqli_fetch_array($SA))
				echo $sa['defending'];
			while ($sa = mysqli_fetch_array($SA))
			{
				echo ", ";
				echo $sa['defending'];
			}
		?>"></span><br><br>
		<span>Weak Against: <input type=text name=wa value="<?php
			$query = "select defending from Weak_Against where attacking =\"" . $type['name'] . "\";";
			$WA = mysqli_query($connection, $query);
			if ($wa = mysqli_fetch_array($WA))
				echo $wa['defending'];
			while ($wa = mysqli_fetch_array($WA))
			{
				echo ", ";
				echo $wa['defending'];
			}
		?>"><span><br><br>
		<input type=submit value=Submit>
	</form><br><br>
	<a href="viewtype.php">Go Back</a>
	
	</div>
	<?php mysqli_close($connection); ?>
</body>
</html>
