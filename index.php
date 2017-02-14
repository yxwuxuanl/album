<?php
	$images = scandir('./images/fulls');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>To Yoyo.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<meta http-equiv="Expires" content="0">
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Cache-control" content="no-cache">
		<meta http-equiv="Cache" content="no-cache">
	</head>
	<body class="is-loading-0 is-loading-1 is-loading-2">

		<!-- Main -->
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Yoyo.</h1>
						<p>我的双眼里,寻找到的美丽之最</p>
					</header>

				<!-- Thumbnail -->
					<section id="thumbnails">
						<?php
							while(next($images)) : 
								$image = current($images);
								$ext = strtolower(pathinfo($image,PATHINFO_EXTENSION));
								if(!in_array($ext,['jpg','png','jpeg'])) continue;
						?>
						<article>
							<a class="thumbnail" href="images/fulls/<?= $image ?>" data-position="left center"><img src="images/thumbs/<?= $image ?>" alt="" /></a>
						</article>

                        <?php
                            endwhile;
                        ?>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>遇见你,大概是我这生中最遗憾的事情,太早,太年轻,太不成熟。<br>重遇你,大概是我这生中最幸运的事情,刚好挂着你,刚好需要你,刚好,还喜欢你。<br>
								lin & Yoyo
							</li>

						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>