<?php
    session_start(); 
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/binhluan.php";
    include "model/taikhoan.php";

    include "view/header.php";
    include "global.php";

    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "sanpham":
                if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                    $kyw = $_POST['keyword'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm= load_ten_dm($iddm);
                include "view/sanpham.php";
                break;
            case "sanphamct":
                if(isset($_POST['guibinhluan'])){
                    insert_binhluan($noidung, $iduser,$idpro,$ngaybinhluan);
                }
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $sanpham = loadone_sanpham($_GET['idsp']);
                    $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                    // $binhluan = loadall_binhluan($_GET['idsp']);
                    include "view/chitietsanpham.php";
                }else{
                    include "view/home.php";            
                }
                break;
            case 'dangky':
                if(isset($_POST['dangky']) && $_POST['dangky']){
                    $tendangnhapError = "";
                    $passError = "";
                    $emailError = "";
                    $diachiError = "";
                    $sdtError = "";
                    if(isset($_POST['submit'])){
                        if(empty($_POST['tendangnhap'])){
                            $tendangnhapError = "Vui lòng nhập tên đăng nhập!";
                        }
                        if(empty($_POST['pass'])){
                            $passError = "Vui lòng nhập mật khẩu!";
                        }
                        if(empty($_POST['email'])){
                            $emailError = "Vui lòng nhập email!";
                        }
                        if(empty($_POST['diachi'])){
                            $diachiError = "Vui lòng nhập địa chỉ!";
                        }
                        if(empty($_POST['sdt'])){
                            $sdtError = "Vui lòng nhập tên số điện thoại!";
                        }
                    }
                }else{
                    $tendangnhap = $_POST['tendangnhap'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    insert_taikhoan($tendangnhap,$pass,$email,$diachi,$sdt);
                    $thongbao = "Đăng ký thành công";
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    $tendangnhap = $_POST['tendangnhap'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($tendangnhap,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['tendangnhap'] = $checkuser;                     
                        //$thongbao = "Đăng nhập thành công";
                        header('Location: index.php');
                    }else{
                        $thongbao = "Tài khoản hoặc mật khẩu không đúng!";
                        
                    }               
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tendangnhap = $_POST['tendangnhap'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $iduser = $_POST['iduser'];
                    
                    update_taikhoan($iduser,$tendangnhap,$pass,$email,$diachi,$sdt); 
                    $_SESSION['tendangnhap'] = checkuser($tendangnhap,$pass);              
                    header('Location: index.php?act=edit_taikhoan');                                    
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case 'quenmk':
                if(isset($_POST['guiemail']) && ($_POST['guiemail'])){   

                    $email = $_POST['email'];        

                    $checkemail = checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao = "Mật khẩu của bạn là:  ".$checkemail['pass'];
                    }else{
                        $thongbao = "Email chưa tồn tại!";
                    }              
                    
                    
                    
                }
                include "view/taikhoan/quenmk.php";
                break;          
            case 'thoat':
                session_unset();
                header('Location: index.php');
                break;           
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
?>
