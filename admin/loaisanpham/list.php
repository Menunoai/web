<div class="admin-content-right">
            <div class="admin-content-right-category_list">
                <h1>Danh sách loại sản phẩm</h1>
                <table>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>MENU</th>
                            <th>DANH MỤC</th>
                            <th>LOẠI SẢN PHẨM</th>
                            <th>TÙY BIẾN</th>
                            <th></th>
                        </tr>
                        <?php
                            $i=1;
                            foreach($listloaisanpham as $loaisanpham){
                                extract($loaisanpham);
                                $tenmenu = laytenmenu_dm($category_id);
                                $tendanhmuc=laytendanhmuc($category_id);
                                $sua="index.php?act=brandedit&id=".$brand_id;
                                $xoa="index.php?act=branddelete&id=".$brand_id;
                                echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$brand_id.'</td>
                                    <td>'.$tenmenu.'</td>
                                    <td>'.$tendanhmuc.'</td>
                                    <td>'.$brand_name.'</td>
                                    <td> <a href="'.$sua.'"> <input type="button" value="Sửa"> </a>
                                    <a href="'.$xoa.'"> <input type="button" value="Xóa"></td></a>
                                </tr>';
                                $i++;
                            }
                           


                        ?>
                        
                   </table>
            </div>
        </div>