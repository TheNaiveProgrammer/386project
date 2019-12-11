<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link href="index.css" rel="stylesheet" type="text/css" /> 
        <link href="sidebar_them.css" rel="stylesheet" type="text/css" /> 
        <link href="link.css" rel="stylesheet" type="text/css" /> 

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
    <?php 
    if($connection = @mysqli_connect('localhost','lmartin9', 'Ballislife93!', 'PokemonDB')){
		//print "Connection";
		} else {
        	print "No Connection";
		}
		
		$query = "SELECT * FROM Pokemon ORDER BY RAND();";
		
		$r = mysqli_query($connection, $query);
		$row=mysqli_fetch_array($r);
		
		$type_query="SELECT type FROM IsType WHERE nat_num = " . $row['nat_num'] . ";";
		$r2 = mysqli_query($connection, $type_query);
		
		
		$ability_query = "SELECT ability_name from Norm_Ability WHERE nat_num = " . $row['nat_num'] . ";";
		$r3 = mysqli_query($connection, $ability_query);
		//print $type_query;
		
    ?>
        <h3 style="text-align:center">Random Pokemon!</h3>
        <p> <?php echo "<form method='post' action='viewpokemon.php'>Name: <input class='link' type='submit' value = '" . $row['name'] . "'> <input type='hidden' name='poke' id='poke' value=".$row['nat_num'] ."></form>";  ?></p>
        <p>Number: <?php echo $row['nat_num']; ?> </p>
        <p><?php 
          
        $it = 0;
        echo "Type: ";
        while($row2=mysqli_fetch_array($r2)){
	 echo $row2['type'] . " ";/*	   
		      
		       if($it==0){
		      
		         echo "<form  action='viewtype.php' style='float:left;' method='post'>";
		         echo "Type(s): ";
                                echo "<input type='submit' class='link' style='display:inline;' value=\"" . $row2['type'] . "\">";
                                echo "<input type='hidden' name='type'  value=\"".$row2['type'] ."\"></form>";
                                
                              } else{
				
		         echo "<form  action='viewtype.php' method='post' >";
                               echo "<input type='submit' class='link' style='display:inline; margin-left:5px;' value=\"" . $row2['type'] . "\">";
                                echo "<input type='hidden' name='type'  value=\"".$row2['type'] ."\"></form>";
                              }
                              $it++;
		  }
		  
		  if($it==0)
		    echo "Type: Unknown";
		   */ 
		  }
		  ?>
        </p>
        <p>  <?php $it = 0; 
        while($row3=mysqli_fetch_array($r3)){
		    if($it==0){
		      
		         echo "<form  action='viewability.php' style='float:left;' method='post'>";
		         echo "Abilities: ";
                                echo "<input type='submit' class='link' style='display:inline;' value=\"" . $row3['ability_name'] . "\">";
                                echo "<input type='hidden' name='ability' id='ability' value=\"".$row3['ability_name'] ."\"></form>";
                                
                              } else{
				
		         echo "<form  action='viewability.php' method='post' >";
                                echo "<input type='submit' class='link' style='display:inline; margin-left:5px;' value=\"" . $row3['ability_name'] . "\">";
                                echo "<input type='hidden' name='ability' id='ability' value=\"".$row3['ability_name'] ."\"></form>";
                              }
                              $it++;
		  }
		  
		  if($it==0)
		    echo "Abilities: None";
		    
		    ?> </p>
        <?php mysqli_close($connection); ?>
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