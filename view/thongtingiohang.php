<?php
// Kiểm tra xem trường "soluong" đã được gửi từ form hay chưa
if (isset($_POST['soluong'])) {
    $soluong = $_POST['soluong'];

    // Kiểm tra xem session giỏ hàng đã được tạo chưa, nếu chưa thì tạo mới
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Thêm sản phẩm vào giỏ hàng
    $_SESSION['cart'][] = array(
        'idmotasp' => $idmotasp,
        'tenmotasp' => $tenmotasp,
        'gia' => $gia,
        'tenmausac' => $mau,
        'tensize' => $sz,
        'soluong' => $soluong
    );
}
?>
