<?php
function insert_sanpham($tensanpham,$giagoc,$giakm,$hinh,$ngonngu,$tacgia,$nhaxuatban,$sotrang,$kichthuoc,$mota,$ngayphathanh,$iddmuc){
    $sql = "INSERT INTO sanpham(tensanpham,giagoc,giakm,image,ngonngu,tacgia,nhaxuatban,sotrang,kichthuoc,mota,ngayphathanh,iddmuc) VALUES('$tensanpham','$giagoc','$giakm','$hinh','$ngonngu','$tacgia','$nhaxuatban','$sotrang','$kichthuoc','$mota','$ngayphathanh','$iddmuc')";
    pdo_execute($sql);
}
function delete_sanpham($idsp){
    $sql = "DELETE FROM sanpham WHERE idsp=".$idsp;
    pdo_execute($sql);
}
function loadall_sanpham_home(){  //phân trang làm ở đây
    $sql="select * from sanpham where 1 order by idsp asc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($keyw="",$iddmuc=0){
    $sql="select * from sanpham where 1";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddmuc>0){
        $sql.=" and iddmuc='".$iddmuc."'";
    }
    $sql.=" order by idsp desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadone_sanpham($idsp){
    $sql = "select * from sanpham where idsp = $idsp";
    $result = pdo_query_one($sql);
    return $result;
}
function load_sanpham_cungloai($idsp, $iddmuc){
    $sql = "select * from sanpham where iddmuc = $iddmuc and idsp <> $idsp";//<> là khác
    $result = pdo_query($sql);
    return $result;
}
    function loadone_sanpham_sp($idsp){
        $sql= "SELECT * FROM sanpham WHERE idsp=".$idsp;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($idsp,$iddmuc,$tensanpham,$giagoc,$giakm,$hinh,$ngonngu,$tacgia,$nhaxuatban,$sotrang,$kichthuoc,$mota,$ngayphathanh){
        if($hinh!="")
            $sql = "UPDATE sanpham SET iddmuc='".$iddmuc."', tensanpham='".$tensanpham."', giagoc='".$giagoc."', giakm='".$giakm."', image='".$hinh."', ngonngu='".$ngonngu."', tacgia='".$tacgia."', nhaxuatban='".$nhaxuatban."', sotrang='".$sotrang."', kichthuoc='".$kichthuoc."', mota='".$mota."', ngayphathanh='".$ngayphathanh."' WHERE idsp=".$idsp;
        else
            $sql = "UPDATE sanpham SET iddmuc='".$iddmuc."', tensanpham='".$tensanpham."', giagoc='".$giagoc."', giakm='".$giakm."', ngonngu='".$ngonngu."', tacgia='".$tacgia."', nhaxuatban='".$nhaxuatban."', sotrang='".$sotrang."', kichthuoc='".$kichthuoc."', mota='".$mota."', ngayphathanh='".$ngayphathanh."' WHERE idsp=".$idsp;
        pdo_execute($sql);
        
    }
?>