<div style="margin:15px" class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
            <label> Danh mục </label> <br>
            <select name="iddmuc" >
              <?php
                foreach($listdanhmuc as $danhmuc){
                  extract($danhmuc);
                  echo '<option value="'.$iddm.'">'.$tendanhmuc.'</option>';
                }
              ?>
              
            </select>
              <input type="text" name="masp" placeholder="Nhập mã sản phẩm">
            </div>

            <div class="row2 mb10">
              <label>Tên sản phẩm </label> <br>
              <input type="text" name="tensanpham" >
            </div>
            <div class="row2 mb10">
              <label>Giá gốc</label> <br>
              <input type="text" name="giagoc" >
            </div>
            <div class="row2 mb10">
              <label>Giá khuyến mãi</label> <br>
              <input type="text" name="giakm" >
            </div>

            <div class="row2 mb10">
              <label>Hình ảnh </label> <br>
              <input type="file" name="hinh" >
            </div>
            <div class="row2 mb10">
              <label>Ngôn ngữ </label> <br>
              <input type="text" name="ngonngu" >
            </div>
            <div class="row2 mb10">
              <label>Tác giả</label> <br>
              <input type="text" name="tacgia" >
           </div>
           <div class="row2 mb10">
              <label>Nhà xuất bản</label> <br>
              <input type="text" name="nhaxuatban" >
           </div>
           <div class="row2 mb10">
              <label>Số trang</label> <br>
              <input type="text" name="sotrang" >
           </div>
           <div class="row2 mb10">
              <label>Kích thước</label> <br>
              <input type="text" name="kichthuoc" >
           </div>               
            <div class="row2 mb10">
              <label>Mô tả </label> <br>
              <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row2 mb10">
              <label>Ngày phát hành</label> <br>
              <input type="text" name="ngayphathanh" >
           </div>
            <br>
           <div class="row mb10 ">
         <input style="width: 150px;" class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
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