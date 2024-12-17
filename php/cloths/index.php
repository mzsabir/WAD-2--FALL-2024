<?php 
session_start();
$conn=mysqli_connect("localhost","root","","clothes");
if(isset($_GET['del']))
{
    mysqli_query($conn,"delete from categories where id=".$_GET['del']);
    echo "Category Has been Deleted";
}
$success="";
    if(isset($_POST['cat_name']))
    {
        //print_r($_POST);
        $new_name="";
        $name=$_POST['cat_name'];
        $detail=$_POST['cat_detail'];

        if($_FILES['cat_pic']['name']!="")
        {
        $name=$_FILES['cat_pic']['name'];
        $upload_error=$_FILES['cat_pic']['error'];
        $tmp_name=$_FILES['cat_pic']['tmp_name'];
        $type=$_FILES['cat_pic']['type'];
        if($upload_error === UPLOAD_ERR_OK)
        {
            $pos=strpos($name,".");
            $ext=strtolower(substr($name,$pos));
            if(($ext=='.jpg')) /* Extension Check */
            {
                $new_name=date("dmys").".jpg";
                if(move_uploaded_file($tmp_name, "images/".$new_name))
                {			
                    $pic=1;	
                }
            }else
            {
                $error="Image must be JPG";
            }
        }
        else
        {
            $error="Error : Unable to upload File";
        }
    }
    if($pic==1)
    {
        mysqli_query($conn,"insert into categories (name,picture,detail) values('$name','$new_name','$detail')");
        $success="Category Has been created";
    }
    else{
        $error="Plese upload Image for Category";
    }  
}

$result=mysqli_query($conn,"select * from categories");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ok.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Novelle - Fashion Clothing Brand</title>
</head>
<body>
    <?php include("includes/header.php"); ?>


    <section class="categories">
        <h2>Shop by Category</h2>
        <?php
        if(isset($error))
            echo "<p style='color:red;background:yellow'>".$error."</p>";
        if(isset($success) && $success!="")
            echo "<p style='color:green;background:lightgreen'>".$sucess."</p>";
        ?>
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
        <?php
        if(isset($_SESSION['role']) && $_SESSION['role']=="admin"):
        ?>
            <a href="index.php?del=<?php echo $category['id'];?>">Delete</a>
        <?php endif; ?>
        <?php } ?>
        
    </section>

    <?php include("includes/footer.php"); ?>
    
</body>
</html>
