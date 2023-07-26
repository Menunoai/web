<div class="admin-content-right">
            <div class="admin-content-right-brand_add">
                <h1>Thêm Loại Sản Phẩm</h1>
                <form action="index.php?act=brandaddend" method="post">
                <input type="text" value="<?php echo $tenmenu ?>" name="tenmenu" disabled>
                    <input type="hidden" value="<?php echo $idmenu ?>" name="idmenu">
                            <br>
                    <select name="category_id" id="">
                        <option value="#">--Chọn danh mục--</option>
                        <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo ' <option value="'.$category_id.'">'.$category_name.'</option> ';
                            }
                        ?>

                    </select>
                    <input type="text" placeholder="Nhập tên loại sản phẩm" require name="tenloaisanpham">
                    <input type="submit" name="themmoi" value="Thêm">
                </form>
            </div>
        </div>
    </section>