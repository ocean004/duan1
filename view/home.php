
<main>
		<div id="carousel-home">
			<div class="owl-carousel owl-theme">
				<div class="owl-slide cover" style="background-image: url(img/slides/banner1.jpg);">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-6 static">
									<div class="slide-text white">
										<h2 class="owl-slide-animated owl-slide-title"><br>Sách Trong Nước</h2>
										
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Mua Ngay</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
				<!--/owl-slide-->
				<div class="owl-slide cover" style="background-image: url(img/slides/banner3.jpg);">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center white">
										<h2 class="owl-slide-animated owl-slide-title"><br>Sách Nước Ngoài</h2>
										
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Mua Ngay</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
				
				<div class="owl-slide cover" style="background-image: url(img/slides/banner6.jpg);">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-end">
								<div class="col-lg-6 static">
									<div class="slide-text text-end white">
										<h2 class="owl-slide-animated owl-slide-title"><br>Truyện</h2>
										
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Mua Ngay</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					<!--/owl-slide-->
				
			</div>
			<div id="icon_drag_mobile"></div>
		</div>
		<!--/carousel-->

		<ul id="banners_grid" class="clearfix">
			<li>
				<a href="#0" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="img/slides/banner2.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Sách Kinh Tế</h3>
						<div><span class="btn_1">Mua Ngay</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="img/slides/banner4.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Sách Tin Học</h3>
						<div><span class="btn_1">Mua Ngay</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="img/slides/banner5.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Sách Thiếu Nhi</h3>
						<div><span class="btn_1">Mua Ngay</span></div>
					</div>
				</a>
			</li>
		</ul>
		<!--/banners_grid -->
		
		<div  class="container margin_60_35">
			<div class="main_title">
				<h2>Sách Mới</h2>				
			</div>
			<div class="row small-gutters">
				<div class="col-6 col-md-4 col-xl-3">
					<?php
					
		
						$limit = 2;
						$getQuery = "SELECT * FROM sanpham";
						$result = mysqli_query($conn, $getQuery);
						$total_rows = mysqli_num_rows($result);
						$total_pages = ceil ($total_rows / $limit);
						if(!isset($_GET['page'])){
							$page_number = 1;
						}else{
							$page_number = $_GET['page'];
						}
						$initial_page = ($page_number-1) * $limit;
						$getQuery = "SELECT *FROM sanpham LIMIT " .$initial_page.','.$limit;
							foreach($spnew as $sp){
								extract($sp);
								$hinh=$img_path.$image;
								echo '<div class="grid_item">
								<figure>	
									<a href="product-detail-1.html">
										<img style="width:100%; height:400px" class="img-fluid lazy" src="'.$hinh.'" alt="">	
									</a>							
								</figure>			
									<a href="product-detail-1.html">
										<h3>'.$tensanpham.'</h3>
									</a>
								<div class="price_box">
									<span class="new_price">$'.$giakm.'</span>
									<span class="old_price">$'.$giagoc.'</span>
								</div>
								<ul>
									<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>							
									<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
								</ul>
							</div>';
								
							}		
						for($page_number = 1; $page_number<= $total_pages; $page_number++) {  
							echo '<a style="margin:25px;color:red; text-decoration: underline;font-size: 20px;" style="color:red"  href = "index.php?page=' . $page_number . '">' . $page_number . ' </a>'; 
							
							
							 
						} 
					?>			
					<!-- /grid_item -->
					
					
				</div>
		</div>
		<!-- /container -->
		
						
		<br>
		<br>
		<!-- /container -->
		
		<div class="bg_gray">
			<div class="container margin_30">
				<div id="brands" class="owl-carousel owl-theme">
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/nxb1.png" alt="" class="owl-lazy"></a>
					</div><!-- /item -->
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/nxb2.png" alt="" class="owl-lazy"></a>
					</div><!-- /item -->
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/nxb3.png" alt="" class="owl-lazy"></a>
					</div><!-- /item -->
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/nxb4.png" alt="" class="owl-lazy"></a>
					</div><!-- /item -->
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/nxb5.png" alt="" class="owl-lazy"></a>
					</div><!-- /item -->
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/nxb6.png" alt="" class="owl-lazy"></a>
					</div><!-- /item --> 
				</div><!-- /carousel -->
			</div><!-- /container -->
		</div>
		<!-- /bg_gray -->

		
		<!-- /container -->
	</main>