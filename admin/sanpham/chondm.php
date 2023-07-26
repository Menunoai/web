<div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>Thêm Sản Phẩm</h1>
                <form action="index.php?act=productadd" method="post">
                <input type="text" value="<?php echo $tenmenu ?>" name="tenmenu" disabled>
                    <input type="hidden" value="<?php echo $idmenu ?>" name="idmenu">
                    <select name="category_id" id="">
                        <option value="#">--Chọn danh mục--</option>
                        <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo ' <option value="'.$category_id.'">'.$category_name.'</option> ';
                            }
                        ?>
                    </select>
                            
                    <input type="submit" name="tieptuc" value="Tiếp tục">
                </form>
            </div>
        </div>
    </section>

    