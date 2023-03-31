<?php
    session_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "global.php";
    include "view/header.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();

    if((isset($_GET['act'])) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        switch ($act) {
           
            case 'sanpham':
                if(isset($_POST['kyw']) && ($_POST['kyw'] != "")){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']> 0)){
                    $iddm = $_GET['iddm']; 
 
                }else{
                    $iddm = 0; 
                }
                $dssp = loadall_sanpham($kyw,$iddm);
                $tendm = load_ten_dm($iddm);  
                include "view/sanpham.php";         
                break;
            case 'sanphamct':
                if(isset($_GET['idsp']) && ($_GET['idsp']> 0)){
                    $id = $_GET['idsp'];
                    sp_update_view($id);
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai = load_sanpham_cungloai($id,$iddm);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }                
                break;
            case 'gopy':
                include "view/gopy.php";
                break;
            case 'hoidap':
                include "view/hoidap.php";
                break;
            
            default:
                include "view/home.php";
                break;
        }
    }
    else{
        include "view/home.php";
    }
    include "view/footer.php";
?>