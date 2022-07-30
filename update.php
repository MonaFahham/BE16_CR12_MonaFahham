<?php
 
require_once 'components/db_connect.php';

if ($_GET['real_estate_id']) {
    $id = $_GET['real_estate_id'];
    $sql = "SELECT * FROM real_estate WHERE real_estate_id = $id";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
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
<html>
    <head>
        <title>Edit Property</title> 
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

<body class="body_style">
<?php require_once 'components/navbar.php' ?>
    
        <div class="container dit">
            <div class="row text-center justify-content-center">
                <div class="nsl"></div> 
                <div class="col-12 nsl">
                    <h3 class="dit">Update request</h3>
                </div>
                <div class="col-6 nsl">
                    <div class="dimgbox">
                        <img class="dimg" src='pictures/<?php echo $picture ?>' alt="<?php echo $picture ?>">
                    </div>
                </div>

            </div>
        
        


        <fieldset>
            <form action="a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table text-dark">
                <tr>
                    <th>Property</th>
                    <td><input class='form-control' type="text" name="advert_title" placeholder="Property" value="<?php echo $advert_title ?>" /></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>
		 	           <select id="inputState" class="form-control" name="city"  placeholder="Select City" value="<?php echo $city ?>">
                        <option value="Vienna">Vienna</option>
		 		        <option value="Upper Austria">Upper Austria</option>
		 		        <option value="Lower Austria">Lower Austria</option> 
		 		        <option value="Graz">Graz</option> 
		 		        <option value="Linz">Linz</option> 
		 		        <option value="Krems">Krems</option> 
		 	           </select>
                    </td>
                </tr>
                <tr>
                    <th>Size</th>
                    <td><input class='form-control' type="number" name="size"  placeholder="Size" value="<?php echo $size ?>" /></td>
                </tr>
                <tr>
                    <th>Room Number</th>
                    <td><input class='form-control' type="number" name="room_number"  placeholder="Room Number" value="<?php echo $room_number ?>" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price"  placeholder="Price" value="<?php echo $price ?>" /></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><input class='form-control' type="text" name="address"  placeholder="Address" value="<?php echo $address ?>" /></td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="file" name="picture"  placeholder="Picture"/></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="decimal" name="longitude"  placeholder="Longitude" value="<?php echo $longitude ?>" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="decimal" name="latitude"  placeholder="Latitude" value="<?php echo $latitude ?>" /></td>
                </tr>
                <tr>
                    <th>Price Reduction</th>
                    <td>
		 	              <select id="inputState" class="form-control" name="price_reduction">
                            <option value="yes">Yes</option> 
                            <option value="no">No</option>
		 	              </select>
                    </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description"  placeholder="Description" value="<?php echo $description ?>" /></td>
                </tr>


                    <tr>
                        <input type= "hidden" name= "real_estate_id" value= "<?php echo $data['real_estate_id'] ?>" /> <!-- ovo je iz sql-->
                        <input type= "hidden" name= "picture" value= "<?php echo $data['picture'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "home.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>

        </div>

        <?php require_once 'components/footer.php' ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>



