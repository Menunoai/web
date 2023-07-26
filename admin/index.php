<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/loaisanpham.php";
    include "../model/sanpham.php";
    include "../model/mausac.php";
    include "../model/size.php";
    include "../model/menu.php";
    include "header.php";
    include "slider.php";

    if(isset($_GET["act"])){
        $act=$_GET["act"];
        switch($act){
            case "menuadd" :
                if(isset($_POST["themmoi"]) && ($_POST["themmoi"])){
                    $ten = $_POST["tenmenu"];
                    insert_menu($ten);
                }
                include "menu/add.php";
                break;

            case "menulist" :
                $listmenu = loadall_menu();
                include "menu/list.php";
                break;
            
            case "menudelete" :
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_menu($_GET['id']);
                }
                $listmenu = loadall_menu();
                include "menu/list.php";
                break;
            
            case "menuedit" :
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $menu = loadone_menu($_GET['id']);
                }
                include "menu/update.php";
                break;
            
            case "menuupdate" :
                if(isset($_POST['sua'])&&($_POST['sua'])){
                    $idmenu=$_POST['idmenu'];
                    $tenmenu=$_POST['tenmenu'];
                    if($tenmenu != ""){
                        update_menu($idmenu, $tenmenu);
                        echo "<script>alert('Sửa thành công');</script>";
                    }
                    else{
                        echo "<script>alert('Tên menu không được trống');</script>";
                    }   
                }
                $listmenu = loadall_menu();
                include "menu/list.php";
                break;



            default:
                include "home.php";    
        }




}else{
    include "home.php";
}
    include "footer.php";
?>

