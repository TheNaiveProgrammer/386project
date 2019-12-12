<?php
session_start();
?>

<html>
<head>
<?php
if ($connection = mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
{ } else { echo "No connection"; }

$query = "select * from Types where name = \"" . $_POST['type'] . "\";";
$type = mysqli_fetch_array(mysqli_query($connection, $query));
?>
<title><?php echo $type['name']; ?></title>
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


	<div class="wrap">
		
		<div class="pokedex-desc">
        </div>
        
        <div class="poke-blurb">
	<h3><?php echo $type['name']; ?> Type</h3>
	
	<form action="edittype.php" method=post>
	<input type=hidden name=type value="<?php echo $type['name']; ?>"/>
	<input type=submit value="Edit This Type"/>
	</form>	
	<?php
	if(array_key_exists('del', $_POST)) {
	$query= "delete from Types where name = \"" . $type['name'] . "\";";
	if (mysqli_query($connection, $query)){ 
		mysqli_close($connection);
		header("Location: alltypes.php");
		} else { echo "ERROR DELETING<br>" . $query; }
	 
		//THIS IS WHERE WE WRITE QUERY TO DELETE POKEMON
		}
		if(isset($_SESSION['username'])){
				echo " <form method='post'>
						<input type='submit' value='Delete'/>
						<input type='hidden' name='del' value='delete'/>
						<input type='hidden' name='type' value='".$type['name']
						."'/></form>";
		}

	?>


        </div>
		
	</div>
</body>

</html>

