<?php 
$conn=mysqli_connect("localhost","root","","clothes");
$result=mysqli_query($conn,"select * from categories where id=".$_GET['category_id']);
$cat=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/ok.css">
    <link rel="stylesheet" href="css/stitched.css">
</head>
<body>
    <?php include("includes/header.php"); ?>
   
    <section class="stitched-products">
        <h2 style='margin-top:15px'><?php echo $cat['name']; ?> Collection</h2>
        <p><?php echo $cat['detail']?></p>
        <div class="product">
            <img src="images/aa.jfif" alt="Stitched Item 1">
            <h3>OFFWHITE SWEATER</h3>
            <p>$40.00</p>
            <button onclick="addToCart()">Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/bb.jfif" alt="Stitched Item 2">
            <h3>MULTI LINE SWEATER</h3>
            <p>$35.00</p>
            <button onclick="addToCart()">Add to Cart</button>
			 
        </div>
		
        <div class="product">
            <img src="images/dd.jfif" alt="Stitched Item 3">
            <h3>RIBBON SWEATER</h3>
            <p>$50.00</p>
            <button onclick="addToCart()">Add to Cart</button>
        </div>
	
        <div class="product">
            <img src="images/ee.jfif" alt="Stitched Item 4">
            <h3>GREEN SWEATER</h3>
            <p>$35.00</p>
            <button onclick="addToCart()">Add to Cart</button>
        </div>
	
        <div class="product">
            <img src="images/ff.jfif" alt="Stitched Item 5">
            <h3>MULTI COLOR SWEATER</h3>
            <p>$40.00</p>
            <button onclick="addToCart()">Add to Cart</button>
        </div>
		
        
    </section>
    <?php include("includes/footer.php"); ?>
  
</body>
</html>