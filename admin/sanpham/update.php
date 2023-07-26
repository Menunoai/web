<?php 
    extract($lsp);
?>

<div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>Sửa Thông Tin Sản Phẩm</h1>
                <form action="index.php?act=productupdate" method="post">
                    <input name="tensanpham" type="text" placeholder="Nhập tên sản phẩm" require value="<?php echo $product_name ?>">
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
                    <input name="idsanpham" type="hidden"value="<?php echo $product_id ?>">
                    <input type="submit" name="sua" value="Sửa">
                </form>
            </div>
        </div>
    </section>