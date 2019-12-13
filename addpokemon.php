<!DOCTYPE HTML>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Add  </title>
    <link rel="stylesheet" type="text/css" href="add.css">
  
    <script src="add.js"> </script>
   
</head>

<body>
<?php
if($connection = @mysqli_connect('localhost','lmartin9', 'Ballislife93!', 'PokemonDB')){
		//print "Connection";
		} else {
        	print "No Connection";
		}
		
		$query = "SELECT name FROM Types ORDER BY name;";
		$r = mysqli_query($connection, $query);
		$r2 = mysqli_query($connection, $query);
		$r3 = mysqli_query($connection, $query);
		
		?>
    <a href="index.php"> Back to Menu </a>

    <br>



    <!-- NatNum_Pokemon(nat_num, gender_ratio, hatch_time, species_name, pokedex_desc, catch_rate)

    Form_Pokemon(nat_num, form, name, height, weight) -->
    <ul style=" list-style-type:none ">
        <li style="text-align:center"><button id="pokemon" class="selected" onclick="select(0)">New Pokemon</button></li>
        <li style="text-align:center"><button id="region" class="unselected" onclick="select(1)">New Region </button></li>
        <li style="text-align:center"><button id="type" class="unselected" onclick="select(2)">New Type</button></li>
        <li style="text-align:center"><button id="move" class="unselected" onclick="select(3)">New Move</button></li>
        <li style="text-align:center"><button id="ability" class="unselected" onclick="select(4)">New Ability</button></li>
    </ul>
    <div id="pokediv" class=" div_select">
        <form name="form0" action="postpokemon.php"  method="post">
            <!-- this php file will take us back home :) -->




            <span>Name:<br> <input type="text" name="name"> </span>
            <br>
            <br>
            <br>

            <span>National Number:<br> <input type="number" name="nat_num"> </span>

            <br>
            <br>
            <br>
            
                        <span>Type:<br><select name="type"><?php 
            while($row2=mysqli_fetch_array($r2)){ 
            echo "<option value='" . $row2['name'] . "'>" . $row2['name'] . "</option>" ;
            } ?></select>  </span>
            
            <br>
            <br>
            <br>
            
         <span>Secondary Type:<br><select name="type2"><option value="NULL">Null</option>
         <?php 
            while($row3=mysqli_fetch_array($r3)){ 
            echo "<option value='" . $row3['name'] . "'>" . $row3['name'] . "</option>" ;
            } ?></select>  </span>
            
            <br>
            <br>
            <br>
            <!----
            <span> Species Name:<br>  <input type="text" name="name"> </span>
            <br>
            <br>
            <br>

                <span>Height:<br> <input type="text" name="power"> </span>

                <br>
                <br>
                <br>

                <span>weight:<br> <input type="text" name="power"> </span>

                <br>
                <br>
                <br>

                <span>Gender Ratio:<br> <input type="text" name="power"> </span>

                <br>
                <br>
                <br>

                <span>Catch Rate:<br> <input type="text" name="power"> </span>

                <br>
                <br>
                <br>

                <span>Hatch Time (in steps):<br> <input type="text" name="power"> </span>

                <br>
                <br>
                <br>

           <br>
    <br>
    <br>
    --->
            <!--
                     <span>
                Pokedex Description: <br>
                <textarea rows="10" cols="50" id="bio" name="bio"></textarea>

            </span>
            <br>
            <br>
                -->
            <input onclick="return check(0)" type="submit" value="Submit">

            <br><br>
        </form>
    </div>
    <div class="divunselect" id="regiondiv">
        <form name="form1" action="postregion.php" method="post">
            <!-- this php file will take us back home :) -->







            <span> Name:<br>  <input type="text" name="name"> </span>

            <br>

            <br>

            <br>
            <span> Generation:<br>  <input type="number" name="gen"> </span>

            <br>

            <br>

            <br>

	    <span> Description: <br> <textarea name="desc" style ="resize:none;" rows=5 cols=40></textarea></span>


	    <br>
	    <br>
	    <br>

            <input onclick="return check(1)" type="submit" value="Submit">





            <br><br>

        </form>    
    </div>

    <div class="divunselect" id="typediv">
        <form name="form2" action="posttype.php" method="post">
            <!-- this php file will take us back home :) -->
            <span> Type:<br>  <input type="text" name="type"> </span>

            <br>

            <br>

            <br>


            <input onclick="return check(2)" type="submit" value="Submit">

        </form>
</div>

    <div class="divunselect" id="movediv">

        <form name="form3" action="postmove.php" method="post">
            <!-- this php file will take us back home :) -->





            <span> Move Name:<br>  <input type="text" name="name"> </span>

            <br>

            <br>

        


            <span>Type:<br><select name="type"><?php 
            while($row=mysqli_fetch_array($r)){ 
            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>" ;
            } ?></select>  </span>
            
            <br>
            <br>
            
            <span>Base Power:<br> <input type="number" name="power"> </span>
            
            <?php mysqli_close($connection); ?>



            <br>

            <br>
            <span>Attack Mode:<br> <select name="attack_mode">
            <option value="Physical">Physical</option>
            <option value="Special">Special</option> 
            <option value="Status">Status</option> 
            </select>
            </span>

            <br>
            <br>
            <br>

          <input onclick="return check(3)" type="submit" value="Submit">



            <br><br>

        </form>
    </div>

    <div class="divunselect" id="abilitydiv">
        <form name="form4" action="postability.php" method="post">
            <!-- this php file will take us back home :) -->





            <span>Name:<br>  <input type="text" name="name"> </span>

            <br>

            <br>

            <br>



            <span> Effect Description:<br>  <textarea style="resize:none"rows="8" cols="40" id="bio" name="bio"></textarea> </span>

            <br>

            <br>

            <br>



            <input onclick="return check(4)" type="submit" value="Submit">



            

        </form>
    </div>
</body>


</html>