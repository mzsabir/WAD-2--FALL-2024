<header>
        <img src="images/oh.jpg" alt="Novelle Logo" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                $m=mysqli_query($conn,"select id,name from categories");
                while($c=mysqli_fetch_array($m)){
                ?>
                <li><a href="category.php?category_id=<?php echo $c['id']?>"><?php echo $c['name'];?></a></li>
                <?php } ?>
                <li><a href="add_catgory.php" style="border:2px solid black; padding:10px; border-radius:5px">ADD NEW CATEGORY</a></li>
              
            </ul>
        </nav>
    </header>