 <?php
    if(is_array($dm)){
        extract($dm);
    }
?> 
<div style="margin-left: 10px;" class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT DANH MỤC</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatedm" method="POST">
           <div class="row2 mb10 form_content_container">
           <label> Mã loại </label> <br>
            <input type="text" name="maloai" disabled>
           </div>
           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="tendanhmuc" value="<?php if(isset($tendanhmuc)&&($tendanhmuc!="")) echo $tendanhmuc;?>" >
           </div>
           <div class="row2 mb10">
            <label>Trạng thái </label> <br>
            <input type="text" name="trangthai" value="<?php if(isset($trangthai)&&($trangthai!="")) echo $trangthai;?>" >
           </div>
           <br>
           <div class="row mb10 ">
            <input type="hidden" name="iddm" value="<?php if(isset($iddm)&&($iddm>0)) echo $iddm;?>">
            <input style="width: 150px;" class="mr20" name="capnhat" type="submit" value="CẬP NHẬT">
            <input style="width: 150px;" class="mr20" type="reset" value="NHẬP LẠI">

         <a style="width: 150px;" href="index.php?act=listdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                
           ?>
          </form>
         </div>
        </div>