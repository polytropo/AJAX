<!DOCTYPE html>

<html>


<body>

    <h2>Store and retrieve data from local storage.</h2>

    <p id="demo"></p>

    <script>

    var myObj, myJSON, text, obj;


    //Storing data:

    myObj = {

        "name": "Nikolaus",

        "age": 31,

        "city": "Vienna"

    };

    myJSON = JSON.stringify(myObj);

    localStorage.setItem("testJSON", myJSON);


    //Retrieving data:

    text = localStorage.getItem("testJSON");

    obj = JSON.parse(text);
    console.log(obj);
    document.getElementById("demo").innerHTML = obj;

    </script>

</body>


</html>