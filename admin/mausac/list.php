<div class="admin-content-right">
            <div class="admin-content-right-category_list">
                <h1>Danh sách màu sắc</h1>
                <table>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>MÀU SẮC</th>
                            <th>TÙY BIẾN</th>
                            <th></th>
                        </tr>
                        <?php
                            $i=1;
                            foreach($listmausac as $mausac){
                                extract($mausac);
                                $sua="index.php?act=coloredit&id=".$color_id;
                                $xoa="index.php?act=colordelete&id=".$color_id;
                                echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$color_id.'</td>
                                <td>'.$color_name.'</td>
                                <td> <a href="'.$sua.'"> <input type="button" value="Sửa"> </a>
                                <a href="'.$xoa.'"> <input type="button" value="Xóa"></td></a>
                            </tr>';
                            $i++;
                            }
                           


                        ?>
                        
                   </table>
            </div>
        </div>
    </section>