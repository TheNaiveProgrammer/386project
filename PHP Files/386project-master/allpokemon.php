<html>
<head>

<title>Bootstrap Example</title>
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




    <div class="container">

        <div class="jumbotron">
            <a href="index.php">Back to Menu</a>
            <a href="addpokemon.php" style="float:right">Add Pokemon</a>
            <h1>List of Pokemon</h1>
            <p>Below is a high level overview of the Pokemon in our database. To see more detailed information, links area provided in each row.</p>
        </div>

        Sort By: <select>
            <option value="name">Number</option>
            <option value="name">Name</option>
            <option value="type">Type</option>
        </select>
        <form style="margin-left:150px;display:inline-block">

            <input type="text" placeholder="Search..." style="margin-left:5px;">
            By
            <select>
                <option value="name">Name</option>
                <option value="type">Number</option>
                <option value="base_power">Type</option>
            </select>
            <input type="submit" value="Go">
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
                        <tr>
                            <th scope="row">1</th>
                            <td class="w-25">
                                <img src="https://cdn.bulbagarden.net/upload/e/ec/001MS.png" class="img-fluid img-thumbnail img_scale" alt="Sheep">
                            </td>
                            <td><a href="viewpokemon.php">Bulbasaur</a></td>
                            <td>Grass</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td class="w-25">
                                <img src="https://cdn.bulbagarden.net/upload/b/bb/004MS.png" class="img-fluid img-thumbnail img_scale" alt="Sheep">
                            </td>
                            <td><a href="#">Charmander</a></td>
                            <td>Fire</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
