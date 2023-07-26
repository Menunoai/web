<div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>Thêm Sản Phẩm</h1>
                <form action="index.php?act=productaddend" method="post">
                    <input type="text" value="<?php echo $tenmenu ?>" name="tenmenu" disabled>
                    <input type="hidden" value="<?php echo $idmenu ?>" name="idmenu">
                    <input type="text" value="<?php echo $tendm ?>" name="tendm" disabled>
                    <input type="hidden" value="<?php echo $iddm ?>" name="iddm">
                            <br>
                    <select name="brand_id" id="">
                        <option value="#">--Chọn loại sản phẩm--</option>
                        <?php 
                            foreach($listlsp as $loaisanpham){
                                extract($loaisanpham);
                                echo ' <option value="'.$brand_id.'">'.$brand_name.'</option> ';
                            }
                        ?>
                    </select>
                  
               
                    <input type="text" placeholder="Nhập tên sản phẩm" require name="tensanpham">
                    <select name="color_id" id="">
                        <option value="#">--Chọn màu sắc--</option>
                        <?php 
                            foreach($listmausac as $mausac){
                                extract($mausac);
                                echo ' <option value="'.$color_id.'">'.$color_name.'</option> ';
                            }
                        ?>
                    </select>
                    <select name="size_id" id="">
                        <option value="#">--Chọn size--</option>
                        <?php 
                            foreach($listsize as $size){
                                extract($size);
                                echo ' <option value="'.$size_id.'">'.$size_name.'</option> ';
                            }
                        ?>
                    </select>
                    <input type="number" min="1" placeholder="Nhập số lượng" require name="soluong">
                    <input type="number" min="0" step="any" name="dongia" required placeholder="Nhập giá">
                    <input type="submit" name="themmoi" value="Thêm">
                </form>
            </div>
        </div>
    </section>

    