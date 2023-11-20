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
                    $iddm=$_POST['iddm'];
                    $trangthai=$_POST['trangthai'];
                    update_danhmuc($iddm,$tendanhmuc,$trangthai);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;

                /* CONTROLLER SAN PHAM */
                case 'addsp':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                           // echo "the file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
                        }else{
                           // echo "sorry, there was an error";
                        }
                        insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                        $thongbao="Them thanh cong";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    //var_dump($listdanhmuc);
                    include "sanpham/add.php";
                    break;
    
                case 'listsp':  
                    if(isset($_POST['listok']) && ($_POST['listok'])){
                        $kyw= $_POST['kyw'];
                        $iddm = $_POST['iddm'];
                    }else{
                        $kyw='';
                        $iddm = 0;
                    }
                    $listdanhmuc=loadall_danhmuc(); 
                    $listsanpham=loadall_sanpham_home();
                    include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham_home();
                    include "sanpham/list.php";
                    break;
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham=loadone_sanpham($_GET['id']);                
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
                case 'updatesp':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                            $id=$_POST['id'];
                            $iddm=$_POST['iddm'];
                            $tensp=$_POST['tensp'];
                            $giasp=$_POST['giasp'];
                            $mota=$_POST['mota'];
                            $hinh=$_FILES['hinh']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                            if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                               // echo "the file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
                            }else{
                               // echo "sorry, there was an error";
                            }
                        update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
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
