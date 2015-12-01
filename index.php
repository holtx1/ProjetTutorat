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
							<li><a href="#" data-reveal-id="inscription-modal">Inscription</a></li>
							<li><a href="#" data-reveal-id="connexion-modal">Connexion</a></li>
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
							<li id="menu_inscription" class="navbar_menu_item"><a href="#" data-reveal-id="inscription-modal">Inscription</a></li>

              <div id="inscription-modal" class="reveal-modal tiny" data-reveal aria-labelledby="inscription" aria-hidden="true" role="dialog">
                <!-- Page inscription here -->
                <h3>Inscription</h3>
                <form action="index.php" method="post">
                  <div class="row">
                    <div class="small-12 columns">
                      <label>Identifiant
                        <input type="text" placeholder="" />
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 columns">
                      <label> Email
                        <input type="email" placeholder="" />
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 columns">
                      <label> Mot de passe
                        <input type="password" placeholder="" />
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 columns">
                      <label> Confirmation mot de passe
                        <input type="password" placeholder="" />
                      </label>
                    </div>
                  </div>
                  <div class="row">
                      <div class="small-12 small-centered text-center columns">
                          <input class="button small secondary" type="submit" value="Valider" />
                      </div>
                  </div>
                </form>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>

							<li id="menu_connexion" class="navbar_menu_item"><a href="#" data-reveal-id="connexion-modal">Connexion</a></li>

              <div id="connexion-modal" class="reveal-modal" data-reveal aria-labelledby="connexion" aria-hidden="true" role="dialog">
                <!-- Page connexion here -->

                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>

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
