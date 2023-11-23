<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "header.php";
    // CONTROLLER DANH MUC
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){

            case 'adddm':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tendanhmuc = $_POST['tendanhmuc'];
                    $trangthai = $_POST['trangthai'];
                    insert_danhmuc($tendanhmuc,$trangthai);
                    $thongbao="Them thanh cong";
                }
                include "danhmuc/add.php";
                break;

            case 'listdm':   
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    delete_danhmuc($_GET['iddm']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                
                // if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                //     loadone_danhmuc($iddm);               
                // }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $sql="SELECT * FROM danhmuc WHERE iddm=".$_GET['iddm'];
                    $dm=pdo_query_one($sql);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tendanhmuc=$_POST['tendanhmuc'];
                    $trangthai=$_POST['trangthai'];
                    $iddm=$_POST['iddm'];
                    $sql = "UPDATE danhmuc SET iddm='".$iddm."', tendanhmuc='".$tendanhmuc."', trangthai='".$trangthai."' WHERE iddm=".$iddm;
                    //update_danhmuc($iddm,$tendanhmuc,$trangthai);
                    pdo_execute($sql);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;

                /* CONTROLLER SAN PHAM */
                case 'addsp':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                        $iddmuc=$_POST['iddmuc'];
                        $tensanpham=$_POST['tensanpham'];
                        $giagoc=$_POST['giagoc'];
                        $giakm=$_POST['giakm'];
                        $ngonngu=$_POST['ngonngu'];
                        $tacgia=$_POST['tacgia'];
                        $nhaxuatban=$_POST['nhaxuatban'];
                        $sotrang=$_POST['sotrang'];
                        $kichthuoc=$_POST['kichthuoc'];                       
                        $ngayphathanh=$_POST['ngayphathanh'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                           // echo "the file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
                        }else{
                           // echo "sorry, there was an error";
                        }
                        insert_sanpham($tensanpham,$giagoc,$giakm,$hinh,$ngonngu,$tacgia,$nhaxuatban,$sotrang,$kichthuoc,$mota,$ngayphathanh,$iddmuc);
                        $thongbao="Them thanh cong";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    //var_dump($listdanhmuc);
                    include "sanpham/add.php";
                    break;
    
                case 'listsp':  
                    if(isset($_POST['listok']) && ($_POST['listok'])){
                        $kyw= $_POST['kyw'];
                        $iddmuc = $_POST['iddmuc'];
                    }else{
                        $kyw='';
                        $iddmuc = 0;
                    }
                    $listdanhmuc=loadall_danhmuc(); 
                    $listsanpham=loadall_sanpham_home();
                    include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                        delete_sanpham($_GET['idsp']);
                    }
                    $listsanpham=loadall_sanpham_home();
                    include "sanpham/list.php";
                    break;
                case 'suasp':
                    if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                        $sanpham=loadone_sanpham($_GET['idsp']);                
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
                case 'updatesp':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                            $idsp=$_POST['idsp'];
                            $iddmuc=$_POST['iddmuc'];
                            $tensanpham=$_POST['tensanpham'];
                            $giagoc=$_POST['giagoc'];
                            $giakm=$_POST['giakm'];
                            $ngonngu=$_POST['ngonngu'];
                            $tacgia=$_POST['tacgia'];
                            $nhaxuatban=$_POST['nhaxuatban'];
                            $sotrang=$_POST['sotrang'];
                            $kichthuoc=$_POST['kichthuoc'];                       
                            $ngayphathanh=$_POST['ngayphathanh'];
                            $mota=$_POST['mota'];
                            $hinh=$_FILES['hinh']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                            if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                               // echo "the file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
                            }else{
                               // echo "sorry, there was an error";
                            }
                            update_sanpham($idsp,$iddmuc,$tensanpham,$giagoc,$giakm,$hinh,$ngonngu,$tacgia,$nhaxuatban,$sotrang,$kichthuoc,$mota,$ngayphathanh);
                        $thongbao="Cập nhật thành công";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham_home();
                    include "sanpham/list.php";
                    break;
                case 'dskh':
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
                case 'dsbl':
                    $listbinhluan=loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;

                default:
                    include "home.php";
                    break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
