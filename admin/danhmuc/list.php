<div style="margin-left: 10px;" class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH DANH MỤC</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table class="table table-striped table-condensed table-bordered">
            <tr>
                <th></th>
                <th style="font-size:15px;">MÃ LOẠI</th>
                <th style="font-size:15px;">TÊN DANH MỤC</th>
                <th style="font-size:15px;">TRẠNG THÁI</th>
                <th style="font-size:15px;">Action</th>
            </tr>
            <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&iddm=".$iddm;
                    $xoadm="index.php?act=xoadm&iddm=".$iddm;
                    echo '<tr style="font-size:15px;">
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$iddm.'</td>
                        <td>'.$tendanhmuc.'</td>
                        <td>'.$trangthai.'</td>
                        <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>   
                            <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                }
            ?>
                     
           </table>
           </div>
           <br>
           <div class="row mb10 " >
         <input style="width: 150px;" class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input style="width: 150px;" class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            <a style="width: 150px;" href="index.php?act=adddm"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>