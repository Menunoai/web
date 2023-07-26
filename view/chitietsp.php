<div class="chitietsp">
    <!-- top -->
    <div class="top">
        <!-- left -->
        <div class="left">
            <div class="left_left">
                <img src="https://pubcdn.ivymoda.com/files/product/thumab/1400/2023/07/20/05bc91436113a679ba7f7fb84feb1421.JPG" alt="ảnh sp">          
            </div>
            <div class="left_right">
                <i class="fas fa-chevron-up"></i>
                <!-- vòng foreach lấy ảnh mô tả -->
                <div class="anhmota">
                    <?php 
                        for($i=0; $i<4; $i++){
                            echo '<img src="https://pubcdn.ivymoda.com/files/product/thumab/1400/2023/07/20/05bc91436113a679ba7f7fb84feb1421.JPG" alt="ảnh mô tả sp">  ';
                        }
                    ?>
                </div>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        <!-- right -->
        <div class="right">
            <div class="tensp">
                <?php 
                    $sp = loadone_motasp($_GET['idmotasp']);
                    $dssize = loadall_size_motasp($_GET['idmotasp']);
                    $dsmausac = loadall_mausac_motasp($_GET['idmotasp']);
                    extract($sp);
                    $gia_dinh_dang = number_format($gia, 0, '.', '.');
                    echo'
                        <h1>'.$tenmotasp.'</h1>
                    ';
                ?>
            </div>
            <div class="luotxem">
                <?php 
                    echo'
                        <h3>Lượt xem: '.$luotxem.'</h3>                        
                    ';
                ?>
            </div>
            <div class="gia">
                <?php 
                    echo'
                        '.$gia_dinh_dang.' đ
                    ';
                ?>
            </div>
            <div class="mau">
                <?php 
                    $printedValuesMausac = []; // Mảng lưu trữ các giá trị đã in

                    foreach ($dsmausac as $mausac) {
                        extract($mausac);
                        if (!in_array($tenmausac, $printedValuesMausac)) {
                            echo '
                                <div class="mausac">
                                    <a href="index.php?act=chitietsp&idmotasp='.$idmotasp.'&idmausac='.$idmausac.'">'.$tenmausac.'</a>
                                </div>
                            ';
                            $printedValuesMausac[] = $tenmausac; // Thêm giá trị vào mảng
                        }
                    }
                ?>
            </div> 
            
            <div class="size">
                <?php 
                    $printedValuesSize = []; // Mảng lưu trữ các giá trị đã in
                    $dssize_mausac = loadall_size_mausac($_GET['idmausac']);
                    foreach($dssize_mausac as $size){
                        extract($size);
                        echo '
                            <div class="sizeone">
                                <a href="index.php?act=chitietsp&idmotasp='.$idmotasp.'&idmausac='.$_GET['idmausac'].'&idsize='.$idsize.'">'.$tensize.'</a>
                            </div>
                        ';
                        $printedValuesSize[] = $tensize; // Thêm giá trị vào mảng
                    }                                        
                ?>
            </div>
<!-- ----------------------------- -->
<form action="" method="post">
            <div class="soluong">
                Số lượng:
                <input type="number" min="1" value="1" name="soluong" required>
            </div>
            <div class="them">
                <button type="submit">Thêm vào giỏ hàng</button>
            </div>
</form>

<?php 
    $mau = tenmausac($_GET['idmausac']);
    if(isset($_GET['idsize']))
        $sz = tensize($_GET['idsize']);
    include "thongtingiohang.php"; 
?>
<!-- ----------------------------- -->

            <div class="ghichu">
                <?php echo $ghichu; ?>
            </div>
        </div>
    </div>
    <!-- bottom -->
    <div class="bottom">
        <h2>Sản phẩm cùng loại</h2>
        <div class="show">
            <?php 
                $idloaisp = (int)idloaisp_motasp($_GET['idmotasp']);
                $dstop5 = top5luotxem($idloaisp);
                foreach($dstop5 as $top5){
                    extract($top5);
                    include "showsp.php";
                }            
            ?>
        </div>
    </div>
</div>