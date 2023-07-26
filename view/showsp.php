<?php 
    // $img= $img_path.$anh; 
    $idmausac = (int)idmausac_motasp($idmotasp);
    echo '
        <div class="sp">
            <div class="anh">
                <img src="'.$idanh.'" alt="ảnh sản phẩm">
            </div>
            
            '.$tenmotasp.'
            <div class="gia">
                <p>'.$gia_dinh_dang.'đ</p>
                <a href="?act=chitietsp&idmotasp='.$idmotasp.'&idmausac='.$idmausac.'"><input type="submit" name="themvaogiohang" value="Thêm"></a>
            </div>
            
        </div>
    ';
?>