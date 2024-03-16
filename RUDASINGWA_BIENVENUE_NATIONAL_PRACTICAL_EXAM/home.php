
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
 .nav{
    margin-top:-0.5%;
    width: 15%;
    height: 86.9vh;
 }
 li{
    padding-top: 40%;
 }
 .t{
    margin-left:22%;
    margin-top:-40%;
 }
    </style>
    <title>Document</title>
</head>
<body class="bg-light">
<div class="mx-auto" style="text-align:center;">
    <div class="align-top shadow"><h1><div class="text-warning p-5" style="display:inline-block;"></div>
            STOCK MANAGEMENT SYSTEM</h1></div>
        </div>
    </div>

    <ul class="nav navbar navbar-expand flex-column bg-success p-4">
        <h5 class="nav-logo text-white">Hello user</h5>
        <li class="nav-item">
            <a href="home.php" class="nav-link text-white">Dashboard</a>
        </li>
        <li class="nav-item">
            <a href="stockIn.php" class="nav-link text-white">Stock in</a>
        </li>
        <li class="nav-item">
            <a href="stockOut.php" class="nav-link text-white">Stock out</a>
        </li>
        <li class="nav-item">
            <a href="add_product.php" class="nav-link text-white">Add product</a>
        </li>
        <li class="nav-item">
        <a href="" class="nav-link text-white mt-5 ">Logout</a>
        </li>
    </ul>
    <div class="t">
    <table class="table table-hovered table-stripped mt-5 w-75">
            <h3 class="table-header">
                Warning: you must first submit stock in form before adding a product in stock table and 
                    You must also submit stock out form before deleting a product from stock table.
            </h3>
        <tr class="bg-success text-white">
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Quantity</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        include"connection.php";
        $sql=$conn->query("SELECT * FROM product");
        while ($row=mysqli_fetch_assoc($sql)) { 
            echo"
            <tr>
            <td class='p-2'>".$row['productId']."</td>
            <td class='p-2'>".$row['product_Name']."</td>
            <td class='p-2'>".$row['quantity']."</td>
            <td class='p-2'><a href='update.php?pId=".$row['productId']."' class='btn btn-primary'>Update</a></td>
            <td class='p-2'><a href='delete.php?pId=".$row['productId']."' class='btn btn-danger'>Delete</a></td>
            </tr>
            ";
        }
        ?>
    </table>
    </div>
   <script src="bootstrap.min.js"></script>
</body>
</html>