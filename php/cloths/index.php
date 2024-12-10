<?php 
$conn=mysqli_connect("localhost","root","","clothes");

if(isset($_POST['cat_name']))
{
    //print_r($_POST);
    $name=$_POST['cat_name'];
    mysqli_query($conn,"insert into categories (name,picture,detail) values('$name','aa.jfif','sfdfdf')");
    echo "Category Has been created";
}

$result=mysqli_query($conn,"select * from categories");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ok.css">
    <title>Novelle - Fashion Clothing Brand</title>
</head>
<body>
    <?php include("includes/header.php"); ?>


    <section class="categories">
        <h2>Shop by Category</h2>
        <?php
        while($category=mysqli_fetch_array($result))
        {
        ?>
        <div class="category">
            <a href="category.php?category_id=<?php echo $category['id'];?>">
                <h3><?php echo $category['name'];?></h3>
                <img src="images/<?php echo $category['picture'];?>" alt="Stitched Clothing">
            </a>
        </div>
        <?php } ?>
        
    </section>

    <?php include("includes/footer.php"); ?>
    
</body>
</html>
