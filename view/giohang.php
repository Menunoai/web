<div class="giohang">
    <div class="left">
        <h1>Giỏ hàng của bạn</h1>
        <?php
            $tongsoluong=0;
            $tonggia=0;
            // Kiểm tra xem session giỏ hàng đã được tạo chưa
            if (isset($_SESSION['cart'])) {
                echo '
                    <table>
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Số lượng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                ';

                // Hiển thị thông tin trong giỏ hàng
                foreach ($_SESSION['cart'] as $order) {
                    $idmotasp = $order['idmotasp'];
                    $tenmotasp = $order['tenmotasp'];
                    $gia = $order['gia'];
                    $tenmausac = $order['tenmausac'];
                    $tensize = $order['tensize'];
                    $soluong = $order['soluong'];
                    $gia_dinh_dang = number_format($gia, 0, '.', '.');

                    echo '
                        <tr>
                            <td>
                                <div class="sp">
                                    <img src="" alt="Ảnh sp">
                                    <div class="thongtin">
                                        <h3>'.$tenmotasp.'</h3>
                                        <span>Màu sắc: '.$tenmausac.'</span>
                                        <br><br>
                                        <span>Size: '.$tensize.'</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                '.$gia_dinh_dang.' đ
                            </td>
                            <td>
                                '.$soluong.'
                            </td>
                            <td>
                                <a href="?act=xoa1spdonhang&idmotasp='.$idmotasp.'">
                                    <button type="submit" name="remove">Xóa</button>
                                </a>                            
                            </td>
                        </tr>
                        <tr></tr>
                    ';
                    
                    $tongsoluong+=$soluong;
                    $tonggia += $soluong * $gia;
                }
                echo '
                        </tbody>
                    </table>
                ';
            } else {
                echo "Giỏ hàng trống.";
            }
        ?>
        <hr>
        <div class="xoagiohang">
            <a href="?act=xoaallgiohang"><button type="submit" name="clear_cart">Xóa tất cả</button></a>
        </div>
        <div class="bottom">
            <a href="index.php"><h2>Tiếp tục mua hàng</h2></a>
        </div>
    </div>
    <!-- right -->
    <div class="right">
        <h2>Tổng tiền giỏ hàng</h2>
        <div class="top">
            <div class="left">
                <li>Tổng sản phẩm</li>
                <li>Thành tiền</li>
            </div>
            <div class="right">
                <li><?php echo $tongsoluong; ?></li>
                <li><?php 
                        $gia_dinh_dang = number_format($tonggia, 0, '.', '.');
                        echo $gia_dinh_dang;
                        echo ' đ'; 
                    ?>
                </li>
            </div>
        </div>
        <div class="bottom">
            <a href="index.php?act=thanhtoan"><h3>Đặt hàng</h3></a>
        </div>
    </div>
</div>