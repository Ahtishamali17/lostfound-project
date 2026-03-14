function submitLost(){

let formData=new FormData();

formData.append("title",document.getElementById("lostTitle").value);
formData.append("description",document.getElementById("lostDesc").value);

let image=document.getElementById("lostImage").files[0];

if(image){

formData.append("image",image);

}

fetch("lost.php",{

method:"POST",
body:formData

})

.then(res=>res.text())

.then(data=>{

document.getElementById("result").innerHTML=data;

});

}



function submitFound(){

let formData=new FormData();

formData.append("title",document.getElementById("foundTitle").value);
formData.append("description",document.getElementById("foundDesc").value);

let image=document.getElementById("foundImage").files[0];

if(image){

formData.append("image",image);

}

fetch("found.php",{

method:"POST",
body:formData

})

.then(res=>res.json())

.then(data=>{

document.getElementById("result").innerHTML=
"Similarity: "+data.similarity+"%";

if(data.image){

document.getElementById("matchImage").src=data.image;

}

});

}