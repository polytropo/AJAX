<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    

    
    <script>

        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "mydata.json", true);
        xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {
            
                var myJSON = xhttp.responseText;
                // If you stringify a json file itself you need to parse it two times!
                // myJSON = JSON.stringify(myJSON);
                localStorage.setItem("mystorage1", myJSON);

            }

        };
        xhttp.send();
    </script>
</body>
</html>
    