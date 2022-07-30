<?php
// We only say what we print from this file, is a type of JASON file(it says that this file is a type of JSON. it doesnt create API)
header('Content-Type: application/json');

// You are saying just to add an extra layer of security, to bring all the data from DB.
// (bcause we bring data, so we use GET method)
// bring data: GET
// create record(data): POST
// update a record: PUT
// delete a record: DELETE
header('Access-Control-Allow-Method: GET'); //It means this line need a GET method
require_once 'components/db_connect.php';
require_once 'toolBox.php'; 


// how to create an API? You just need to return sth(e.g bring all the data)
if($_SERVER['REQUEST_METHOD'] == "GET"){ //because it brings all the data, the method is GET. so we confirm that the mthod is GET

  $sql = "SELECT * FROM real_estate";

  $result = mysqli_query($connect, $sql); //run the query

    if($result){ //if the query runs and everything is fine

    $row = mysqli_fetch_all($result, MYSQLI_ASSOC); // fetch all the data at once(making it as an associative array)

    response(200, "Data fetched succesfully", $row); // *****Create API*****
    //calling the response function(status, message, data => from toolBox.php) ($data is $row)
    //I will see a string that inside that, there is an obj: "{status: 200, "Data fetched succesfully", data: $row}"
    }
    else{
        response(400, 'error: '.mysqli_error($connect));
    
    }  
}

mysqli_close($connect);


// ************************************
// A tool to test API: download and install "insomnia api"
// 1. copy the link of this page from url(http://localhost/PHP/serri_api_live_coding-master/userApi/displayAll.php) and paste it into the Insomnia page
// 2. next to it, choose the method: GET
// 3. click send
// 4. in the right column, we see an obj(with "status", "message", "data")