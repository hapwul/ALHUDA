<?php

require_once "core/init.php";

$query="SELECT * FROM blog ORDER BY id DESC LIMIT 3";
$result=mysqli_query($link, $query);
if(!$result) {
	die("Query 1 error : ".mysqli_errno($link)." - ".mysqli_error($link));
}

$query2="SELECT * FROM blog ORDER BY id DESC LIMIT 3, 3";
$result2=mysqli_query($link, $query2);
if(!$result2) {
	die("Query 2 error : ".mysqli_errno($link)." - ".mysqli_error($link));
}

$query3="SELECT * FROM gallery ORDER BY id DESC LIMIT 9";
$result3=mysqli_query($link, $query3);
if(!$result3) {
	die("Query 3 error : ".mysqli_errno($link)." - ".mysqli_error($link));
}

$query4="SELECT * FROM blog ORDER BY id DESC LIMIT 6, 3";
$result4=mysqli_query($link, $query4);
if(!$result4) {
	die("Query 4 error : ".mysqli_errno($link)." - ".mysqli_error($link));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SMP Al-Huda Surabaya</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files just change a little -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/carousel.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- gallery -->
<link href="css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->
<!-- /fonts -->
<link href="//fonts.googleapis.com/css?family=Montserrat+Alternates:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
<!-- //fonts -->




<!-- //css files -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!-- //js -->
</head>
<body>
<!--header-banner-section-starts-here -->
<section class="banner-header" id="home">
		<!--header-->
		<div class="header">
			<nav class="navbar navbar-default">
				<div class="container">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="index.html">SMP AL-HUDA</i></a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
				            <li class="active"><a href="index.html">Home</a></li>
							<li><a href="#about" class="scroll">Tenaga Pendidik</a></li>
							<li><a href="#services" class="scroll">Visi Misi</a></li>
							<li><a href="#gallery" class="scroll">Galeri</a></li>
							<li><a href="#professor" class="scroll">Sejarah</a></li>
							<li><a href="#contact" class="scroll">Kontak</a></li>
						</ul>
					</nav>
				</div>
			</nav>
			<div class="w3-banner-links">
				<ul class="banner-agileits">
					<li><a href="#admission" class="scroll">Berita Terbaru</a></li>
					<li><a href="berita.html">Latihan Soal</a></li>
				</ul>

			</div>			
		</div>
		<!--//header-->
<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption">
						<h2>SMP AL-HUDA SURABAYA</h2>
						<p>Membentuk warga sekolah yang beriman, bertaqwa, berakhlak mulia dan berbudi pekerti luhur dengan mengembangkan sikap dan perilaku religius baik didalam sekolah maupun diluar sekolah.</p>
						<button class="btn btn-primary" data-target="#myModal" data-toggle="modal">Lebih lanjut</button>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>SMP AL-HUDA SURABAYA</h3>
						<p>Membentuk warga sekolah yang beriman, bertaqwa, berakhlak mulia dan berbudi pekerti luhur dengan mengembangkan sikap dan perilaku religius baik didalam sekolah maupun diluar sekolah.</p>
						<button class="btn btn-primary" data-target="#myModal" data-toggle="modal">Lebih lanjut</button>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>SMP AL-HUDA SURABAYA</h3>
						<p>Membentuk warga sekolah yang beriman, bertaqwa, berakhlak mulia dan berbudi pekerti luhur dengan mengembangkan sikap dan perilaku religius baik didalam sekolah maupun diluar sekolah.</p>
						<button class="btn btn-primary" data-target="#myModal" data-toggle="modal">Lebih lanjut</button>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>SMP AL-HUDA SURABAYA</h3>
						<p>Membentuk warga sekolah yang beriman, bertaqwa, berakhlak mulia dan berbudi pekerti luhur dengan mengembangkan sikap dan perilaku religius baik didalam sekolah maupun diluar sekolah.</p>
						<button class="btn btn-primary" data-target="#myModal" data-toggle="modal">Lebih lanjut</button>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>SMP AL-HUDA SURABAYA</h3>
						<p>Membentuk warga sekolah yang beriman, bertaqwa, berakhlak mulia dan berbudi pekerti luhur dengan mengembangkan sikap dan perilaku religius baik didalam sekolah maupun diluar sekolah.</p>
						<button class="btn btn-primary" data-target="#myModal" data-toggle="modal">Lebih lanjut</button>
					</div>
				</div>
			</div> 
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
		<div id="myModal" class="modal wthree-modal" tabindex="-1"> 
			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<span class="close" data-dismiss="modal" >&times;</span>
					<h3>SMP Al-Huda Surabaya</h3>
				</div>
				<div class="col-md-6 modal-img">
					<img src="images/logohuda.jpg" class="img-responsive" alt="w3layouts" title="w3layouts">
				</div>
				<div class="col-md-6 modal-text">
					<p class="banner-p1">SMP Al Huda Surabaya merupakan sekolah islam yang didirikan di kawasan Mulyorejo, Surabaya sejak tahun 2000. SMP Al Huda kini dipimpin oleh Drs. H. Barokah, M.Pd sebagai kepala sekolah.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>		
		<div class="thim-click-to-bottom">
			<a href="#admission" class="scroll">
				<i class="fa  fa-chevron-down"></i>
			</a>
		</div>
    </div> 
	<!-- //banner -->
	
</section>	

<!--//header-banner-section-end-here -->
<!--/about -->
<div id="about" class="about all_pad w3ls">
	<div class="container">
		<h3 class="w3-about-title">Tenaga Pengajar</h3>
		<div class="ser-top-grids">
			<div class="col-md-4 ser-grid wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="con-left text-center">
					<div class="spa-ico"><span><i class="fa fa-user" aria-hidden="true"></i></span></div>
					<h5>Kepala Sekolah</h5> <br> <br>
					<p>1. Kepala Sekolah :<br> 
                        <strong>Drs. H. Barokah, M.Pd</strong><br><br>
                        
                        2. Ketua Komite : <br>
                        <strong>H. M. Muchdlor</strong> <br><br>
                        
                        3. Wakil Kepala Sekolah : <br>
                        <strong>Dra. Hj. Idhomah</strong>
                    
                    </p>
					
				</div>
			</div>
			<div class="col-md-4 ser-grid wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="con-left text-center">
					<div class="spa-ico"><span><i class="fa fa-user" aria-hidden="true"></i></span></div>
					<h5>Pengembang Silabus dan RPP Mata Pelajaran Wajib</h5>
					<p>1. B. Indonesia : <br>
                        <strong>Muflihah, S.Pd</strong> <br><br>

                        2. B. Inggris : <br>
                        <strong>Muhammad Zulham, S.Pd</strong> <br><br>

                        3. Matematika : <br>
                        <strong>Lailatul Masyrifah, S.Pd</strong> <br><br>
                        
                        4. IPA <br>
                        <strong>Rohmat Efendi, S.Pd</strong>

                        </p>
					
				</div>
			</div>
			<div class="col-md-4 ser-grid wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="con-left text-center">
					<div class="spa-ico"><span><i class="fa fa-user" aria-hidden="true"></i></span></div>
					<h5>Pengembang Silabus dan RPP Mata Pelajaran Tambahan</h5>
					<p>1. BK : <br>
                        <strong>Rifki Hardianti AM, S.Pd</strong> <br><br>
                        
                        2. IPS : <br>
                        <strong>Hj. Khoirul Bariyah, S.Pdi</strong> <br><br>
                        
                        3. Kesenian dan Olahraga : <br>
                        <strong>Muhammad Hasan Basri, SE</strong> <br><br>
                        
                        4. TIK : <br>
                        <strong>Muhammad Faishol Abdau, S.Pd</strong> <br><br>
                        
                        5. Bahasa Daerah : <br>
                        <strong>Drs. H. M. Iksan</strong> <br><br>
                        
                        6. Bahasa Arab : <br>
                        <strong>Aimatus Sholihah, S.Pdi, M.Pdi</strong> <br><br>
                    </p>
					
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//about -->
<!--/services -->
<div class="services" id="services">
		<div class="w3-services-head">
			<h3 id="visimisi">VISI & MISI</h3>
		</div>
		<div class="w3-service-grids">
			<div class="w3-service-grid-top1">
				<div class="col-md-5 w3-services-grid1">
						<div class="col-md-4 w3-services-01">
						<h3>Visi</h3>
						</div>
						<div class="col-md-8 w3-services-heading">
						<p>RELIGIUS, BERBUDAYA, CERDAS, BERPENGETAHUAN DAN TRAMPIL SERTA BERAKHLAKUL KARIMAH</p>
						</div>
				</div>
				<div class="col-md-7 w3-services-grid1">
						<div class="col-md-4 w3-services-01">
						<h3>Misi</h3>
						</div>
						<div class="col-md-8 w3-services-heading">
						<ol style="tex">
							<li>Membentuk warga sekolah yang beriman, bertaqwa, berakhlak mulia dan berbudi pekerti luhur dengan mengembangkan sikap dan perilaku religius baik di dalam sekolah maupun diluar sekolah.</li>
							<li>Mengembangkan budaya gemar membaca, rasa ingin tahu, bertoleransi, bekerjasama, saling menghargai, displin , jujur, kerja keras, kreatif dan inovatif.</li>
							<li>Meningkatkan nilai kecerdasan, cinta ilmu dan keingintahuan peserta didik dalam bidang akademik maupun non-akademik.</li>
							<li>Menciptakan suasana pembelajaran yang menantang, menyenangkan, komunikatif,tanpa takut salah, dan demokratis.</li>
							<li>Mengupayakan pemanfaatan waktu belajar, sumber daya fisik, dan manusia agar memberikan hasil yang terbaik bagi perkembangan peserta didik.</li>
						</ol>
						</div>
				</div>
			<div class="clearfix"></div>
		</div>
</div>

<!--//services -->
<!--/experience overview -->
<div class="w3-faculty-ex">
	<div class="w3-agile-faculty-head">
	<h3>Tentang Kami</h3>
	</div>
	<div class="w3-aglile-faculty-grids">
			<div class="w3-aglile_faculty-grid1">
					<div class="col-md-3 w3-faculty-img1">
					</div>
					<div class="col-md-3 w3-faculty-data">
						<h3>Fasilitas</h3>
						 <ul>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span>Musholla</li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span>Kelas</li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span>Laboratorium</li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span>Lapangan</li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span>Perpustakaan</li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span>Parkiran</li>
						 </ul>
					</div>
					<div class="col-md-3 w3-faculty-ex-years">
						<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
						<h3>13</h3>
						<p>Kurikulum K13 </p>
					</div>
					<div class="col-md-3 w3-faculty-img2">
					</div>
					<div class="clearfix"></div>
			</div>
			<div class="w3-agile-faculty-grid2">
			<div class="col-md-3 w3-faculty-img3">
					</div>
				<div class="col-md-3 w3-faculty-ex-years">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h3>(*30)</h3>
						<p>lebih dari blablabla tenaga pendidik yang berkompeten di bidangnya </p>
				</div>
				<div class="col-md-3 w3-faculty-data">
						<h3>Ekskul</h3>
						 <ul>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span>MTQ</li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span>Basket</li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span>Musik</li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span>Sepak Bola</li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span>Merching band</li>
						 </ul>
				</div>
				<div class="col-md-3 w3-faculty-img4">
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="w3-agile-faculty-grid3">
				<div class="col-md-4 w3-faculty-services1">
							<i class="fa fa-user" aria-hidden="true"></i>
						<h3>Organisasi</h3>
						<p>OSIS sebagai tools untuk menuju kematangan dalam berpikir dan berperilaku. </p>
				</div>
				<div class="col-md-4 w3-faculty-services2">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						<h3>6 jam KBM</h3>
						<p>Untuk mempersiapkan bekal kepada putra putri Anda dalam menghadapi jenjang pendidikan selanjutnya.  </p>
				</div>
				<div class="col-md-4 w3-faculty-services3">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<h3>Metode Pembelajaran</h3>
						<p>Menyeimbangkan pendidikan agama dan pendidikan umum, serta dalam proses evaluasi pembelajaran menggunakan metode yang menarik dan berbeda. </p>
				</div>
				
				<div class="clearfix"></div>
			</div>
			
			
	</div>
	<div class="clearfix"></div>
</div>
<!--//experience overview -->
<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="container">
			<div class="agileits_w3layouts_head">
			<h3>Our Gallery</h3>
			</div>
			<div class="w3layouts_gallery_grids">
				<?php while($row=mysqli_fetch_assoc($result3)) { ?>
				<div class="col-md-4 w3layouts_gallery_grid">
					<a href="Gambar Gallery/<?php echo $row['foto'] ?>" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img src="Gambar Gallery/<?php echo $row['foto'] ?>" alt=" " style="text-align:center;height:250px" class="img-responsive">
							<div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3><?php echo $row['kegiatan'] ?></h3></div>
							</div>
						</div>
					</a>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
				
			</div>
		</div>
	</div>
<!-- //gallery -->
	<script src="js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>

		<!-- professors -->
	<div class="jarallax team" id="professor">
		<div class="team-dot">
			<div class="container">
				<div class="w3-agile-heading team-heading">
					<h3>Sejarah Al-Huda</h3>
				</div>
				<div class="agileits-team-grids">
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/green.jpg" alt="">
							<div class="team-caption"> 
								<h4>Tahun Didirikan</h4>
                                <p>Al-Huda didirikan pada tahun 1984.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/green.jpg" alt="">
							<div class="team-caption"> 
								<h4>Pendiri</h4>
								<p>Al-Huda didirikan oleh H. Rusdi dan H. Shodiq dengan tujuan untuk meningkatkan pendidikan baik secara akademik maupun keagamaan.</p>
				            </div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/green.jpg" alt="">
							<div class="team-caption"> 
								<h4>Lokasi</h4>
								<p>Lokasi pertama kali Al-Huda hingga kini terletak di Mulyorejo, Surabaya.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/green.jpg" alt="">
							<div class="team-caption"> 
								<h4>Akreditasi</h4>
								<p>SMP Al-Huda Surabaya berakreditasi A dan merupakan salah satu SMP terbaik yang ada di Surabaya</p>
				            </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //professor -->

<!--/contact -->
 <div class="bg-agile w3-admission" id="admission">
	<div class="book-appointment" id="admissions">
		<div class="w3-appoint-head">
			<h3>Berita Terbaru</h3>
		</div>
		<div class="row">
			<div id="myCarousel2" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel2" data-slide-to="1"></li>
			    <li data-target="#myCarousel2" data-slide-to="2"></li>
			  </ol>

	
				  
			  
			  <!-- Wrapper for slides -->
			 
			  <div class="carousel-inner" role="listbox">
			 
			    <div class="item active">
				<?php while($row=mysqli_fetch_assoc($result)) { ?>
			      	<div class="col-md-4">
						<img src="Gambar News/<?php echo $row['foto'] ?>" style="text-align:center;height:200px" class="img-responsive"/>
						<h4><a href="post.php<?php echo "?id=$row[id]" ?>" target="_blank"><?php echo $row['judul'] ?></a></h4>
						<p><?php echo excerpt1($row['isi']) ?></p>
						<!--<button class="btn btn-primary2" data-target="#myBerita" data-toggle="modal">Lihat Selengkapnya</button>-->
					</div>
					<?php } ?>
			    </div>
			 
			  <div class="item item6">
			      	<?php while($row=mysqli_fetch_assoc($result2)) { ?>
			      	<div class="col-md-4">
						<img src="Gambar News/<?php echo $row['foto'] ?>" style="text-align:center;height:200px" class="img-responsive"/>
						<h4><a href="post.php<?php echo "?id=$row[id]" ?>" target="_blank"><?php echo $row['judul'] ?></a></h4>
						<p><?php echo excerpt1($row['isi']) ?></p>
						<!--<button class="btn btn-primary2" data-target="#myBerita" data-toggle="modal">Lihat Selengkapnya</button>-->
					</div>
					<?php } ?>
			    </div>
				
				<div class="item item7">
				<?php while($row=mysqli_fetch_assoc($result4)) { ?>
			      	<div class="col-md-4">
						<img src="Gambar News/<?php echo $row['foto'] ?>" style="text-align:center;height:200px" class="img-responsive"/>
						<h4><a href="post.php<?php echo "?id=$row[id]" ?>" target="_blank"><?php echo $row['judul'] ?></a></h4>
						<p><?php echo excerpt1($row['isi']) ?></p>
						<!--<button class="btn btn-primary2" data-target="#myBerita" data-toggle="modal">Lihat Selengkapnya</button>-->
					</div>
					<?php } ?>
			    </div>
				
				
			  </div>
	
			  
			  <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel2" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			  
			  	
			</div>	
				
		</div>
		
	</div>
</div>
</div>
		
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
			<!-- /map -->
<div class="w3-agile-contact-address" id="contact">
	<div class="w3-agile-contact-head">
	<h3><br>Kontak Kami</h3>
	</div>
	<div class="w3-agile-contact-grids">
	<div class="agile-contact">
	<div class=" contact-map-right">
		<div id="map">
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7120410885323!2d112.79822914933798!3d-7.273571673464939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa058002c049%3A0x2536861c6f93bb0f!2sSekolah+Menengah+Pertama+Al-Huda!5e0!3m2!1sen!2sid!4v1508394388151"></iframe>
		      </div>

		</div>
</div>
	
	</div>
</div>
<!-- //map -->
<div class="footer">
	<div class="container">
		<div class="footer-grids-all">
		<div class="footer-w3-grid-top">
			<div class="col-md-4 w3layouts_footer_grid">
				<h3>Contact Us :</h3>
					<ul>
						<li><i class="glyphicon glyphicon-send"></i> Jl. Kalisari Damen No.32, Kalisari, Mulyorejo<span> Surabaya, Jawa Timur 60112. </span></li>
						<li><i class="glyphicon glyphicon-phone"></i>(031) 5935679</li>
						<li><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:smp_alhuda32@yahoo.co.id"> smp_alhuda32@yahoo.co.id</a></li>
					</ul>

			</div>
		</div>
			<div class="col-md-8 w3layouts_footer_grid">
				<ul class="w3l_footer_nav">
					<li><a href="#home" class="active scroll">Home</a></li>
					<li><a href="#about" class="scroll">Tenaga Pendidik</a></li>
					<li><a href="#services" class="scroll">Visi Misi</a></li>
					<li><a href="#gallery" class="scroll">Galeri</a></li>
					<li><a href="#admission" class="scroll">Kontak</a></li>
				</ul>
				<div class="col-md-6 w3-footer-icons">
				<h3>Catch on</h3>
				<p><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span><a href="mailto:smp_alhuda32@yahoo.co.id"> smp_alhuda32@yahoo.co.id</a></p>
				</div>
				<div class="col-md-6 w3-footer-icons">
				<h3>Hubungi</h3>
				<i class="fa fa-phone" aria-hidden="true"></i><span> (031) 5935679 </span>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="footer-bottom-agile">
				<p>© 2017 Education Portal . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
			</div>

	</div>
</div>
<!-- //footer -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  

</body>
</html>