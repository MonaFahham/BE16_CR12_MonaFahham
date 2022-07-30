<?php
require_once 'components/db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" href="css/style.css">

    <title>Add Property</title>
    <style>
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }
    </style>
</head>

<body class="body_style">
<?php require_once 'components/navbar.php' ?>    

<fieldset>
        <legend class='h2'>Add Property</legend>
        <form action="a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Property</th>
                    <td><input class='form-control' type="text" name="advert_title" placeholder="Property" /></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>
		 	           <select id="inputState" class="form-control" name="city"  placeholder="Select City">
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
                    <td><input class='form-control' type="text" name="size"  placeholder="size" /></td>
                </tr>
                <tr>
                    <th>Room Number</th>
                    <td><input class='form-control' type="number" name="room_number"  placeholder="Room Number" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price"  placeholder="Price" /></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><input class='form-control' type="text" name="address"  placeholder="Address" /></td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="file" name="picture"  placeholder="picture" /></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="decimal" name="longitude"  placeholder="Longitude" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="decimal" name="latitude"  placeholder="Latitude" /></td>
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
                    <td><input class='form-control' type="text" name="description"  placeholder="Description" /></td>
                </tr>
                <tr>
                    <td><button class='btn btn-success' type="submit">Insert Property</button></td>
                    <td><a href="home.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>

    <?php require_once 'components/footer.php' ?>

</body>
</html>


