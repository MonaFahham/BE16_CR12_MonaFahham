<?php 
require_once 'components/db_connect.php';


if ($_GET['real_estate_id']) {
    $id = $_GET['real_estate_id'];
    $sql = "SELECT * FROM real_estate WHERE real_estate_id = {$id}" ;
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) { 
        $advert_title = $data['advert_title'];
        $size = $data['size'];
        $room_number = $data['room_number'];
        $city = $data['city'];
        $price = $data['price'];
        $address = $data['address'];
        $picture = $data['picture'];
        $price_reduction = $data['price_reduction'];
        $latitude = $data['latitude'];
        $longitude = $data['longitude'];
        $description = $data['description'];
    } else {
        header("location: error.php");
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Property</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    </head>

<body class="body_style">
<?php require_once 'components/navbar.php' ?>
    
        <fieldset>
            <div class="row text-center justify-content-center">
                <div class="nsl"></div>
                <div class="col-12 nsl">
                    <h3>Delete Property</h3>
                </div>
                <div class="col-6 nsl">
                    <div class="dimgbox">
                        <img class="dimg" src='pictures/<?php echo $picture ?>' alt="<?php echo $picture ?>">
                    </div>
                </div>
                <h4 class="text-danger nsl"><?php echo $advert_title?></h4>
                <h6>Do you really want to delete this property?</h6>
                <div class="col-12">
                    <form action ="a_delete.php" method="post">
                        <input type="hidden" name="real_estate_id" value="<?php echo $id ?>" />
                        <input type="hidden" name="picture" value="<?php echo $picture ?>" />
                        <button class="button button2  btn btn-danger" type="submit">Yes, delete it!</button>
                        <a href="home.php"><button class="button btn btn-success" type="button">No, go back!</button></a>
                    </form>

                </div>
            </div>

        </fieldset>

        <?php require_once 'components/footer.php' ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>