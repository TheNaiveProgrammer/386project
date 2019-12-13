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

<style>
.left {
	float: left;
	padding-left: 10%;
}

.right {
	float: right;
	padding-right: 10%;
}

.strong {
	background-color: #147333;
	color: #EEEEEE;
}

.weak {
	background-color: #de3400;
	color: #EEEEEE;
}
</style>

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

	<div class=left>
	<table>
	<caption><h3>Offensive</h3></caption>
	<tr>
		<th>Strength</th>
		<th>Type</th>
	</tr>
	<?php
		$query = "select defending from Strong_Against where attacking = \"" . $type['name'] . "\";";
		$SA = mysqli_query($connection, $query);
		while ($sa = mysqli_fetch_array($SA))
		{
			echo "<tr>";
			echo "<td class=strong>";
			echo "x2";
			echo "</td>";
			echo "<td class=\"".strtolower($sa['defending'])."\">";
			echo $sa['defending'];
			echo "</td></tr>";
		}
		$query = "select defending from Weak_Against where attacking = \"" . $type['name'] . "\";";
		$WA = mysqli_query($connection, $query);
		while ($wa = mysqli_fetch_array($WA))
		{
			echo "<tr>";
			echo "<td class=weak>x1/2</td>";
			echo "<td class = \"".strtolower($wa['defending'])."\">";
			echo $wa['defending'];
			echo "</td></tr>";
		}
	?>
	</table>
	</div>

	<div class=right>
	<table>
	<caption><h3>Defensive</h3></caption>
	<tr>
		<th>Strength</th>
		<th>Type</th>
	</tr>
	<?php
		$query = "select attacking from Strong_Against where defending = \"" .$type['name'] . "\";";
		$SA = mysqli_query($connection, $query);
		while ($sa = mysqli_fetch_array($SA))
		{
			echo "<tr><td class=weak>x2</td>";
			echo "<td class=\"" . strtolower($sa['attacking']) . "\">";
			echo $sa['attacking'];
			echo "</td></tr>";
		}
		$query = "select attacking from Weak_Against where defending = \"" .$type['name'] . "\"";
		$WA = mysqli_query($connection, $query);
		while ($wa = mysqli_fetch_array($WA))
		{
			echo "<tr><td class=strong>x1/2</td>";
			echo "<td class=\"" . strtolower($wa['attacking']) . "\">";
			echo $wa['attacking'];
			echo "</td></tr>";
		}
	?>
	</table>	
	</div>
</body>

</html>

