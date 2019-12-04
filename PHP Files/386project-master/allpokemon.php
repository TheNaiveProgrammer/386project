<html>
<head>

<title>All Pokemon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
    td {
        text-align: center;
    }

    th {
        text-align: center;
    }
.container {
 
  width:100%;
  max-width:1000px;
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
	width: 75px;
	height: 75px;
}

.bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
}

.bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }

</style>


</head>

<body class="">



	<?php 
		if($connection = @mysqli_connect('localhost','lmartin9', 'Ballislife93!', 'PokemonDB')){
		} else {
        	print "No Connection";
		}
		
		?>


    <div class="container">

        <div class="jumbotron">
            <a href="index.php">Back to Menu</a>
            <a href="addpokemon.php" style="float:right">Add Pokemon</a>
            <h1>List of Pokemon</h1>
            <p>Below is a high level overview of the Pokemon in our database. To see more detailed information, links area provided in each row.</p>
        </div>

    
        <form action="allpokemon.php" method="post" name ="s" id="search" style="margin-left:100px;display:inline-block">

            <input type="text" placeholder="Search..." name="search_text" style="margin-left:5px;">
            By
            <select name="searchlist" form="search" >
                <option value="name" <?php if($_POST['searchlist'] == 'name') echo ' selected="selected"'; ?>>Name</option>
                <option value="nat_num" <?php if($_POST['searchlist'] == 'nat_num') echo ' selected="selected"'; ?>>Number</option>
               
            </select>
            <input type="submit"  name="search" value="Go">
        </form>



        <div class="row">
            <div class="col-12">
                <table class="table table-image">
                    <thead>
                        <tr>
                            <th scope="col">National Number</th>
                            <th scope="col">Image</th>
                            <th scope="col">Pokemon Name</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
			<?php 
		
  if(isset($_POST['search'])){
	    	    
	   $query = "SELECT nat_num, name FROM Pokemon WHERE " . $_POST['searchlist'] . " LIKE '%" . $_POST['search_text'] . "%' ORDER BY nat_num";
	}else {
	      $query = "SELECT nat_num, name FROM Pokemon ORDER BY nat_num;" ;
	      print "StART ONLY";
	  }
		$r = mysqli_query($connection, $query);

                        while($row=mysqli_fetch_array($r)){
                                echo "<tr>";
                                echo "<td scope='row'>" . $row['nat_num'] . "</td>";
				echo "<td> none </td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td> none </td>"; 
				echo "</tr>";
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
