<?php
    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
    }
    include "../view/giohang.php";
?>
