<?php
session_start();
if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
	{} else { echo "no connection"; }
	$query = "SELECT * FROM Region WHERE name='" . $_POST['name'] . "';";
	//print $query;
	
	$r = mysqli_fetch_array(mysqli_query($connection, $query));
?>
<html>
<head>

<title><?php echo $r['name'] ?></title>
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
		<h3> Region Description</h3>
		<p><?php echo $r['description']; ?></p>
        </div>
        
        <div class="poke-blurb">
        
        <h3><?php echo $r['name']; ?> Region</h3>
        <p>Generation: <?php echo $r['generation'] ?></p>
        <p><?php
        echo '<form action=editregion.php method=POST>';
		echo '<input name="name" type=hidden value="'. $r['name'] .'">';
		echo '<input type=submit value="Edit this Region">';
		echo '</form>';
        ?></p>
        
        <?php
        if(array_key_exists('del', $_POST)) {
                $query= "delete from Region where name = \"" . $r['name'] . "\";";
                if (mysqli_query($connection, $query))
                {
                        mysqli_close($connection);
                        header("Location: allregions.php");
                } else { echo "ERROR DELETING<br>" . $query; }
                //THIS IS WHERE WE WRITE QUERY TO DELETE POKEMON
                }
                if(isset($_SESSION['username'])){
                        echo " <form method='post'>
                                <input type='submit' value='Delete'/>
                                <input type='hidden' name='del' value='delete'/>
                                <input type='hidden' name='name' value='".$r['name']
                                ."'/></form>";
                }
                else{
                }
        ?>


        
        
        </div>
		
	</div>
</body>

</html>

