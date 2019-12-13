

<?php
  session_start();
  if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
	{ } else { echo "No connection"; }
?>
<html>
<head>

<title>All Regions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="link.css" rel="stylesheet" type="text/css" /> 

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
  td, th {
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
            <a href="addpokemon.php" style="float:right">Add Region</a>
            <h1>List of Regions</h1>
            <p>Below is the table listing the Pokemon Regions in our database. To see more detailed information, links area provided in each row. </p>
        </div>

    

        <form style="margin-left:150px;display:inline-block" method='post' action='allregions.php'>

            <input type="text" placeholder="Search..." name='searchtext' style="margin-left:5px;">
            By
            <select name="searchlist">
                <option value="name" <?php if($_POST['searchlist'] == 'name') echo ' selected="selected"'; ?>>Name</option>
                <option value="generation" <?php if($_POST['searchlist'] == 'generation') echo ' selected="selected"'; ?>>Generation</option>
               
            </select>
            <input type="submit" name="search" value="Go">
        </form>

        <div class="row">
            <div class="col-12">
                <table class="table table-image">
                    <thead>
                        <tr>
                            <th scope="col">Region Name</th>
                            <th scope="col">Generation</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_POST['home'])){
			  $query = "SELECT * FROM Region WHERE name LIKE '%" . $_POST['home_search']. "%';";
	  
			}else if(isset($_POST['search'])){
			  $query = "SELECT * from Region WHERE " . $_POST['searchlist'] . " LIKE '%" . $_POST['searchtext']  .  "%'" ;
			
			} else{
			  $query = "select * from Region ORDER BY name";
			}
			//print $query;
                  $r = mysqli_query($connection, $query);
			
                        while($row=mysqli_fetch_array($r)){
                                echo "<tr><form action='viewregion.php' method='post'>";
				echo "<td><input type='submit' class='link' value=" . $row['name'] . "></td>";
				
				echo "<input type='hidden' name='poke' id='poke' value=".$row['name'] ."></form>";
				echo "<td>" . $row['generation'] . "</td></tr>";
			} 
			mysqli_close($connection);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>