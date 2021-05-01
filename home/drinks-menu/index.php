<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quầy Lưu Niệm</title>
        <!-- <library> -->
		<link href="../library/style.css" rel="stylesheet" type="text/css">
		<link href="../library/fontawesome/css/all.css" rel="stylesheet" type="text/css">
		<!-- </library> -->
		<!-- <css> -->	
		<link href="drinks-menu.css" rel="stylesheet" type="text/css">
		<!-- </css> -->
</head>
<body>
	<!-- <wrapper> -->
	<div class="wrapper">
		<!-- <header> -->
		<div class="header">
			<div class="menu">
				<div class="nav-menu">	
					<ul>
						<li><a href="">Câu Chuyện</a></li>
						<li><a href="">Bảng Tin</a>
							<div class="wrap-drop"> 
								<ul>
									<li><a href="">Cộng</a></li>
									<li><a href="">Tin Tức</a></li>
									<li><a href="">Tuyển Dụng</a></li>
									<li><a href="">Đó Đây</a></li>
									<li><a href="">Pha Chế</a></li>
								</ul>
							</div>
						</li>
						<li><a href="">Tạp Hóa</a>
							<div class="wrap-drop"> 
								<ul>
									<li><a href="">Thực Đơn</a></li>
									<li><a href="">Quầy Lưu Niệm</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<div class="logo-brand">
					<div class="brand">
						<a href="http://congcaphe.com.vn">
							<img src="images/brand.png">
						</a>
					</div>
				</div>
				<div class="nav-menu">
					<ul>
						<li><a href="">Tuyển Dụng</a>
							<div class="wrap-drop"> 
								<ul>
									<li><a href="">Ứng Tuyển</a></li>
								</ul>
							</div>
						</li>
						<li><a href="https://congcaphe.com/stores">Cửa Hàng</a></li>
						<li><a href="">Liên Hệ</a>
							<div class="wrap-drop"> 
								<ul>
									<li><a href="">Cộng Lắng Nghe</a></li>
									<li><a href="">Hợp Tác</a></li>
									<li><a href="">Về Chúng Tôi</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- <div class="nation">
				<a href=""><img src="images/nation.png"></a>
			</div> -->
		</div>
		<!-- </header> -->

		<!-- <drinks-menu> -->
		<div class="productsWrap">
			<div class="menu-aside">
				<ul class="product-categories">
					<li class="catItem"><a href="index.php?ma=0">All</a></li>
					<?php
					$con = mysqli_connect("localhost","root","","congcafe");
					$sl_al = "SELECT * FROM `MaLuuNiem`";
					$sql_al = mysqli_query($con,$sl_al);
					while($row = mysqli_fetch_array($sql_al)){
					?>

					<li class="catItem"><a href="index.php?ma=<?php echo $row['id']; ?>"><?php echo $row['MaLuuNiem']; ?></a></li>
					
				
							<?php
				}
					?>
				</ul>
			</div>
			<div class="products-block">
				<?php
				$ma = @$_GET['ma'];
					$con = mysqli_connect("localhost","root","","congcafe");
					$sq_al = "SELECT * FROM `Luuniem` WHERE `MaLuuNiem` LIKE '$ma'";
					if($ma == 0){ $sq_al = "SELECT * FROM `Luuniem`";}
					$sql_a = mysqli_query($con,$sq_al);
					while($rowe = mysqli_fetch_array($sql_a)){
					?>

				<div class="itemProducts">
					<a href="product-details/index.html">
						<span class="imgPrd">
							<img src="<?php echo $rowe['Images']; ?>">
						</span>
						<h3><?php echo $rowe['TenLuuNiem']; ?></h3>
						<h3>Gía: <?php echo $rowe['GiaLuuNiem']; ?></h3>
					</a>
				</div>

				<?php
				}
					?>
				<!-- <div class="itemProducts">
					<a href="">
						<span class="imgPrd">
							<img src="images/itemProducts02.png">
						</span>
						<h3>Bình Giữ Nhiệt</h3>
					</a>
				</div>

				<div class="itemProducts">
					<a href="">
						<span class="imgPrd">
							<img src="images/itemProducts03.png">
						</span>
						<h3>Hộp Quà Niềm Vui</h3>
					</a>
				</div>
				<div class="itemProducts">
					<a href="">
						<span class="imgPrd">
							<img src="images/itemProducts04.png">
						</span>
						<h3>TÚI VẢI TO-TE</h3>
					</a>
				</div>
				<div class="itemProducts">
					<a href="">
						<span class="imgPrd">
							<img src="images/itemProducts05.png">
						</span>
						<h3>Mũ Bucket S.A.V.E - 01</h3>
					</a>
				</div>
				<div class="itemProducts">
					<a href="">
						<span class="imgPrd">
							<img src="images/itemProducts06.png">
						</span>
						<h3>Mũ Bucket S.A.V.E - 02A</h3>
					</a>
				</div>
				<div class="itemProducts">
					<a href="">
						<span class="imgPrd">
							<img src="images/itemProducts07.png">
						</span>
						<h3>Mũ Bucket S.A.V.E - 02B</h3>
					</a>
				</div>
				<div class="itemProducts">
					<a href="">
						<span class="imgPrd">
							<img src="images/itemProducts08.png">
						</span>
						<h3>Ví VND-007</h3>
					</a>
				</div>
				<div class="itemProducts">
					<a href="">
						<span class="imgPrd">
							<img src="images/itemProducts09.png">
						</span>
						<h3>Áo Phông Cộng</h3>
					</a>
				</div>
				<div class="itemProducts">
					<a href="">
						<span class="imgPrd">
							<img src="images/itemProducts10.png">
						</span>
						<h3>LÌ-XÌ CANH TÝ</h3>
					</a>
				</div>
				<div class="itemProducts">
					<a href="">
						<span class="imgPrd">
							<img src="images/itemProducts11.png">
						</span>
						<h3>Áo Trấn Thủ dài tay</h3>
					</a>
				</div>
				<div class="itemProducts">
					<a href="">
						<span class="imgPrd">
							<img src="images/itemProducts12.png">
						</span>
						<h3>Sổ Ghi Của Chú</h3>
					</a>
				</div> -->
			</div>
		</div>

		<!-- </drinks-menu> -->

		<!-- <bottom> -->
		<div class="bottom">
			<div class="contact">
				<div class="left">
					<h2>Kênh Kết Nối</h2>
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-instagram"></i></i></a>
					<a href=""><i class="fab fa-youtube"></i></a>
				</div>
				<div class="right">
					<h2>Luôn Cập Nhật</h2>
					<p>Về các tin tức đó đây, sản phẩm mới</p>
					<div class="form">
						<input class="email" type="text" name="" value="" placeholder="Email">
						<input class="btn" type="button" name="" value="Đăng Ký">
						<p>Chúng tôi tôn trọng quyền riêng tư của bạn</p>			
					</div>
				</div>
			</div>
		</div>
		<!-- </bottom> -->
		<!-- <footer> -->
		<div class="footer">
			<div class="copyright">
				<p>&copy;2017 - 2019 Created By Devllee - CÔNG TY TNHH <span>Cộng CàPhê</span> Mọi quyền được bảo lưu</p>
			</div>
		</div>
		<!-- </footer> -->
	</div>
	<!-- </wrapper> -->
</body>
</html>