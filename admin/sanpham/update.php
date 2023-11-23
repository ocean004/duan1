<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath = "../upload/".$image;
    if(is_file($hinhpath)){
      $hinh = "<img src='".$hinhpath."' height='80'>";
      }else{
      $hinh = "no photo";
      }
?>
<div style="margin:15px" class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
         <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
          <select name="iddmuc" >
                <option value="0" selected>Tất cả</option>
            <?php
              foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                if($iddmuc==$iddm) $s="selected"; else $s="";
                    echo '<option value="'.$iddm.'" '.$s.'>'.$tendanhmuc.'</option>';
                
              }
            ?>
            
           </select>

           <div class="row2 mb10">
              <label>Tên sản phẩm </label> <br>
              <input type="text" name="tensanpham" <?=$tensanpham?>>
            </div>
            <div class="row2 mb10">
              <label>Giá gốc</label> <br>
              <input type="text" name="giagoc" <?=$giagoc?>>
            </div>
            <div class="row2 mb10">
              <label>Giá khuyến mãi</label> <br>
              <input type="text" name="giakm" <?=$giakm?>>
            </div>

            <div class="row2 mb10">
              <label>Hình ảnh</label> <br>
              <input type="file" name="hinh" <?=$hinh?>>
            </div>
            <div class="row2 mb10">
              <label>Ngôn ngữ </label> <br>
              <input type="text" name="ngonngu" <?=$ngonngu?>>
            </div>
            <div class="row2 mb10">
              <label>Tác giả</label> <br>
              <input type="text" name="tacgia" <?=$tacgia?>>
           </div>
           <div class="row2 mb10">
              <label>Nhà xuất bản</label> <br>
              <input type="text" name="nhaxuatban" <?=$nhaxuatban?>>
           </div>
           <div class="row2 mb10">
              <label>Số trang</label> <br>
              <input type="text" name="sotrang" <?=$sotrang?>>
           </div>
           <div class="row2 mb10">
              <label>Kích thước</label> <br>
              <input type="text" name="kichthuoc" <?=$kichthuoc?>>
           </div>               
            <div class="row2 mb10">
              <label>Mô tả </label> <br>
              <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row2 mb10">
              <label>Ngày phát hành</label> <br>
              <input type="text" name="ngayphathanh" <?=$ngayphathanh?>>
           </div>
           <br>
           <div class="row mb10 ">
            <input type="hidden" name="idsp" value="<?=$idsp?>">
         <input style="width: 150px;" class="mr20" name="capnhat" type="submit" value="Cập nhật">
         <input style="width: 150px;" class="mr20" type="reset" value="NHẬP LẠI">

         <a style="width: 150px;" href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
           ?>
          </form>
         </div>
        </div>