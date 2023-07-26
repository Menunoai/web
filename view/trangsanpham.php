<div class="trangsanpham">
    <!-- left -->
    <div class="left">
        <div class="size">
            <ul>
                <span>Size</span>
                <div class="sub_size">
                    <?php 
                        foreach($dssize as $size){
                            extract($size);
                            echo '<li>';
                                echo '<input type="checkbox" value="'.$tensize.'">'.$tensize.'                              
                                </li>';
                        }
                    ?>
                </div>
            </ul>

        </div>
        <div class="mausac">
        <ul>
                <span>Màu sắc</span>
                <div class="sub_mausac">
                    <?php 
                        foreach($dsmausac as $mausac){
                            extract($mausac);
                            echo '<li>
                                    <input type="checkbox" value="'.$tenmausac.'">  '.$tenmausac.'                              
                                </li>';
                        }
                    ?>
                </div>
            </ul>
        </div>
        <div class="gia">
            <ul>
                <span>Giá</span>
                <li><input type="checkbox">Dưới 1.000.000đ</li>
                <li><input type="checkbox">1.000.000đ đến 2.000.000đ</li>
                <li><input type="checkbox">2.000.000đ đến 5.000.000đ</li>
                <li><input type="checkbox">Trên 5.000.000đ</li>
            </ul>
        </div>
        <div class="loc">
            <input type="submit" name="boloc" value="Bỏ lọc" style="margin-right: 60px;">
            <input type="submit" name="loc" value="Lọc">
        </div>
    </div>

    <!-- right -->
    <div class="right">
        <div class="top">
        <?php 
            if((isset($_GET['iddanhmuc'])) && ($_GET['iddanhmuc']>0) && !isset($_GET['idloaisanpham'])){
                $tendanhmuc = laytendanhmuc($_GET['iddanhmuc']);
                $tenmenu = laytenmenu_dm($_GET['iddanhmuc']);
                echo '<h2>'.$tendanhmuc.' '.$tenmenu.'</h2>';
                $dem=0;
            }

            else if((isset($_GET['iddanhmuc'])) && ($_GET['iddanhmuc']>0) && ($_GET['idloaisanpham']>0)){                    
                $tenloaisanpham = laytenloaisanpham($_GET['idloaisanpham']);
                $tenmenu = laytenmenu_dm($_GET['iddanhmuc']);
                echo '<h2>'.$tenloaisanpham.' '.$tenmenu.'</h2>';
                $dem=0;
            }
        ?>
        </div>

        <div class="body">
            <?php 
                $sosp_1trang = 4;
                foreach($dsmotasp as $sanpham){
                    extract($sanpham);
                    // Định dạng giá theo chuỗi có dấu phân cách hàng nghìn
                    $gia_dinh_dang = number_format($gia, 0, '.', '.');

                    if((isset($_GET['iddanhmuc'])) && ($_GET['iddanhmuc']>0) && !isset($_GET['idloaisanpham'])){
                        $dssanpham_dm = loadall_motasp_dm($_GET['iddanhmuc']);
                        foreach($dssanpham_dm as $sanpham_dm){
                            $dem++;
                        }
                        for($k=0; $k<$dem; $k++){
                            $sanpham_dm = $dssanpham_dm[$k];
                            extract($sanpham_dm);
                            if(($k < $_GET['sotrang']*$sosp_1trang) && ($k >= ($_GET['sotrang']-1)*$sosp_1trang)){
                                include "showsp.php";
                            }
                        }
                        break;
                    }
                    else if((isset($_GET['iddanhmuc'])) && ($_GET['iddanhmuc']>0) && ($_GET['idloaisanpham']>0)){
                        $dssanpham_lsp = loadall_motasp_lsp($_GET['idloaisanpham']);
                        foreach($dssanpham_lsp as $sanpham_lsp){
                            $dem++;
                        }
                        for($k=0; $k<$dem; $k++){
                            $sanpham_lsp = $dssanpham_lsp[$k];
                            extract($sanpham_lsp);
                            if(($k < $_GET['sotrang']*$sosp_1trang) && ($k >= ($_GET['sotrang']-1)*$sosp_1trang)){
                                include "showsp.php";
                            }
                        }
                        break;
                    } 
                }
            ?>
        </div>       
        <!-- bottom -->
        <div class="bottom" style="background-color: #f15;">
            <?php 
                // Lấy giá trị của biến 'page' từ tham số trong URL
                if (isset($_GET['sotrang']) && is_numeric($_GET['sotrang'])) {
                    $sotrang = intval($_GET['sotrang']);
                } else {
                    // Mặc định là trang đầu tiên nếu không có tham số 'page' hoặc giá trị không hợp lệ
                    $sotrang = 1;
                }
            ?>
            
            <?php 
                $sosp = $dem;
                if($sosp < $sosp_1trang){
                    if((isset($_GET['iddanhmuc'])) && ($_GET['iddanhmuc']>0) && !isset($_GET['idloaisanpham'])){
                        echo '
                            <ul>
                                <li><a href="index.php?act=trangsanpham&iddanhmuc='.$_GET['iddanhmuc'].'&sotrang='.$sotrang.'">1</a></li>
                            </ul>
                        ';   
                    }
                    else if((isset($_GET['iddanhmuc'])) && ($_GET['iddanhmuc']>0) && ($_GET['idloaisanpham']>0)){
                        echo '
                            <ul>
                                <li><a href="index.php?act=trangsanpham&iddanhmuc='.$_GET['iddanhmuc'].'&idloaisanpham='.$_GET['idloaisanpham'].'&sotrang='.$sotrang.'">1</a></li>
                            </ul>
                        ';
                    }
                }
                else{
                    for($i=1; $i<=($sosp / $sosp_1trang);$i++){
                        if(($sosp % $sosp_1trang) == 0){
                            if((isset($_GET['iddanhmuc'])) && ($_GET['iddanhmuc']>0) && !isset($_GET['idloaisanpham'])){
                                echo '
                                    <ul>
                                        <li><a href="index.php?act=trangsanpham&iddanhmuc='.$_GET['iddanhmuc'].'&sotrang='.$i.'">'.$i.'</a></li>
                                    </ul>
                                ';   
                            }
                            else if((isset($_GET['iddanhmuc'])) && ($_GET['iddanhmuc']>0) && ($_GET['idloaisanpham']>0)){
                                echo '
                                    <ul>
                                        <li><a href="index.php?act=trangsanpham&iddanhmuc='.$_GET['iddanhmuc'].'&idloaisanpham='.$_GET['idloaisanpham'].'&sotrang='.$i.'">'.$i.'</a></li>
                                    </ul>
                                ';
                            }
                        }
                        else{
                            if((isset($_GET['iddanhmuc'])) && ($_GET['iddanhmuc']>0) && !isset($_GET['idloaisanpham'])){
                                echo '
                                    <ul>
                                        <li><a href="index.php?act=trangsanpham&iddanhmuc='.$_GET['iddanhmuc'].'&sotrang='.$i.'">'.$i.'</a></li>';
                                        $i++;
                                    echo'
                                        <li><a href="index.php?act=trangsanpham&iddanhmuc='.$_GET['iddanhmuc'].'&sotrang='.$i.'">'.$i.'</a></li>
                                    </ul>
                                ';   
                            }
                            else if((isset($_GET['iddanhmuc'])) && ($_GET['iddanhmuc']>0) && ($_GET['idloaisanpham']>0)){
                                echo '
                                    <ul>
                                        <li><a href="index.php?act=trangsanpham&iddanhmuc='.$_GET['iddanhmuc'].'&idloaisanpham='.$_GET['idloaisanpham'].'&sotrang='.$i.'">'.$i.'</a></li>';
                                        $i++;
                                    echo'
                                        <li><a href="index.php?act=trangsanpham&iddanhmuc='.$_GET['iddanhmuc'].'&idloaisanpham='.$_GET['idloaisanpham'].'&sotrang='.$i.'">'.$i.'</a></li>
                                    </ul>
                                ';
                            }
                        }
                    }
                }
            ?>
        </div>
    </div>
</div>