<?php

// I need the connection because i am searching sth in the DB
require_once "components/db_connect.php";

$search = $_GET["price_reduction"]; //take the value from the input


$sql = "SELECT * FROM real_estate where price_reduction ='yes'"; 

$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) == 0) { // if the number of result is zero(if i have no result at all)(e.g. i write f or k, and it doesnt exist in my DB)
    echo "No Result";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p> {$row["advert_title"]}: {$row["price_reduction"]} </p>";
    }
}