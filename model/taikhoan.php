<?php
    function insert_taikhoan($email,$user,$pass){
        $sql = "INSERT INTO taikhoan(email,user,pass) VALUES('$email','$user','$pass')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql = "select * from taikhoan where user = '".$user."' AND pass = '".$pass."'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function checkemail($email){
        $sql = "select * from taikhoan where email = '".$email."'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel){
        $sql = "UPDATE taikhoan SET user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' WHERE id=".$id;
        pdo_execute($sql);
        
    }
    function loadall_taikhoan(){
        $sql="select * from taikhoan order by id desc";
        $listtaikhoan=pdo_query($sql);
        return  $listtaikhoan;
    }
?>