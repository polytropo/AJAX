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
        // If you are stringifying a JSON file itself, then you need to parse it two times!
    	// var obj = JSON.parse(JSON.parse(text));

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