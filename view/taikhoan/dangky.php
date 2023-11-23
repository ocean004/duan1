<?php
        
?>
<main class="bg_gray">	
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
		    </div>
		    <h1>Đăng Nhập hoặc Đăng Ký</h1>
	    </div>
	    <!-- /page_header -->
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="client">Đăng Nhập</h3>
					<div class="form_container">					
						<form action="index.php?act=dangnhap" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="tendangnhap" placeholder="Tên đăng nhập*">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass"  value="" placeholder="Mật khẩu*">
                            </div>
                            <div class="clearfix add_bottom_15">
                                <div class="checkboxes float-start">
                                    <label class="container_check">Nhớ tài khoản
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="float-end"><a id="forgot" href="#">Quên mật khẩu?</a></div>
                            </div>
                            <h3 style="transition: 4s;" class="thongbao">
                            <?php
                                if(isset($thongbao)&&($thongbao)!=""){
                                    echo $thongbao;
                                }
                            ?>
                            </h3>
                            <hr>			
                            <div class="text-center">
                                <input type="submit" name="dangnhap" value="Đăng Nhập" class="btn_1 full-width">
                            </div>
                        </form>
						<!-- <div id="forgot_pw">quên mật khẩu
							<div class="form-group">
								<input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email">
							</div>
							<p>A new password will be sent shortly.</p>
							<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
						</div> -->
					</div>					
				</div>				
			</div>
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">Đăng Ký</h3>                   
					<div class="form_container">
						<form action="index.php?act=dangky" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="tendangnhap" id="tendangnhap" placeholder="Tên đăng nhập*">
                                <?php echo "<span>$tendangnhapError</span>" ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass" id="pass" value="" placeholder="Mật khẩu*">
                                <?php echo "<span>$passError</span>" ?>
                            </div>											
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                                <?php echo "<span>$emailError</span>" ?>
                            </div>                                                    
                            <div class="form-group">
                                <input type="text" class="form-control" name="diachi" id="diachi" placeholder="Địa chỉ*">
                                <?php echo "<span>$diachiError</span>" ?>
                            </div>                                                      
                            <div class="form-group">
                                <input type="text" class="form-control" name="sdt" id="sdt" placeholder="Số điện thoại*">
                                <?php echo "<span>$sdtError</span>" ?>
                            </div>                          																													
                            <div class="form-group">
                                <label class="container_check">Đồng ý với <a style="text-decoration: underline;" href="#0">Terms and conditions</a>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <h4 class="thongbao">
                            <?php
                                if(isset($thongbao)&&($thongbao)!=""){
                                    echo $thongbao;
                                }
                            ?>
                            </h4>
                            <hr>
                            <div class="text-center">
                                <input type="submit" name="dangky" value="Đăng Ký" onclick="checkForm()" class="btn_1 full-width">
                            </div>
                        </form>
					</div>					
				</div>				
			</div>
		</div>	
	</div>		
</main>
	<div id="toTop"></div><!-- Back to top button -->
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    	// Client type Panel
		$('input[name="client_type"]').on("click", function() {
		    var inputValue = $(this).attr("value");
		    var targetBox = $("." + inputValue);
		    $(".box").not(targetBox).hide();
		    $(targetBox).show();
		});
        function checkForm(){
            var tendangnhap =document.getElementById("tendangnhap");
            var pass =document.getElementById("pass");
            var email =document.getElementById("email");
            var diachi =document.getElementById("diachi");
            var sdt =document.getElementById("sdt");
            if(tendangnhap.value != ""){
                if(tendangnhap.value.length<6){
                    alert("Vui long nhap ten dang nhap >=6 ki tu!");
                    tendangnhap.focus();
                }
            }else{
                alert("Vui lòng nhập vào chỗ còn thiếu!");
                tendangnhap.focus();
            }
            if(tendangnhap.value != ""){
                if(tendangnhap.value.length<6){
                    alert("Vui long nhap ten dang nhap >=6 ki tu!");
                    tendangnhap.focus();
                }
            }else{
                alert("Vui lòng nhập vào chỗ còn thiếu!");
                tendangnhap.focus();
            }
            if(tendangnhap.value != ""){
                if(tendangnhap.value.length<6){
                    alert("Vui long nhap ten dang nhap >=6 ki tu!");
                    tendangnhap.focus();
                }
            }else{
                alert("Vui lòng nhập vào chỗ còn thiếu!");
                tendangnhap.focus();
            }
            if(tendangnhap.value != ""){
                if(tendangnhap.value.length<6){
                    alert("Vui long nhap ten dang nhap >=6 ki tu!");
                    tendangnhap.focus();
                }
            }else{
                alert("Vui lòng nhập vào chỗ còn thiếu!");
                tendangnhap.focus();
            }
            if(tendangnhap.value != ""){
                if(tendangnhap.value.length<6){
                    alert("Vui long nhap ten dang nhap >=6 ki tu!");
                    tendangnhap.focus();
                }
            }else{
                alert("Vui lòng nhập vào chỗ còn thiếu!");
                tendangnhap.focus();
            }
        }            
	</script>	
</body>
</html>