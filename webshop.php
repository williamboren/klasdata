<?php
echo <<<_END
<html lang="sv">
	<head>
		<meta charset="utf-8"/>
		<title>Klas F Data</title>
		<link href="styles/menu.css" type="text/css" rel="stylesheet" />
		<link href="styles/ShopSlideshow.css" type="text/css" rel="stylesheet">
		<link href="styles/Shop.css" type="text/css" rel="stylesheet">
		<script> function onload() { alert('Inte implementerad'); } </script>
	</head>
	<body onload="onload()">
		<div id="MenuDiv">
			<div class="LeftOfMenu"></div>
			<div id="MenuInDiv">
				<div id="LogoText">
					<p class="Bebas">Klas Data</p>
				</div>
				<nav id="Menu" class="BwQuintaL">
					<ul>
						<a href="./index.html">
							<li>
								<p>Hem</p>
							</li>
						</a>
						<a href="./webshop.php">
							<li id="active">
								<p>Webshop</p>
							</li>
						</a>
						<a href="./myprofile.php">
							<li>
								<p>Min sida</p>
							</li>
						</a>
						<a href="./shoppingcart.php">
							<li>
								<p>Varukorg</p>
							</li>
						</a>
						<a href="./contact.html">
							<li>
								<p>Kontakt</p>
							</li>
						</a>
						</li>
					</ul>
				</nav>
				<div id="LogoArt">
					<img src="./img/logoArt.png"></img>
				</div>
			</div>
			<div class="RightOfMenu"></div>
		</div>
		<div class="Content" id="Content">
			<!--<div id="ContentTopIndent"></div>-->
			<p id="ShopHeader">Webshop<img src="./img/ShoppingIcon.png"/></p>

			<div class="contentBorder">
				<div class="slideshow-container">
					<div class="slideCards fade">
						<div class="numbertext">1 / 3</div>
						<img src="./img/S1.jpg" style="width:100%">
						<div class="text">Caption Text</div>
						<div class="textExtra"><p>Rea 20%</p></div>
					</div>

					<div class="slideCards fade">
						<div class="numbertext">2 / 3</div>
						<img src="./img/S2.jpg" style="width:100%">
						<div class="text">Caption Two</div>
					</div>

					<div class="slideCards fade">
						<div class="numbertext">3 / 3</div>
						<img src="./img/S3.jpg" style="width:100%">
						<div class="text">Caption Three</div>
					</div>

					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<br>

				<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
				</div>
			</div>


			<p id="newItems">Nytt i sortimentet</p>
			<table>
				<tbody>
					<tr>
						<td>
							<div class="ShopEntity">
								<img src="./img/KLASSE.png"/>
								<div>
									<p><strong>Datordel</strong></p>
									<p>[Desc.] Lorem ipsum dot sit amet...</p>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="ShopEntity">
								<img src="./img/KLASSE.png"/>
								<div>
									<p><strong>Datordel</strong></p>
									<p>[Desc.] Lorem ipsum dot sit amet...</p>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="ShopEntity">
								<img src="./img/KLASSE.png"/>
								<div>
									<p><strong>Datordel</strong></p>
									<p>[Desc.] Lorem ipsum dot sit amet...</p>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="ShopEntity">
								<img src="./img/KLASSE.png"/>
								<div>
									<p><strong>Datordel</strong></p>
									<p>[Desc.] Lorem ipsum dot sit amet...</p>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="ShopEntity">
								<img src="./img/KLASSE.png"/>
								<div>
									<p><strong>Datordel</strong></p>
									<p>[Desc.] Lorem ipsum dot sit amet...</p>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<div id="ContentBottomIndent"></div>
		</div>
		<footer>
			<div class="Content">
				<p>&copy; 2016 Klas Data</p>
			</div>
			<script src="scripts/slideshow.js"></script>
		</footer>
	</body>
</html>
_END;
?>
