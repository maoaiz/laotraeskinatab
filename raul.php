<?php
$musico="Raul";
include_once "config.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php include_once "cabecera.php";?>
</head>
<body>
	<?php include_once "facebook_connect.php"; ?>
	<div class="main">
		
		<div class="content dos">
			<div class="grande">
				<div class="menubox">
					<div class="logo1">
						<a href="http://laotraeskina.com" target="_blank"><img src="img/home2.png" width="110px"/></a>
					</div>
					<?php include_once "menu.html"; ?>
					<?php include_once "share.php"; ?>
				</div>
				<div class="contenido">
					<div class="integrantes">
						<!---->
			<div class="slider">
				<a class="prev left"></a>
				<div class="scrollable">
					<div class="items"><!--
						<div><a href="clavijo.php"><img src="<?=$fotos['clavijo']?>"></a></div>-->
						<div><a href="raul.php" class="on"><img src="<?=$fotos['raul']?>"></a></div>
						<div><a href="elider.php"><img src="<?=$fotos['elider']?>"></a></div>
						<div><a href="daniel.php"><img src="<?=$fotos['daniel']?>"></a></div>
						<div><a href="wilmar.php"><img src="<?=$fotos['wilmar']?>"></a></div>
						<div><a href="gordon.php"><img src="<?=$fotos['gordon']?>"></a></div>
					</div>
				</div>
				<a class="next right"></a>
			</div>
			<!---->
			<!--Fotos-->
			<div id="slideshow">
				<ul id="nav">
					<li id="prev"><a href="#">Previous</a></li>
					<li id="next"><a href="#">Next</a></li>
				</ul>
				<ul id="slides">
					<li><div class="info"><?=$musico?><a href="https://www.facebook.com/profile.php?id=100000918629017" target="_blank" ><span class="face"></span></a></div>
						<img src="img/muchachos/raul1.jpg"  />
					</li>
					<li><div class="info" ><?=$musico?><a href="https://www.facebook.com/profile.php?id=100000918629017" target="_blank" ><span class="face"></span></a></div>
						<img src="img/muchachos/raul2.jpg" />
					</li>
					<li><div class="info" ><?=$musico?><a href="https://www.facebook.com/profile.php?id=100000918629017" target="_blank" ><span class="face"></span></a></div>
						<img src="img/muchachos/raul2.jpg" />
					</li>
				</ul>
			</div>
			<!--/fotos-->
			<div class="bio">
				Ra??l Garc??a es el nuevo percusionista de La Otra Eskina, nacido en Sincelejo llega a Pereira a formar parte de la mejor banda muscial que tiene el eje cafetero, y no solo el eje, Colombia Entera y el mundo.
			</div><!--/bio -->
			
			
					</div>
				</div><!--/contenido-->
				
				<div class="comentarios">
					<fb:comments href="<?=$url2?>raul.php" num_posts="6" width="500"></fb:comments>
				</div>
			</div><!--/grande-->
						
		</div>
			
		
	</div><!-- //main -->
</body>
</html>








