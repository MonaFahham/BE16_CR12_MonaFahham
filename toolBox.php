<?php
function response($status, $message, $data = null){ // create an obj with properties
    
    $response = new stdClass();
    $response->status = $status; // this obj has a status property
    $response->message = $message; //message should be string
    $response->data = $data; // can be an array of objects
    echo json_encode($response); //when you are making an API, you need to encode it. it means that you need to convert it to string. because API is JSON and JSON is a string. so you need to return a string
}


// Why do we make API? Because I wanna share sth in my DB.(e.g. all the info from the users) but I dont wanna bring all the columns(maybe you have a password and I dont wanna share that in my API). so I can choose which API, then I can return an obj to you

// e.g:
// {
//     status:200,
//     message: "",
//     data: [
//         {
//             ...
//         },
//         {
//             ...
//         },
//         {
//             ...
//         }
//     ]
// }