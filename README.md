Code Review 12
Code Review 12
Good Morning Students!

Welcome to your 12th CodeReview.

You will need to achieve more than 60 points to pass this CodeReview successfully.

You will be graded according to the results achieved. Please see the number of points for each task below.

The grading system has the following rules:

Up to 60 points = red

Between 61 and 79 = yellow

Over 80 = green

You can submit your solution (as GitHub project link) until Saturday at 18:00:00.

Project Description:

The Italian real estate agency platform "La casa mia" is looking for a new design for their website. They want a nice looking responsive web page where they can advertise their properties. There should be a landing page where all properties will be listed, side by side, with basic information as: advert title, size, room number, city and price. No need to say that Navbar, hero image and footer are essential elements for this new project.

There should also be a button "Details" for each offer that would direct the user to a new page where all information about the property will be shown, including a google maps map, at the bottom, with a pinpoint on the property address.

You can see below an example of how the offers should be listed and how the details page should look like.

Additionally to what has been mentioned above, information such as address, latitude, longitude, image and price reduction (true/false, yes/no, etc) must be columns to the table in the database.

As the enterprise is looking for partners, they also want an API that will return all offers. If another real estate agency would like to sell their properties, under a certain commission obviously, the API will supply ALL the info in a raw format.

Last request from the agency is an Opportunity page!! This page should list only the properties that are marked as reduced in the database. It should also be on the navigation bar with the link "Opportunity".

Example landing page:

Example details page:

Project Naming:

Create a GitHub Repository named: BE16_CR12_YourName. Push the files into it and send the link through the learning management system (LMS). Please make your repository private and collaborate with codefactorygit. See an example of a GitHub link below:

https://github.com/JohnDoe/repositoryname.git.

Please remember to include the DataBase as well with the option create a database and dumps included, NOT SEPARATED.

DBname: BE16_CR12_lacasamia_your_name

For this CodeReview, the following criteria will be graded:

(30) make a CRUD (create/read/update/delete) for the real estate properties.
(20) create a details file: when you click on any offer it will lead you to a new page that will show ALL information about the property that was clicked on.
(25) On the details page, you need to use google maps API to show the location of the offer (remember that your database should have the columns longitude and latitude).
Hint:

Use the id of the property to bring their information. You can use latitude and longitude as the script below:

<?php

//connection//query…

$lat= 48.20849;  $lng= 16.37208;  ?>

<script>

       var map;

       function initMap() {

           var vienna = {

               lat: <?php echo $lat?>,

               lng: <?php echo $lng?>

           };...(to be continued)

 

(25) From the database that was built, create a display API. This API is supposed to return a JSON object with all information from all offers from the agency. A single PHP file displayAll.php is necessary for this task. There should be a link in the home page that would lead to the API. Please note that the data from the database must be converted to a JSON type which is raw data, therefore no formatting is required.


Bonus points:

(20) after you created your own API (displayAll.php), create a new file called oportunity.html. This page will use Ajax to retrieve all the information from the API, but only show the ones with a price reduction. If the property doesn’t have a reduced price, it shouldn't appear on this page.
