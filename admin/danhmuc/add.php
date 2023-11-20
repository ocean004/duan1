<div style="margin-left: 10px;" class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI DANH MỤC</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=adddm" method="POST">
           <div class="row2 mb10 form_content_container">
           <label> Mã loại </label> <br>
            <input type="text" name="maloai" placeholder="nhập vào mã loại">
           </div>
           <div class="row2 mb10">
            <label>Tên danh mục </label> <br>
            <input type="text" name="tendanhmuc" placeholder="nhập vào tên">
           </div>
           <div class="row2 mb10">
            <label>Trạng thái </label> <br>
            <input type="text" name="trangthai" placeholder="nhập vào trạng thái">
           </div>
           <br>
           <div class="row mb10 ">
         <input style="width: 150px;" class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
         <input style="width: 150px;" class="mr20" type="reset" value="NHẬP LẠI">

         <a style="width: 150px;" href="index.php?act=listdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
           ?>
          </form>
         </div>
        </div>