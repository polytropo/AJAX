

    function readFile(file, callback) {

    var rawFile = new XMLHttpRequest();

    rawFile.overrideMimeType("application/json");

    rawFile.open("GET", file, true);

    rawFile.onreadystatechange = function() {

        if (rawFile.readyState === 4 && rawFile.status == "200") {

            callback(rawFile.responseText);

        }

    }

    rawFile.send(null);

}


//usage:
    var myObject, myJSON, text, obj;
    myObject = readFile("mydata.json", function(text){

    var data = JSON.parse(text);

    console.log(data);

});

myJSON = JSON.stringify(myObject);

localStorage.setItem("localStorage1", myJSON);