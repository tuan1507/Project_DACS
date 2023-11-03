<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../asset/css/header.css">
    <link rel="stylesheet" href="../../asset/css/addproduct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<?php
include("../../asset/connect/connectsql.php");
?>

<body>
    <!-- header section  -->
    <header class="header">
        <div class="header-1">
            <a href="" class="logo"><i class="fas fa-store"></i></a>
            <form action="" class="search-form">
                <input type="search" name="" id="search-box" placeholder="Search here...">
                <label for="search-box" class="fas fa-search"></label>
            </form>
            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
                <div id="login-btn" class="fas fa-heart"></div>
            </div>
        </div>
        <div class="header-2">
            <nav class="navbar">
                <a href="http://localhost/1.PHP/3.Project/7.DoAnCS2/">Home</a>
                <a href="#home">Home</a>
                <a href="#home">Home</a>
                <a href="#home">Home</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>
    <!-- add-product -->
    <div class="add-product">
        <p>Add product</p>
        <div class="table">
            <form method="POST" action="xuli.php">
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" id="input-box" class="textare" name="input_name_product" value=""></td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td><input type="text" id="input-box" class="textare" name="input_quantity_product" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>Frist price</td>
                        <td><input type="text" id="input-box" class="textare" name="input_frist_price" value=""></td>
                    </tr>
                    <tr>
                        <td>Last price</td>
                        <td><input type="text" id="input-box" class="textare" name="input_last_price" value=""></td>
                    </tr>
                    <tr>
                        <td>Product type</td>
                        <td><input type="text" id="input-box" class="textare" name="input_product_type" value=""></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn" name="add_product" value="Add product"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <!-- show-product -->
    <div class="show-product">
        <table border="1">
            <tr class="title">
                <th>Numerical order</th>
                <th>Name</th>
                <th>Quantility</th>
                <th>Frist price</th>
                <th>Frist name</th>
                <th>Last price</th>
                <th>Product type</th>
            </tr>
            <?php
            $sql_show_product = "SELECT * FROM product ";
            $query_show_product =  mysqli_query($mysqli, $sql_show_product);

                $i = 0;
                while ($row = mysqli_fetch_array($query_show_product)) {
                    $i ++;
                    ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row["name_product"]?></td>
                <td><?php echo $row["quantity"]?></td>
                <td><?php echo $row["first_price"]?></td>
                <td><?php echo $row["last_price"]?></td>
                <td><?php echo $row["product_type"]?></td>
            </tr>
            <?php
                }
                ?>
        </table>

    </div>
</body>

</html>