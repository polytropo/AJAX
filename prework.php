<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<div id="content">

<h1>The XMLHttpRequest Object</h1>

<button id="btn" type="button">Change Content</button>

</div>


<script>
 document.getElementById("btn").addEventListener("click", loadDoc);

function loadDoc() {

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {

      document.getElementById("content").innerHTML =

      this.responseText;

    }

  };

  xhttp.open("GET", "sometext.txt", true);

  xhttp.send();

}

</script>

	<script>
		function ajaxRequest()
		{
		try // Non IE Browser?
		{ // Yes
		var request = new XMLHttpRequest()
		}
		catch(e1)
		{
		try // IE 6+?
		{ // Yes
		request = new ActiveXObject("Msxml2.XMLHTTP")
		}
		catch(e2)
		{
		try // IE 5?
		{ // Yes
		request = new ActiveXObject("Microsoft.XMLHTTP")
		}
		catch(e3) // There is no AJAX Support
		{
		request = false
		}
		}
		}
		return request
		}
	</script>
</body>
</html>