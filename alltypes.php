<html>
<head>

<?php
if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
{ } else { echo "No connection"; }


?>

    <title>All Types</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="pokemon_style.css"/>
    <link rel="stylesheet" href="link.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link href="sidebar_them.css" rel="stylesheet" type="text/css" /> 


    <style>
        td {
            text-align: center;
        }

        th {
            text-align: center;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin-left: 20%;

        }

        h4 {
            margin: 2rem 0rem 1rem;
        }

        .table-image {
            td, th

        {
            vertical-align: middle;
        }

        }

        .img_scale {
            width: 200px;
            height: 150px;
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

    <div class="container">
        <div class="jumbotron">
            <a href="index.php">Back to Menu</a>
            <a href="addpokemon.php" style="float:right">Add Type</a>
            <h1>List of Types</h1>
            <p>Below is the table listing the types pokemon and moves are able to be. To see more ingormation, click the link.</p>
        </div>


                 <form style="margin-left:150px;display:inline-block" method='post' action='alltypes.php'>

                     <input type="text" placeholder="Search..." name='searchlist' style="margin-left:5px;">
              
                     <input type="submit" value="Go" name='search' >
                 </form>

        <div class="row">
            <div class="col-12">
                <table class="table table-image">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Strong Against</th>
                            <th scope="col">Weak Against</th>

                        </tr>
                    </thead>
		    <tbody>
			<?php
			
					
		      if(isset($_POST['home'])){
			 $query = "SELECT * FROM Types WHERE name LIKE '%" . $_POST['home_search']. "%';";
	  
	               }else if(isset($_POST['search'])){
			$query = "select * from Types where name LIKE '%" . $_POST['searchlist'] . "%' ORDER BY name;";
			//print $query;
			} else {
			$query = "select * from Types ORDER BY name";
			}
			$types = mysqli_query($connection, $query);
			while ($t = mysqli_fetch_array($types))
			{
				echo "<tr>";
				echo "<td><form action=viewtype.php method=post>";
				echo "<input type=submit class='link' value=\"" . $t['name'] . "\">";
				echo "<input type=hidden name=type value=\"" . $t['name'] . "\">";
				echo "</form></td>";
				$query = "select defending from Strong_Against where attacking = \"" . $t['name'] . "\";";
				$SA = mysqli_query($connection, $query);
				echo "<td>";
				while ($sa = mysqli_fetch_array($SA))
				{
					echo "<span class=\"" . strtolower($sa['defending']) . "\">" . $sa['defending'] . "</span>";
				}
				echo "</td>";
				echo "<td>";

				$query = "select defending from Weak_Against where attacking = \"" . $t['name'] . "\";";
				$WA = mysqli_query($connection, $query);
				while ($wa = mysqli_fetch_array($WA))
					echo "<span class=\"" . strtolower($wa['defending']) . "\">" . $wa['defending'] . "</span>";
				echo "</td>";
				echo "</tr>";
			}
			?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php mysqli_close($connection); ?>

</body>
</html>
