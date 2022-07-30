<?php
require_once 'components/db_connect.php';
require_once 'components/file_upload.php';


if ($_POST) {   
    $advert_title = $_POST['advert_title'];
    $size = $_POST['size'];
    $room_number = $_POST['room_number'];
    $city = $_POST['city'];
    $price = $_POST['price'];
    $address = $_POST['address'];
    // $photo = $_POST['picture'];
    $price_reduction = $_POST['price_reduction'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $description = $_POST['description'];
    $uploadError = '';
    
  $photo= file_upload($_FILES['picture'],'real_estate');  

  
  $sql = "INSERT INTO real_estate ( advert_title, size, room_number, city, price, address, picture, price_reduction, latitude, longitude, description) 
  VALUES ('$advert_title','$size', '$room_number', '$city', '$price', '$address', '$photo->fileName', '$price_reduction', '$latitude', '$longitude', '$description' )";

  if (mysqli_query($connect, $sql) === true) {
      $class = "success";
      $message = " 
        <div class='container text-center justify-content-center'>
            <div class='row text-center justify-content-center'>
                

            </div>
      
          <table class='table text-center'><tr>
          <td> $advert_title </td>
          <td> $size </td>
          <td> $room_number </td>
          <td> $city </td>
          <td> $price </td>
          <td> $address </td>
          <td> $price_reduction </td>
          <td> $longitude </td>
          <td> $latitude </td>
          <td> $description </td>
          </tr></table><hr>
        </div>";
      $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
      
  } else {
      $class = "danger";
      $message = "Error while creating record. Try again: <br>" . $connect->error;
      $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
  }
  mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <link rel="stylesheet" href="../css/style.scss">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    </head>

<body class="body_style">
<?php require_once 'components/navbar.php' ?>

            <div class="row text-center justify-content-center">
                <div class="nsl"></div>
                <div class="col-12 nsl">
                    <h3>You have successfully added your property</h3>
                </div>
                <div class="col-6 nsl">
                    <div class="dimgbox">
                        
                    </div>
                </div>
            </div>
        <div class="container">

            <div class="text-center justify-content-center alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='home.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>

        <?php require_once 'components/footer.php' ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>