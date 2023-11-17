<?php
@include 'config.php';

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartSticth-Shirts</title>
  <link rel="stylesheet" href="pant-shirt.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
  <?php
  include('header.php');
  ?>


  <main>
    <?php

    define('SITEURL', 'your_site_url_here'); // Replace 'your_site_url_here' with the actual URL

    function generateShirtFabricItem($imgSrc, $description, $price, $pageUrl)
    {
      $html = '
<div class="fabric-container">
    <img class="fabric-img" src="' . $imgSrc . '" alt="" height="250px">
    <div class="fabric-info">
    <p>' . $description . '</p>
    <p id="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(166, 50, 50);"></i>
        <Rs class="money"></Rs>' . $price . '
    </p>
    <div class="placeorder">
        <form action="' . SITEURL . $pageUrl . '" method="post">
            <a href="' . SITEURL . $pageUrl . '"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #2b300d;"></i></button></a>
        </form>
    </div>
    </div>

</div>';

      return $html;
    }

    // Example usage:
    echo '<div class="main-div"><div class="secondary-div">';
    echo generateShirtFabricItem("Images/shirtFabric1.jpg", "Cotton Colour Plain Shirt Fabric Green", "360.00", "s1.php");
    echo generateShirtFabricItem("Images/shirtFabric7.jpg", "Cotton Grey with White Checked Shirt Fabric Galaxy", "445.00", "s7.php");
    echo generateShirtFabricItem("Images/shirtFabric3.jpg", "Cotton Striped Shirt Fabric Blue Candy Colour", "415.00", "s3.php");
    echo generateShirtFabricItem("Images/shirtFabric5.jpg", "Cotton Colour Checked Shirt Fabric Sky Blue Galaxy Art", "445.00", "s5.php");
    echo generateShirtFabricItem("Images/shirtFabric6.jpg", "Cotton Colour Plain Shirt Fabric Grey Galaxy Art", "445.00", "s6.php");
    echo generateShirtFabricItem("Images/shirtFabric2.jpg", "Cotton Grey Colour Plain Shirt Fabric Candy Colour", "415.00", "s2.php");
    echo generateShirtFabricItem("Images/shirtFabric4.jpg", "Cotton Mixed Plain Shirt Fabric Black Flat", "425.00", "s4.php");
    echo generateShirtFabricItem("Images/shirtFabric8.jpg", "Cotton White Checked Shirt Fabric Galaxy Art", "445.00", "s8.php");
    echo '</div></div>';

    ?>
  </main>

  <?php
  include('footer.php');
  ?>

</body>

</html>