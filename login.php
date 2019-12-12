
<?php
  session_start();
  if ($connection = @mysqli_connect('localhost', 'pmouw1', 'pmouw1', 'PokemonDB'))
	{ } else { echo "No connection"; }
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8"/>
  <link href="login.css" rel="stylesheet" type="text/css"/>
  <script src="login.js"></script>
  <title>
  Login
  </title>
</head>

<body>
<a href="index.php">Back to Menu</a>
<form method='post' action='login.php'>
<div class="container">
  <label for="uname"><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="uname" required>
  <br>

  <label for="psw"><b>Password</b></label>
  <input type="password" id="input" placeholder="Enter Password" name="psw" required>
  <br>

  <input type="submit" class="loginbtn" value='Login'>
  

  <label>
    <br>
   
    <input type="checkbox" checked="checked" onclick="showPass()" name="hide"> Hide password
    </label>
</div>
<!--
<div class="container" style="background-color:#f1f1f1">
  <span class="psw">Forgot <a href="#">password?</a></span>
</div>-->
</form>

<?php 

if(isset($_POST['uname']) && isset($_POST['psw'])){

    $query = "SELECT * FROM Accounts WHERE username = '" . $_POST['uname'] . "' AND pass= '" . $_POST['psw'] . "'; " ;
    print $query;
  $r = mysqli_query($connection, $query);
  $row=mysqli_fetch_array($r);
   
   if($row){
      print "HELLO";
   $_SESSION['username'] = $_POST['uname'];
   $_SESSION['password'] = $_POST['psw'];
  header('Location: index.php');
  
   } else{
  print "INVALID USERNAME OR PASSWORD";
   }
     
   
    
    }
?>
</body>