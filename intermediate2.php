<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="show"></div>

	
	<script>
		var text = localStorage.getItem("mystorage1");
		// console.log(text);

    	var obj = JSON.parse(text);
    	
    	console.log(obj.id);
    	console.log("--------------------------------");
    	console.log(typeof(obj));
    	console.log("--------------------------------");
    	console.log(obj);
    	document.getElementById("show").innerHTML = obj.id;
    	// for (var i = 0; i < obj.length ; i++) {
    	// 	document.getElementById("show").innerHTML += "<li>" + obj[i].name + "</li>";
    	// }

	</script>
</body>
</html>