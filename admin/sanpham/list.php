<div style="margin:15px" class="row2">
  <div class="row2 font_title">
    <h1 style="text-align: center;">DANH SÁCH SẢN PHẨM</h1>
      </div>
        <center>
        <form action="index.php?act=listsp" method="POST">
          <div class="row2 mb10 formds_loai">
            <form action="#" method="post">
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
        </form>
        </center>
        <div class="row2 form_content ">         
  
          <!-- phan trang -->
          <?php
            $limit = 1;
            if(isset($_GET['page'])){
              $page_number = $_GET['page'];
            }else{
              $page_number=1;
            }
            $initial_page = ($page_number-1) * $limit;
            $getQuery = "SELECT * FROM sanpham LIMIT $initial_page,$limit";
            $result = mysqli_query($conn, $getQuery);
          ?>
          <div class="container">
            <br>
            <div>
              <h1></h1>
              <table class="table table-striped table-condensed table-bordered">
                <thead>
                  <tr>
                    <th></th>
                    <th>Mã sản phẩm </th>
                    <th>Tên sản phẩm</th>
                    <th>Giá gốc</th>
                    <th>Giá km</th>
                    <th>Hình ảnh</th>
                    <th>Ngôn ngữ</th>
                    <th>Tác giả</th>
                    <th>NXB</th>
                    <th>Số trang</th>
                    <th>Kích thước</th>
                    <th>Mô tả</th>
                    <th>Ngày phát hành</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while($row = mysqli_fetch_array($result)){
                      //
                  ?>
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
                      echo '<tr>
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
                  }
                  ?>
                  
                </tbody>
              </table>
              <div class="Items">    
                <?php  
                  $getQuery = "SELECT COUNT(*) FROM sanpham";     
                  $result = mysqli_query($conn, $getQuery);     
                  $row = mysqli_fetch_row($result);     
                  $total_rows = $row[0];              
                  echo "</br>";            
                  // get the required number of pages
                  $total_pages = ceil($total_rows/$limit);     
                  $pageURL = "";             
                  if($page_number>=2){   
                      echo "<a href='index.php?page=".($page_number-1)."'>  Prev </a>";   
                  }                          
                  for ($i=1; $i<=$total_pages; $i++) {   
                    if ($i == $page_number) {   
                        $pageURL .= "<div><a class = 'active' href='index.php?page=".$i."'> ".$i." </a></div>";                                                     
                    }               
                    else  {   
                        $pageURL .= "<a href='index.php?page=".$i."'> ".$i." </a>";                                                    
                    }   
                  };     
                  echo $pageURL;    
                  if($page_number<$total_pages){   
                      echo "<a href='index.php?page=".($page_number+1)."'>  Next </a>";   
                  }     
                ?>    
              </div>
              <div class="inline">   
                <input id="page" type="number" min="1" max="<?php echo $total_pages?>"placeholder="<?php echo $page_number."/".$total_pages; ?>" required>           
                <button onClick="go2Page();">Go</button>   
              </div> 
            </div>
          </div>
          <!-- het phan trang -->
        </div>
        <br>
    <div class="row mb10 ">
      <input style="width: 150px;" class="mr20" type="button" value="CHỌN TẤT CẢ">
      <input style="width: 150px;" class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
      <a style="width: 150px;" href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
    </div>
  </div>
</div>
<script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'index.php?page='+page;   
    }   
</script>