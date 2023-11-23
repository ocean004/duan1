<?php
    function insert_taikhoan($tendangnhap,$pass,$email,$diachi,$sdt){
        $sql = "INSERT INTO user(tendangnhap,pass,email,diachi,sdt) VALUES('$tendangnhap','$pass','$email','$diachi','$sdt')";
        pdo_execute($sql);
    }
    function checkuser($tendangnhap,$pass){
        $sql = "select * from user where tendangnhap = '".$tendangnhap."' AND pass = '".$pass."'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function checkemail($email){
        $sql = "select * from user where email = '".$email."'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function update_taikhoan($iduser,$tendangnhap,$pass,$email,$diachi,$sdt){
        $sql = "UPDATE user SET tendangnhap='".$tendangnhap."', pass='".$pass."', email='".$email."', diachi='".$diachi."', sdt='".$sdt."' WHERE iduser=".$iduser;
        pdo_execute($sql);
        
    }
    function loadall_taikhoan(){
        $sql="select * from user order by iduser desc";
        $listtaikhoan=pdo_query($sql);
        return  $listtaikhoan;
    }
?>