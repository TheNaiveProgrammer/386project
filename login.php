﻿<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8"/>
  <link href="login.css" rel="stylesheet" type="text/css"/>
  <script src="login.js"></script>
</head>

<a href="index.php">Back to Menu</a>
<form>
<div class="container">
  <label for="uname"><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="uname" required>
  <br>

  <label for="psw"><b>Password</b></label>
  <input type="password" id="input" placeholder="Enter Password" name="psw" required>
  <br>

  <button type="submit" class="loginbtn">Login</button>
  <button type="button" class="cancelbtn">Cancel</button>

  <label>
    <br>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    <input type="checkbox" checked="checked" onclick="showPass()" name="hide"> Hide password
    </label>
</div>
<!--
<div class="container" style="background-color:#f1f1f1">
  <span class="psw">Forgot <a href="#">password?</a></span>
</div>-->
</form>
