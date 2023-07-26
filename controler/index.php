<?php 
    session_start();
    include "../model/pdo.php";
    include "../model/menu.php";
    include "../model/sale.php";
    include "../model/taikhoan.php";
    include "../model/danhmuc.php";
    include "../model/loaisanpham.php";
    include "../model/size.php";
    include "../model/mausac.php";
    include "../view/global.php";
    include "../model/chitietsp.php";
    include "../model/motasp.php";

    $dsmenu = loadall_menu();
    $dssale = loadall_sale();
    $dsmotasp = loadall_motasp();
    $dschitietsp = loadall_chitietsp();
    $dsdanhmuc = loadall_danhmuc();
    $dsloaisanpham = loadall_loaisanpham();
    $dssize = loadall_size();
    $dsmausac = loadall_mausac();

    include "../view/header.php";

    if(isset($_GET["act"])){
        $act=$_GET["act"];
        switch($act){
    
            case "user" :
                // if(isset($_POST["admin"]) && ($_POST["admin"])){
                    
                // }
                include "../view/taikhoan.php";
                break;

            case "dangkytk" :
                if(isset($_POST["dangky"]) && ($_POST["dangky"])){
                    $user=$_POST['username'];
                    $pass=$_POST['password'];
                    $address=$_POST['diachi'];
                    $hoten=$_POST['hoten'];
                    $sdt = $_POST['sdt'];
                    insert_taikhoan($user, $pass, $address, $hoten, $sdt);
                    echo "<script>alert('Đăng ký thành công!');</script>";
                }
                include "../view/dangky.php";
                break;

            case "dangnhap" :
                
                break;
            
            case "trangsanpham" :
                include "../view/trangsanpham.php";
                break;

            case "chitietsp" :
                include "../view/chitietsp.php";
                break;
            
            case "them" :
                include "../view/giohang.php";
                break;
            
            case "thanhtoan" :
                include "../view/thanhtoan.php";
                break;

            case "xoa1spdonhang":
                include "../view/xoa1spdonhang.php";
                break;

            case "xoaallgiohang":
                include "../view/xoaallgiohang.php";
                break;

            case "hoanthanh":
                ?>
                <script>alert('Đơn hàng đã được tạo!')</script>
                <?php
                unset($_SESSION['cart']);
                include "../view/giohang.php";
                break;
                



            default:
                include "../view/home.php";
                break;
        }
    }else{
        include "../view/home.php";
    }

    include "../view/footer.php";
?>