<html>
<head>

    <title>All Abilities</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="sidebar_them.css" rel="stylesheet" type="text/css" /> 

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
            <a href="addpokemon.php" style="float:right">Add Ability</a>
            <h1>List of Abilities</h1>
            <p>Below is the table listing the abilities pokemon are able to have. To see more information, click the link.</p>
        </div>

        Sort By: <select>
            <option value="name">Name</option>
            <option value="type">Generation</option>

        </select>

        <form style="margin-left:150px;display:inline-block">

            <input type="text" placeholder="Search..." style="margin-left:5px;">
            By
            <select>
                <option value="name">Name</option>
                <option value="type">Generation</option>

            </select>
            <input type="submit" value="Go">
        </form>

        <div class="row">
            <div class="col-12">
                <table class="table table-image">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Generation Introduced</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"><a href="viewability.php">Flash Fire</a></td>
                            <td class="num">3</td>


                        </tr>
                        <tr>

                            <td scope="row"><a href="#">Moody</a></td>

                            <td class="num">5</td>


                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>