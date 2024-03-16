<?php
include "connection.php";
if (isset($_GET['pId'])) {
    $id=$_GET['pId'];
    $select=$conn->query("SELECT * FROM product WHERE productId='$id'");
    $row=mysqli_fetch_assoc($select);
    $name=$row['product_Name'];
    $quantity=$row['quantity'];

    if (isset($_POST['update'])) {
        $quantity=$_POST['quantity'];
        $pname=$row['product_Name'];
        $query=$conn->query("UPDATE product SET quantity='$quantity', product_Name='$pname' WHERE productId='$id'");
        if ($query) {
            header("location:home.php");
        }
    }
?>
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
    <link rel="stylesheet" href="style.css">
    </style>
    <title>Document</title>
</head>
<body class="bg-light">
<div class="mx-auto" style="text-align:center;">
    <div class="align-top shadow"><h1><div class="text-warning p-5" style="display:inline-block;"></div>
            STOCK MANAGEMENT SYSTEM</h1></div>
        <form  class="w-50 border mx-auto bg-white p-4 mt-5" method="post">
            <center><h1>Add product</h1></center>
            <div class="mt-3" >
                <label for="username" class="form-label ">Product name</label>
                <input type="text" id="username" value="<?php echo $name;?>" class="form-control border-success" placeholder="Product name" name="pname" required>
                <label for="password" class="form-label">Quantity</label>
                <input type="text" name="quantity" value="<?php echo $quantity;?>" class="form-control border-success" id="password" placeholder="Quantity" required><br>
                <p><center><button type="submit" class="btn btn-success col-12" name="update" >Add product</button></center></p>
            </div>
           </form>
   </div>
   <?php
   }?>
   <script src="bootstrap.min.js"></script>
</body>
</html>