<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="<?php echo e(asset('/logo.jpg')); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<title>Ramadhan Membawa Berkah by GHOST</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/bootstrap.css')); ?>">
	<script type="text/javascript" src="<?php echo e(asset('/js/bootstrap.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('/vuejs/vue.js')); ?>"></script>
	<script onload="waktu()" type="text/javascript" src="<?php echo e(asset('/jam.js')); ?>"></script>
</head>
<body style="
	color: white;
	background-color: #00001a;
	background-image: url('<?php echo e(asset('/background.jpeg')); ?>');
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100%;
">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<a href="" class="navbar-brand">
			<i class='fas fa-star-and-crescent' style='font-size:48px;color:white;'></i>
		</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="" class="nav-link">About</a>
			</li>
			<li class="navbar-item">
				<a href="" class="nav-link">Help</a>
			</li>
		</ul>
	</nav>

	<div class="container" style="
		padding: 3%;
	">
		<div class="row">
			<section class="col-sm-8">
				<div class="card bg-dark text-white">
					<div class="card-body">
						<p>
							<div style="text-align: center;">
								<i>السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللّهِ وَبَرَكَاتُه</i>
							</div>
							<br>
								Dengan mengucap syukur kehadirat Allah SWT karena telah memberikan kesehatan jasmani dan rohani agar senantiasa mengingat-Nya serta memberikan kebaikan - kebaikan, terutama membuat situs web ini sebagai media saya untuk mengingatkan kepada saudara - saudara baik di bulan suci Ramadhan maupun di bulan lainnya
							<br>
								Dengan mengucap
							<br>
								<div style="text-align: center;"><i>بِسْمِ اللّهِ الرَّحْمَنِ الرَّحِيْ</i></div>
							<br>
								maka, saya akan membagikan penggalan Al-Qur'an, Berita, dan Waktu Shalat selama Ramadhan 1442 H. Untuk itu, kami ucapkan terima kasih.
							<br><br>
							<div style="text-align: center;">
								<i>وَالسَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللّهِ وَبَرَكَاتُه</i>
							</div>
						</p>
					</div>
				</div>
			</section>
			<aside class="col-sm-4">
				<div class="position-fixed"><iframe id="iframe" title="prayerWidget" class="widget-m-top" style=" height: 358px; border: none;" scrolling="no" src="https://www.islamicfinder.org/prayer-widget/1624917/shafi/11/0/20.0/18.0"> </iframe>
				<ul class="nav justify-content-center" style="
					color: white;
					padding-top: 5%;
					padding-right: 5%;
					padding-bottom: 5%;
				">
					<li class="nav-item">
						<div class="badge badge-dark">
							<ul class="nav">
								<li class="nav-item" id="jam">jam</li>
								<li class="nav-item">:</li>
								<li class="nav-item" id="menit">menit</li>
								<li class="nav-item">:</li>
								<li class="nav-item" id="detik">detik</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<div class="badge badge-dark">
							<ul class="nav">
								<li class="nav-item" id="ampm">AM/PM</li>
							</ul>
						</div>
					</li>
				</ul></div>
			</aside>
		</div>
	</div>
	<div class="container">
		<footer style="text-align: center;">
			<code style="color: lightblue;"><div id="thn"></div></code>
		</footer>
	</div>
</body>
</html><?php /**PATH /var/www/test/resources/views/utama.blade.php ENDPATH**/ ?>