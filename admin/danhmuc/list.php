<div class="admin-content-right">
            <div class="admin-content-right-category_list">
                <h1>Danh sách danh mục</h1>
                <table>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>MENU</th>
                            <th>DANH MỤC</th>
                            <th>TÙY BIẾN</th>
                            <th></th>
                        </tr>
                        <?php
                            $i=1;
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                $tenmenu=laytenmenu($menu_id);
                                $sua="index.php?act=categoryedit&id=".$category_id;
                                $xoa="index.php?act=categorydelete&id=".$category_id;
                                echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$category_id.'</td>
                                    <td>'.$tenmenu.'</td>
                                    <td>'.$category_name.'</td>
                                    <td> <a href="'.$sua.'"> <input type="button" value="Sửa"> </a>
                                    <a href="'.$xoa.'"> <input type="button" value="Xóa"></td></a>
                                </tr>';
                                $i++;
                            }
                        ?>
                        
                   </table>
            </div>
        </div>