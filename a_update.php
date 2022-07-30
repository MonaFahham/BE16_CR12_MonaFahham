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
    $picture = $_POST['picture'];
    $price_reduction = $_POST['price_reduction'];
    $latitude = $_POST['longitude'];
    $longitude = $_POST['longitude'];
    $description = $_POST['description'];
    $real_estate_id = $_POST['real_estate_id'];
    $uploadError = '';
    

    $photo = file_upload($_FILES['picture'],'real_estate');
    if($photo->error===0){
        ($_POST["picture"]=="real-estate.jpg")?: unlink("pictures/$_POST[picture]");           
        $sql = "UPDATE real_estate SET advert_title = '$advert_title', size = '$size' , room_number = '$room_number', city = '$city', price = '$price', address = '$address', latitude = '$latitude', longitude= '$longitude', price_reduction = '$price_reduction', picture = '$photo->fileName',description='$description'  WHERE real_estate_id = {$real_estate_id}";
    }else{
        $sql = "UPDATE real_estate SET advert_title = '$advert_title', size = '$size' , room_number = '$room_number', city = '$city', price = '$price', address = '$address', latitude = '$latitude', longitude= '$longitude', price_reduction = '$price_reduction' WHERE real_estate_id = {$real_estate_id}";
    }    
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        
    </head>

<body class="body_style">
<?php require_once 'components/navbar.php' ?>

    <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='update.php?real_estate_id=<?=$real_estate_id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='home.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>

        <?php require_once 'components/footer.php' ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>

