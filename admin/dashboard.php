<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location: login.php");
}

include "../db.php";
?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Dashboard</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
margin:0;
}

.header{
background:#007BFF;
color:white;
padding:15px;
text-align:center;
}

.container{
padding:20px;
}

.card{
background:white;
padding:20px;
margin-bottom:20px;
border-radius:8px;
box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

.logout{
float:right;
background:red;
padding:8px 15px;
color:white;
text-decoration:none;
border-radius:5px;
}

h3{
border-bottom:2px solid #eee;
padding-bottom:5px;
}

</style>

</head>

<body>

<div class="header">

<h2>Admin Dashboard</h2>

<a class="logout" href="logout.php">Logout</a>

</div>

<div class="container">

<div class="card">

<h3>Lost Items</h3>

<?php

$result=$conn->query("SELECT * FROM lost_items");

while($row=$result->fetch_assoc()){
echo "<p>".$row['title']." - ".$row['description']."</p>";
}

?>

</div>

<div class="card">

<h3>Found Items</h3>

<?php

$result=$conn->query("SELECT * FROM found_items");

while($row=$result->fetch_assoc()){
echo "<p>".$row['title']." - ".$row['description']."</p>";
}

?>

</div>

</div>

</body>
</html>