<?php
session_start();
include "../db.php";

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$result=$conn->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");

if($result->num_rows>0){

$_SESSION['admin']=$username;

header("Location: dashboard.php");

}else{
$error="Invalid Login";
}

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Login</title>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#4facfe,#00f2fe);
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.login-box{
background:white;
padding:30px;
border-radius:10px;
width:300px;
box-shadow:0px 0px 15px rgba(0,0,0,0.2);
text-align:center;
}

input{
width:90%;
padding:10px;
margin:10px;
border:1px solid #ccc;
border-radius:5px;
}

button{
padding:10px 20px;
background:#4facfe;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#007BFF;
}

h2{
margin-bottom:20px;
}

.error{
color:red;
}

</style>

</head>

<body>

<div class="login-box">

<h2>Admin Login</h2>

<?php if(isset($error)){ echo "<p class='error'>$error</p>"; } ?>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

</div>

</body>
</html>