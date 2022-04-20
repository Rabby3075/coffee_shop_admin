<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/plsql.css">

    <title>PLSQL</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['uname']))
{
    header('Location: ../view/login.html');
}
include '../view/header.php';
?>
<div class="title">
    <h1>Procedures and function</h1>
</div>
<div class="heading-table">
    <p>Add bonus in manager's salary</p>
</div>
<div class="info">
   
<form action="../controller/plsqlAction.php" method="POST" enctype="multipart/form-data" name="form" onsubmit="ajax1(this); return false;">
    <label for="mid">Manager ID: </label>
    <input type="text" id="mid" name="mid">
    <span id="midErr"></span>
    <label for="sal">Add Bonus Amount: </label>
    <input type="number" id="sal" name="sal">
    <span id="salErr"></span>
    <br><br>
    <input class="submit" type="submit" id="submit1" name="submit1" value="Submit">
</form>
<hr>

<h2 id="msg1"></h2>

<hr>
</div>

<!-- 2nd ques -->
<div class="heading-table">
    <p>Delete customer by giving input his / her id</p>
</div>
<div class="info">
   
<form action="../controller/plsqlAction.php" method="POST" enctype="multipart/form-data" name="form" onsubmit="ajax2(this); return false;">
    <label for="cid">Customer ID: </label>
    <input type="text" id="cid" name="cid">
    <span id="cidErr"></span>
    <br><br>
    <input class="submit" type="submit" id="submit2" name="submit2" value="Submit">
</form>
<hr>

<h2 id="msg2"></h2>

<hr>
</div>

<!-- 3rd ques -->
<div class="heading-table">
    <p>Delete customer by giving input his / her id</p>
</div>
<div class="info">
   
<form action="../controller/plsqlAction.php" method="POST" enctype="multipart/form-data" name="form" onsubmit="ajax2(this); return false;">
    <label for="cid">Coffee Shop ID: </label>
    <input type="text" id="coid" name="coid">
    <span id="cidErr"></span>

    <label for="coname">Name: </label>
    <input type="text" id="coname" name="coname">
    <span id="cidErr"></span>

    <label for="cophone">Phone number </label>
    <input type="number" id="conumber" name="conumber">
    <span id="cidErr"></span>

    <label for="coaddress">Address </label>
    <input type="text" id="coaddress" name="coaddress">
    <span id="cidErr"></span>

    <label for="cozipcode">Zipcode </label>
    <input type="text" id="cozip" name="cozip">
    <span id="cidErr"></span>
    <br><br>
    <input class="submit" type="submit" id="submit3" name="submit3" value="Submit">
</form>
<hr>

<h2 id="msg2"></h2>

<hr>
</div>

</body>
</html>