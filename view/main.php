<div class="main">
    <!-- body -->
    <div class="body">
        <?php $j=0; ?>

        <!-- nữ -->
        <div class="tenmenu">
            <?php 
                extract($dsmenu[$j]); 
                echo '<a href="">'.$tenmenu.'</a>'; 
                $j++;
            ?>
        </div>
        <div class="nu">
            <?php 
                $i=0;
                $dssp = loadall_motasp_menu($idmenu);
                foreach($dssp as $sanpham){
                    extract($sanpham);
                    // Định dạng giá theo chuỗi có dấu phân cách hàng nghìn
                    $gia_dinh_dang = number_format($gia, 0, '.', '.');
                    include "showsp.php";
                    $i++;
                    if($i==5)
                        break;
                }
            ?>
        </div>
        <div class="xemtatca">
            <span><a href="">Xem tất cả</a></span>
        </div>

        <!-- nam -->
        <div class="tenmenu">
            <?php 
                extract($dsmenu[$j]); 
                echo '<a href="">'.$tenmenu.'</a>'; 
                $j++;
            ?>
        </div>
        <div class="nam">
            <?php 
                $i=0;
                $dssp = loadall_motasp_menu($idmenu);
                foreach($dssp as $sanpham){
                    extract($sanpham);
                    // Định dạng giá theo chuỗi có dấu phân cách hàng nghìn
                    $gia_dinh_dang = number_format($gia, 0, '.', '.');
                    include "showsp.php";
                    $i++;
                    if($i==5)
                        break;
                }
            ?>
        </div>
        <div class="xemtatca">
            <span><a href="">Xem tất cả</a></span>
        </div>
        

        <!-- trẻ em -->
        <div class="tenmenu">
            <?php 
                extract($dsmenu[$j]); 
                echo '<a href="">'.$tenmenu.'</a>'; 
                $j++;
            ?>
        </div>
        <div class="treem">
            <?php 
                $i=0;
                $dssp = loadall_motasp_menu($idmenu);
                foreach($dssp as $sanpham){
                    extract($sanpham);
                    // Định dạng giá theo chuỗi có dấu phân cách hàng nghìn
                    $gia_dinh_dang = number_format($gia, 0, '.', '.');
                    include "showsp.php";
                    $i++;
                    if($i==5)
                        break;
                }
            ?>
        </div>
        <div class="xemtatca">
            <span><a href="">Xem tất cả</a></span>
        </div>
        
    </div>
</div>