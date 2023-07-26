<?php
    // Kiểm tra xem session giỏ hàng đã được tạo chưa
    if (isset($_SESSION['cart'])) {
        // Lặp qua mảng giỏ hàng để tìm sản phẩm với idmotasp tương ứng và xóa nó
        foreach ($_SESSION['cart'] as $key => $order) {
            if ($order['idmotasp'] == $_GET['idmotasp']) {
                unset($_SESSION['cart'][$key]);
                break; // Dừng vòng lặp sau khi xóa sản phẩm
            }
        }
    }
    include "../view/giohang.php";
?>
