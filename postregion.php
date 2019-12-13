<html>
<head>
<title> Post Move</title>
<link href="index.css" rel="stylesheet" type="text/css" />
<link href="post.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div id="post">
        <div style="width:20%;display:inline-block;  float:left;">
            <ul style=" list-style-type:none;">
                <li><a href="allpokemon.php">Pokemon </a></li>

                <li><a href="allregions.php">Regions </a></li>
                <li><a href="allmoves.php">Moves </a></li>
                <li><a href="allabilities.php">Abilities</a></li>
                <li><a href="alltypes.php">Types</a></li>
            </ul>
        </div>

<?php 

if($connection = @mysqli_connect('localhost','lmartin9', 'Ballislife93!', 'PokemonDB')){
		//print "Connection";
		} else {
        	print "No Connection";
		}
		
		
		$query = "INSERT INTO Region(name,generation,description) VALUES ('" . $_POST["name"] . "', " . $_POST["gen"] . ", '" . addslashes($_POST["desc"]) ."');";
		  		//print $query;

		if(mysqli_query($connection, $query)){
		echo "<div class='postbox'> <p style='text-align: center; vertical-align:middle;line-height:250px;'>" . $_POST["name"] . " was added!</p>";
		echo "<br><br>";
		echo "<a class='link' id = 'left' href='addpokemon.php'>Add Another</a>";
		echo "<a class = 'link' id='right' href='index.php'> Back to Menu </a>";
		echo "</br>";
		} else{
		echo "<div class='postbox'> <p style='text-align: center; vertical-align:middle;line-height:250px;'>ERROR: " . $_POST["name"] . " was not added</p>";
		echo "<br><br>";
		echo "<a class='link' id = 'left' href='addpokemon.php'>Add Another</a>";
		echo "<a class = 'link' id='right' href='index.php'> Back to Menu </a>";
		echo "</br>";
		}
		 
		
		
			mysqli_close($connection);
		
?>
</body>


</html>