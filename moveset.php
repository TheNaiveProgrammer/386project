<html>
<head>
<?php
$connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB');

if (isset($_POST['add']))
{
	$query = "insert into Can_Learn(nat_num, move_name) values (" . $_POST['poke'] . ", \"" . $_POST['add'] . "\");";
	mysqli_query($connection, $query);
}

if (isset($_POST['del']))
{
	$query = "delete from Can_Learn where nat_num = ". $_POST['poke'] . " and move_name = \"" . $_POST['del'] . "\";";
	mysqli_query($connection, $query);
}

$query = "select * from Can_Learn where nat_num=" . $_POST['poke'] . ";";
$moves = mysqli_query($connection, $query);
?>

<link rel=stylesheet href="pokemon_style.css" />

<style>
.left {
	float:left;
	padding-top: 10px;
	padding-left:10%;
}

.right {
	float: right;
	padding-top:10px;
	padding-right:10%;
}

table {
	width: 20%;
}
</style>
</head>
<body>

<div class=left>
<table>
<caption><h3>Current Moveset</h3></caption>
<tr>
	<th>Move</th>
	<th>Remove</th>
</tr>
<?php
while ($m = mysqli_fetch_array($moves))
{
	echo "<tr><td>" . $m['move_name'] . "</td>";
	echo "<td><form action=moveset.php method=post>";
	echo "<input type=hidden name=del value=\"".$m['move_name']."\">";
	echo "<input type=hidden name=poke value=\"" . $_POST['poke'] . "\">";
	echo "<input type=submit value=Remove></form>";
	echo "</td></tr>";
}
?>
</table>
<form action=viewpokemon.php method=post>
<input type=hidden name=poke value="<?php echo $_POST['poke']; ?>">
<input type=submit value="Go Back">
</form>
</div>

<div class=right>
<table>
<caption><h3>Avaliable Moves</h3></caption>
<tr>
	<th>Move</th>
	<th>Add</th>
</tr>
<?php
$query = "select name from Moves where name not in (select move_name from Can_Learn where nat_num = ". $_POST['poke'] . ");";
$M = mysqli_query($connection, $query);
while ($m = mysqli_fetch_array($M))
{
	echo "<tr><td>" . $m['name'] . "</td>";
	echo "<td><form action=moveset.php method=post>";
	echo "<input type=hidden name=add value=\"".$m['name'] . "\">";
	echo "<input type=hidden name=poke value=\"" . $_POST['poke'] . "\">";
	echo "<input type=submit value=Add></form>";
	echo "</td></tr>";
}
?>
</table>
</div>


</body>
<?php mysqli_close($connection); ?>
</html>
