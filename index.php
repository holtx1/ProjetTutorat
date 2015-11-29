<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:output encoding="utf-8" method="html"/>
 <xsl:template match="enbref">
	<!-- head -->
	<head>
		<link rel="stylesheet" href="foundation/css/foundation.css"/>
		<link rel="stylesheet" href="foundation/css/app.css"/>
		<link rel="stylesheet" href="CSS/default.css"/>
		
		<script src="foundation/js/vendor/modernizr.js"></script>
	</head>
 
	<!-- body -->
	<body>
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<!-- debut banniere -->
				
				<!-- en-tete mobile -->
				<div id="ban_mobile" class="show-for-small-down">
					<div id="navbar">
						<ul>
							<li class="left-off-canvas-toggle menu-icon"><a href="#" ><span>Menu</span></a></li>
						</ul>
					</div>
					<aside class="left-off-canvas-menu">
						<ul id="navbar_menu_mobile" class="menu">
							<li><a href="#">Accueil</a></li>
							<li><a href="#">Inscription</a></li>
							<li><a href="#">Connexion</a></li>
						</ul>
					</aside>
				</div>
				
				<!-- en-tete pc -->
				<div id="ban_pc" class="show-for-medium-up">
					<div id="ban_img">
						
					</div>
					<div id="navbar">
						<ul id="navbar_menu_pc" class="menu">
							<li id="menu_accueil" class="navbar_menu_item"><a href="#">Accueil</a></li>
							<li id="menu_inscription" class="navbar_menu_item"><a href="#">Inscription</a></li>
							<li id="menu_connexion" class="navbar_menu_item"><a href="#">Connexion</a></li>
						</ul>
					</div>
				</div>
				<!-- fin banniere -->
				
				<div id="contenu">
					<h1>Bienvenue sur le projet tutorat</h1>
					<p>Easy tutorat voici un long texte blabla blablablabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					</p>
				</div>
				
				<!-- debut footer -->
				<div id="footer">
					(c) 2015 Groupe tutorat - INF2A
				</div>
				<!-- fin footer -->
				
				<a class="exit-off-canvas"></a>
			</div>
		</div>
		
	<script src="foundation/js/vendor/jquery.js"></script>
	<script src="foundation/js/foundation.min.js"></script>
	<script>$(document).foundation();</script>
	</body>