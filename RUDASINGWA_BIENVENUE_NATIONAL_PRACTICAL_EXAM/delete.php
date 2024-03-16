<?php
include "connection.php";

if (isset($_GET['pId'])) {
    $id=$_GET['pId'];
    $query=$conn->query("DELETE FROM product WHERE productId='$id'");
    if ($query) {
        header("location:home.php");
    }
    else {
        echo "<script>alert('error');</script>";
    }
}
?>