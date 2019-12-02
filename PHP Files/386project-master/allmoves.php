<html>
<head>

    <title>All Moves</title>
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
            width: 100%;
            max-width: 1000px;
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
                        <tr>
                            <td scope="row"><a href="viewmove.php">Thunderbolt</a></td>

                            <td>Electric</td>
                            <td>100</td>

                        </tr>
                        <tr>
                            <td scope="row"><a href="#">Flamethrower</a></td>
                            <td>Fire</td>
                            <td>90</td>

                        </tr>
                        <tr>
                            <td scope="row"><a href="#">Sleep Powder</a></td>
                            <td>Grass</td>
                            <td>-</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>