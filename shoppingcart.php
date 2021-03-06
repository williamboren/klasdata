<?php
echo <<<_END
<html lang="sv">
	<head>
		<meta charset="utf-8"/>
		<title>Klas F Data</title>
		<link href="styles/menu.css" type="text/css" rel="stylesheet" />
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
						<li>
							<p>Webshop</p>
						</li>
					</a>
					<a href="./myprofile.php">
						<li>
							<p>Min sida</p>
						</li>
					</a>
					<a href="./shoppingcart.php">
						<li id="active">
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
			<div id="ContentTopIndent"></div>
			<p>Content</p>
			<div id="ContentBottomIndent"></div>
		</div>
		<footer>
			<div class="Content">
				<p>&copy; 2016 Klas Data</p>
			</div>
		</footer>
	</body>
</html>
_END;
?>
