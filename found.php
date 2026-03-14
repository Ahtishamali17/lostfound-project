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

$conn->query("INSERT INTO found_items(title,description) VALUES('$title','$desc')");

$result=$conn->query("SELECT * FROM lost_items");

$response=[

"similarity"=>0,
"image"=>""

];

while($row=$result->fetch_assoc()){

$lostDesc=$row['description'];

$similarity=shell_exec("python nlp.py \"$lostDesc\" \"$desc\"");

$similarity=floatval($similarity)*100;

if($similarity>50){

$response["similarity"]=round($similarity,2);
$response["image"]="uploads/".$image;

break;

}

}

header("Content-Type: application/json");

echo json_encode($response);

?>