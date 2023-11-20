<?php
function loadall_danhmuc(){
    $sql="select * from danhmuc order by iddm desc";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
    function insert_danhmuc($tendanhmuc,$trangthai){
        $sql = "INSERT INTO danhmuc(tendanhmuc,trangthai) VALUES('$tendanhmuc','$trangthai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($iddm){
        $sql = "DELETE FROM danhmuc WHERE iddm=".$iddm;
        pdo_execute($sql);
    }
    function loadone_danhmuc($iddm){
        $sql= "SELECT * FROM danhmuc WHERE iddm=".$iddm;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($iddm,$tendanhmuc,$trangthai){
        $sql = "UPDATE danhmuc SET tendanhmuc='".$tendanhmuc."' and trangthai = '".$trangthai."' WHERE iddm=".$iddm;
        pdo_execute($sql);
        
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="select * from sanpham where iddm=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $dm;
        }else{
            return "";
        }
    }
?>