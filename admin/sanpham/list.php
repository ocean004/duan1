<div style="margin:15px" class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH SẢN PHẨM</h1>
         </div>
         <form action="index.php?act=listsp" method="POST">
           <div class="row2 mb10 formds_loai">
            <form action="#" method="post"></form>
            <input type="text" name="kyw">
            <select name="iddmuc" >
                <option value="0" selected>Tất cả</option>
            <?php
              foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$iddm.'">'.$tendanhmuc.'</option>';
              }
            ?>
            
           </select>
           <input type="submit" name="listok" value="Go">
            </form>
         <div class="row2 form_content ">
          
           <table border="1">
            <tr>
                <th></th>
                <th>MÃ SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>GIÁ GỐC</th>
                <th>GIÁ KM</th>
                <th>HÌNH ẢNH</th>
                <th>NGÔN NGỮ</th>
                <th>TÁC GIẢ</th>
                <th>NHÀ XUẤT BẢN</th>
                <th>SỐ TRANG</th>
                <th>KÍCH THƯỚC</th>
                <th>MÔ TẢ</th>
                <th>NGÀY PHÁT HÀNH</th>
                <th></th>
            </tr>
            <?php
                foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp="index.php?act=suasp&idsp=".$idsp;
                    $xoasp="index.php?act=xoasp&idsp=".$idsp;
                    $hinhpath = "../upload/".$image;
                    if(is_file($hinhpath)){
                        $hinh = "<img src='".$hinhpath."' height='80' text-align:center>";
                    }else{
                        $hinh = "no photo";
                    }

                    echo '
                    <tr>
                        <td><input type="checkbox" name="" idsp=""></td>                        
                        <td>'.$idsp.'</td>
                        <td>'.$tensanpham.'</td>
                        <td>'.$giagoc.'</td>
                        <td>'.$giakm.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$ngonngu.'</td>
                        <td>'.$tacgia.'</td>
                        <td>'.$nhaxuatban.'</td>
                        <td>'.$sotrang.'</td>
                        <td>'.$kichthuoc.'</td>
                        <td>'.$mota.'</td>
                        <td>'.$ngayphathanh.'</td>
                        
                        <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>   
                            <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                }
            ?>
                     
           </table>
           </div>
           <br>
           <div class="row mb10 ">
         <input style="width: 150px;" class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input style="width: 150px;" class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            <a style="width: 150px;" href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>