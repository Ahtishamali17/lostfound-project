<?php

include "db.php";

$title=$_POST['title'];
$desc=$_POST['description'];

$image="";

if(isset($_FILES['image'])){

$image=$_FILES['image']['name'];

move_uploaded_file(

$_FILES['image']['tmp_name'],

"uploads/".$image

);

}

$conn->query("INSERT INTO lost_items(title,description) VALUES('$title','$desc')");

echo "Lost item submitted successfully";

?>