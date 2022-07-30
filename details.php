<?php

require_once 'components/db_connect.php';

$sql = "SELECT * FROM real_estate WHERE real_estate_id = $_GET[real_estate_id]";

$result = mysqli_query($connect, $sql);

$lat ="";
$lng ="";

$tbody="";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $lat ="".$row['latitude']."";
        $lng ="".$row['longitude']."";
        
        $tbody .= "     
        <div class='card mb-5 mt-5 py-4 px-3' style='max-width: 100%;'>
            <div class='row'>
              <div class='col-md-4'>
                <img src='pictures/".$row['picture']."' class='detail_img mt-5 mx-3' alt='...'>
              </div>
              <div class='col-md-8'>
                <div class='card-body'>
                  <h5 class='card-title'>".$row['advert_title']."</h5>
                  <p class='card-text'>".$row['description']."</p>
                  <p class='card-text'> <b>Size: </b>".$row['size']."</p>
                  <p class='card-text'><b>City: </b>".$row['city']."</p>
                  <p class='card-text'><b>Address: </b>".$row['address']."</p>
                  <p class='card-text'><b>Latitude: </b>".$row['latitude']."</p>
                  <p class='card-text'><b>Longitude: </b>".$row['longitude']."</p>
                </div>
                <div class='col-12 nsl'>
                <a href='update.php?real_estate_id=".$row['real_estate_id']."'><button class='button btn btn-warning ms-5' type='button'>Edit</button></a>
                <a href='delete.php?real_estate_id=".$row['real_estate_id']."'><button class='button button2 btn btn-danger' type='button'>Delete</button></a>
            </div>
              </div>
            </div>
        </div>
        "; 
    };
}else {
    $tbody="
       <tr>
         <td> colspan='5' class='text-center'>Not Data </td>
        </tr>
    ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>

<body class="body_style">
<?php require_once 'components/navbar.php' ?> 

    <div class="container">   
      <?php  
         echo $tbody;
      ?>   
    </div>

    <div id="map"></div>
    
    <?php require_once 'components/footer.php' ?>

    <script>
        var map;
        function initMap() {
            var vienna = {
                lat:  <?php echo $lat; ?>,
                lng:   <?php echo $lng; ?>
            };
            map = new google.maps.Map(document.getElementById('map'), {
                center: vienna,
                zoom: 8
            });
            var pinpoint = new google.maps.Marker({
                position: vienna,
                map: map
            });
        }
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>
