<?php

require_once 'components/db_connect.php';

$sql = "SELECT * FROM real_estate";
$result = mysqli_query($connect ,$sql);
$tbody= ''; 
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
      $tbody .= "
      <div class='container col-lg-4 col-md-6 col-sm-12 justify-content-center content'>
        <div class='card shadow border-0 mx-3' data-aos='fade-up' data-aos-offset='300'    
            data-aos-easing='ease-in-sine' style='width: 37rem;'>
         <h5 class='card-title p-3 text-center'>" .$row['city']."</h5>
         <img class='image-size ' src='./pictures/" .$row['picture']."'>
         <div class='card-body'>
             <p class='card-text'>" .$row['advert_title']."</p>
             <p class='card-text'>Size: " .$row['size']." m²</p>
             <p class='card-text'>Room: " .$row['room_number']."</p>
             <p class='card-text'>Price: €" .$row['price']."</p>
             <a href='details.php?real_estate_id=".$row['real_estate_id']."'  class='btn btn-info'>Details</a>
         </div>
       </div>
     </div>";
   };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>La casa mia</title>
    <?php require_once 'components/boot.php' ?>



</head>

<body class="body_style">
<?php require_once 'components/navbar.php' ?>
    
  <div class="hero text-center align-items-center">
    <h1 class="text-center">La casa mia</h1>
  </div>
    
  <div id="items">
    <div class="row text-center justify-content-center">
      <div class="col-12">
        <h3 class="heading text-center">Find it, Tour it, Own it</h3>
      </div>

      <div class="row text-center dit justify-content-center">
      <div class="col-12">
        <h3 class="text-center title">Lets find the right selling option for you</h3>
        <h5 class="text-center title1">Get your homes value and see selling options</h5>
      </div>

      <div class="col-lg-12 row">
         <?php echo $tbody; ?>
      </div>
      
    </div>

  </div>

  <?php require_once 'components/footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

