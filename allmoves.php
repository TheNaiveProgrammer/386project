<html>
<head>

    <title>All Moves</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=stylesheet href="pokemon_style.css"/>
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
            <a href="addpokemon.php" style="float:right">Add Move</a>
            <h1>List of Moves</h1>
            <p>Below is the table listing the moves pokemon are able to use in battle. To see more ingormation, click the link.</p>
        </div>

        Sort By: <select>
            <option value="name">Name</option>
            <option value="type">Type</option>
            <option value="base_power">Base Power</option>
        </select>

        <form style="margin-left:150px;display:inline-block">

            <input type="text" placeholder="Search..." style="margin-left:5px;">
            By
            <select>
                <option value="name">Name</option>
                <option value="type">Type</option>
                <option value="base_power">Base Power</option>
            </select>
            <input type="submit" value="Go">
        </form>

        <div class="row">
            <div class="col-12">
                <table class="table table-image">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Base Power</th>
                        </tr>
                    </thead>
		    <tbody>
			<?php
			if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
			{} else { echo "No connection<br>"; }
			
			$query = "select * from Moves";
			$moves = mysqli_query($connection, $query);
			while ($m = mysqli_fetch_array($moves))
			{
				echo "<tr>";
				echo "<td><form action=viewmove.php method=post>";
				echo "<input type=hidden name=move value=\"" . $m['name'] . "\">";
				echo "<input type=submit value=\"" . $m['name'] . "\">";
				echo "</form></td>";

				echo "<td><span class=" . strtolower($m['movetype']) . ">" . $m['movetype'] . "</span></td>";
				echo "<td>";
				if ($m['base_power'] == 0)
					echo "---";
				else
					echo $m['base_power'];
				echo "</td>";
				echo "</tr>";
			}
			?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
