﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link href="index.css" rel="stylesheet" type="text/css" /> 
    <script src="index.js"> </script>
    <title>Index</title>
</head>
<body>
    <div style="text-align: center;">
    <h1 style="text-align:center;display: inline;">Pokemon Database!</h1>
    <a href="login.php" style="margin-left: 80%; width:40%;min-width: 200px; white-space: nowrap;">Admin Log In</a>
</div>
    <div id="first">
        <div style="width:20%;display:inline-block;  float:left;">
            <ul style=" list-style-type:none;">
                <li><a href="allpokemon.php">Pokemon </a></li>

                <li><a href="allregions.php">Regions </a></li>
                <li><a href="allmoves.php">Moves </a></li>
                <li><a href="allabilities.php">Abilities</a></li>
                <li><a href="alltypes.php">Types</a></li>
                <li><a href="#">Random page </a></li>
                <li><a href="#">News </a></li>
            </ul>
        </div>
        <div style="width:55%;  display:inline-block; position:absolute; top:40%;  float:left; margin-left:5px;">
            <p style="text-align:center; margin-bottom:4px;">Get Started</p>
            <form id="searchForm">
                <input type="text" placeholder="Search..." style="text-indent:5px;width:50%; height:30px; border-radius:3px; border:solid; border-color:gray; margin-left: 5px; " />
                <select type="select" form="searchForm" style="width:24%;  height:35px;margin-left:5px; border-radius:3px; border:solid; border-color:gray;min-width:85px;">
                    <option value="Form_Pokemon">Pokemon</option>
                    <option value="Region">Region</option>
                    <option value="Moves">Moves</option>
                    <option value="Abilities">Ability</option>
                    <option value="Types">Type</option>
                </select>
                <input style="width:18%;height:35px; min-width:55px; border-style:solid; margin-left:5px;border-color:gray; background-color:transparent; "type="submit" value="Submit" />
            </form>
            <br />
           
        </div>

        <div style="border-style:solid; display:inline-block; width:13%; position:absolute; left:83%; top:30%;text-align:center;float:left;max-height:150px;">

            <button style="background:transparent; text-decoration:none; border:none;width:100%;height:150px;" onclick="addpokemon()">
                <h3>ADD</h3>
                <img src="pokeball.jpg" />
            </button>
        </div>

    </div>
    <br /><br />

    <div id="second">
        <h3 style="text-align:center">Random Pokemon!</h3>
        <p>Name: Charmander</p>
        <p>Type: Fire</p>
        <p>Abilities: Flash Fire</p>
        <p>Region: Kanto</p>
    </div>
    <div id="third">
        <h3 style="text-align:center">Contact Us</h3>
        <p>Email: Lmartin9@gulls.salisbury.edu </p>
   
        <p>Number: 571-329-1061</p>

        <p>Discord:</p>
        <br />
        <br />


    </div>
</body>
</html>