<?php
    header_remove("x-powered-by");
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if($_POST["submit"]) {
			if (!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["message"])) {
				$prenom = htmlspecialchars($_POST["prenom"], ENT_QUOTES, 'UTF-8');
				$nom = htmlspecialchars($_POST["nom"], ENT_QUOTES, 'UTF-8');
				$message = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');
				
				$destinataire = "contact@mariondurant.art";
				
				$sujet = "Nouveau message de $prenom $nom";
				
				$headers = "From: $prenom$nom\r\n";
				$headers .= "Reply-To: $prenom$nom\r\n";
				$headers .= "MIM-Version: 1.0\r\n";
				$headers .= "Content-Type: text/plain; charset=utf-8\r\n";
				
				$contenu = "Vous avez reçu un nouveau message :\r\n\r\n";
				$contenu .= "Nom = $prenom $nom\r\n";
				$contenu .= "Message :\r\n$message";
				
				if (mail($destinataire, $sujet, $contenu, $headers)) {
					$message_envoi = "Le message a été envoyé avec succès !";
					$classe_message = "success";
				} else {
					$message_envoi = "Une erreur s'est produite lors de l'envoi du message !";
					$classe_message = "error";
				}
			}
		}
		
	}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Bonjour, je suis Marion Durant, étudiante en Web Design et Communication. Venez consulter mon portfolio et découvrez mes différents projets.">
        <meta name="keywords" content="Portfolio, Graphic Designer, Designer Web, Webdesigner, Alternance, ICAN, Design, HTML, CSS, Javascript, PHP, Python, Adobe suit, Figma, Procreate, Illustrator, Photoshop, InDesign, AdobeXD, Affinity Designer, Affinity Photo, Affinity Publisher, After Effects, Dreamweaver, Français, English, Deutsch, Italiano, Русский">
        <meta name="author" content="Marion Durant & Xavier Negre">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marion DURANT - Portfolio</title>
        <link rel="icon" type="image/x-icon" href="res/img/Wax-MD.avif">
        <link rel="stylesheet" href="style/style.css">
		<style>
			.message {
				display: none;
				padding: 10px;
				margin-bottom: 10px;
				border-radius: 20px;
				text-align: center;
				font-size: larger;
				font-weight: 600;
			}
			
			.success {
				background-color: #c1e5c1;
				color: #026a00;
			}
			
			.error {
				background-color: #f8cccc;
				color: #d60000;
			}
		</style>

		<script>
			window.addEventListener('DOMContentLoaded', (event) => {
				const message = document.querySelector('.message');
				message.style.display = 'block';
				
				setTimeout(function() {
					message.style.opacity = '0';
					setTimeout(function() {
							message.style.display = 'none';
					}, 1000);
				}, 3000);
			});
		</script>
    </head>
    <body>
        <!-- MENU -->
        <div class="btn-rond-menu">
            <img id="btn-menu-img" width="70" height="70" src="res/img/Wax-Seal-Menu.avif" alt="menu bouton">
        </div>
        <nav class="nav-gauche">
            <div class="blocs-menu">
                <div class="cercle-portrait">
                    <img src="res/img/Photo CV.avif" alt="portrait img" height="200" width="200">
                </div>
            </div>
            <div class="blocs-menu">
                <span class="nav-menu-item">
                    <a href="#accueil">
                        Accueil
                    </a>
                </span>
            </div>
            <div class="blocs-menu">
                <span class="nav-menu-item">
                    <a href="#pres">
                        Pr&eacute;sentation
                    </a>
                </span>
            </div>
            <div class="blocs-menu">
                <span class="nav-menu-item">
                    <a href="#port">
                        Portfolio
                    </a>
                </span>
            </div>
            <div class="blocs-menu">
                <span class="nav-menu-item">
                    <a href="#range">
                        Comp&eacute;tences
                    </a>
                </span>
            </div>
            <div class="blocs-menu">
                <span class="nav-menu-item">
                    <a href="#contact">
                        Contact
                    </a>
                </span>
            </div>
            <!--<div class="blocs-menu">
                <div class="logo-cercle">
                    <a href="#contact">
                        <img src="res/contact.svg" alt="logo contact">
                    </a>
                </div>
            </div>-->
        </nav>

        <!-- ACCUEIL -->
        <section class="accueil" id="accueil">
            <h1>Bienvenue sur mon portfolio</h1>
            <p class="txt-animation"></p>
            <a class="btn-acc" href="#port">
				<img src="res/img/Portfolio-bouton.avif" width="200" height="120" alt="bouton portfolio" aria-label="Descend à la section portfolio" >
			</a>
        </section>

        <!-- PRESENTATION -->
        <section class="presentation" id="pres">
            <h2 class="titre-pres">Pr&eacute;sentation</h2>
            <div class="container-presentation">
                <div class="pres-gauche">
                    <h3>Commençons par une pr&eacute;sentation</h3>
                    <hr><br>
                    <p>Je me pr&eacute;nomme Marion Durant et apr&egrave;s 8 ann&eacute;es pass&eacute;es au sein de la SNCF dans divers postes, j'ai franchi le pas et ai d&eacute;cid&eacute; d'entamer une reconversion en reprenant mes &eacute;tudes.</p>
                    <br>
                    <p>Passionn&eacute;e par le design graphique, il &eacute;tait &eacute;vident pour moi de m'orienter dans ce domaine.</p>
                    <p>Pouss&eacute;e par la curiosit&eacute; j'ai d&eacute;cid&eacute; de m'inscrire &agrave; l'ICAN o&ugrave; j'ai &eacute;t&eacute; admise en 1&egrave;re ann&eacute;e de bachelor web et communication visuelle afin de faire &eacute;voluer mon projet professionnel au mieux.</p>
                    <br>
                    <p>Je suis activement &agrave; la recherche d'une alternance et suis disponible de suite. Mon rythme d'alternance s'articule par 3 jours en entreprise du lundi au mercredi et par 2 jours &agrave; l'&eacute;cole du jeudi au vendredi.</p> 
				</div>
            </div>
        </section>

        <!-- PORTFOLIO -->
        <section class="portfolio" id="port">
            <h2 class="titre-port">Mon Portfolio</h2>
            <div class="cont-portfolio">
                <div class="item vague1">
                    <div class="cont-img-port">
                        <img height="220" width="420" src="res/img/IMG-2022.avif" alt="img portfolio">
                    </div>
                    <h3>Ma boutique Etsy</h3>
                    <p>Boutique digital ouverte depuis 2 ans.</p><br/>
                    <a href="http://www.typeofcreation.store" class="btn-projets first" target="_blank">D&eacute;couvrez ma boutique</a>
                </div>
                <div class="item vague1">
                    <div class="cont-img-port">
                        <img height="220" width="420" src="res/digital-paper/ensemble-dp.avif" alt="img portfolio">
                    </div>
                    <h3>Papiers digitaux</h3>
                    <p>Ensembles de mes cr&eacute;ations de papiers digitaux sous forme de galerie.</p>
                    <a href="digital-paper.html" class="btn-projets" target="_self">D&eacute;couvrez le projet</a>
                </div>
                <div class="item vague1">
                    <div class="cont-img-port">
                        <img height="220" width="420" src="res/notebook-red/Notebook cuir rouge.avif" alt="img portfolio">
                    </div>
                    <h3>Notebook rouge</h3>
                    <p>Mon premier notebook au format PDF avec les onglets cliquables.</p>
                    <a href="res/notebook-red/Notebook PDF.pdf" class="btn-projets" target="_blank">D&eacute;couvrez le projet</a>
                </div>
                <div class="item vague2">
                    <div class="cont-img-port">
                        <img height="220" width="420" src="res/draws/Automne.avif" alt="img portfolio">
                    </div>
                    <h3>Mes dessins</h3>
                    <p>Ensemble de mes dessins termin&eacute;s sous forme de galerie.</p>
                    <a href="draws.html" class="btn-projets" target="_self">D&eacute;couvrez le projet</a>
                </div>
                <div class="item vague2">
                    <div class="cont-img-port">
                        <img height="220" width="420" src="res/notebook-simple/Cover.avif" alt="img portfolio">
                    </div>
                    <h3>Notebook simple</h3>
                    <p>Notebook avec deux versions. Une version avec un fond clair et une version avec un fond fonc&eacute;.</p>
                    <div class="btn-projets-container">
                        <a href="res/notebook-simple/lighter/Notebook simple Clair.pdf" class="btn-projets" target="_blank">D&eacute;couvrez le clair</a>
                        <a href="res/notebook-simple/darker/Notebook simple Fonce.pdf" class="btn-projets" target="_blank">D&eacute;couvrez le fonc&eacute;</a>
					</div>
                </div>
                <div class="item vague2">
                    <div class="cont-img-port">
                        <img height="220" width="420" src="res/tdln-justine/TDLN logo.avif" alt="img portfolio">
                    </div>
                    <h3>La tête dans les nuages</h3>
                    <p>Pr&eacute;sentation du projet pour l'entreprise La Tête Dans Les Nuages.</p>
                    <a href="res/tdln-justine/Presentation.pdf" class="btn-projets" target="_blank">D&eacute;couvrez le projet</a>
                </div>
                <!--<div class="item vague3">
                    <div class="cont-img-port">
                        <img src="#" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>
                <div class="item vague3">
                    <div class="cont-img-port">
                        <img src="#" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>
                <div class="item vague3">
                    <div class="cont-img-port">
                        <img src="#" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>-->
            </div>
        </section>

        <!-- SKILLS -->
        <section class="section-range" id="range">
            <h2 class="titre-exp">Mes comp&eacute;tences</h2>
            <div class="grille-skill">
                <div class="range-cont">
                    <p class="label-skill">Photoshop</p>
                    <p class="number-skill">90%</p>
                    <div class="barre-skill b1"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">Illustrator</p>
                    <p class="number-skill">90%</p>
                    <div class="barre-skill b2"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">InDesign</p>
                    <p class="number-skill">80%</p>
                    <div class="barre-skill b3"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">Procreate</p>
                    <p class="number-skill">90%</p>
                    <div class="barre-skill b4"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">Figma</p>
                    <p class="number-skill">70%</p>
                    <div class="barre-skill b5"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">Adobe XD</p>
                    <p class="number-skill">60%</p>
                    <div class="barre-skill b6"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">After Effects</p>
                    <p class="number-skill">60%</p>
                    <div class="barre-skill b7"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">HTML / CSS</p>
                    <p class="number-skill">70%</p>
                    <div class="barre-skill b8"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">Javasccript</p>
                    <p class="number-skill">60%</p>
                    <div class="barre-skill b9"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">Python</p>
                    <p class="number-skill">60%</p>
                    <div class="barre-skill b10"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">PHP</p>
                    <p class="number-skill">50%</p>
                    <div class="barre-skill b11"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">Wordpress</p>
                    <p class="number-skill">75%</p>
                    <div class="barre-skill b12"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">iWork</p>
                    <p class="number-skill">90%</p>
                    <div class="barre-skill b13"></div>
                    <div class="barre-grises"></div>
                </div>
                <div class="range-cont">
                    <p class="label-skill">Suite Office 365</p>
                    <p class="number-skill">90%</p>
                    <div class="barre-skill b14"></div>
                    <div class="barre-grises"></div>
                </div>
                
                <div class="range-cont">
                    <p class="label-skill">iMovie</p>
                    <p class="number-skill">70%</p>
                    <div class="barre-skill b15"></div>
                    <div class="barre-grises"></div>
                </div>
            </div>
        </section>

        <!-- EXPERIENCES -->
        <!-- En cours de construction... -->
        <!--<section class="travail-exp" id="exp">

        </section>-->


        <!-- CONTACT -->
        <!-- Not operational -->
        <section class="section-contact" id="contact">
            <h2>Rentrons en Contact</h2>
            <div class="container-form">
                <form class="form-bloc" method="POST" action="">
                    <div class="form-groupe">
                        <label for="prenom">Pr&eacute;nom</label>
                        <input type="text" required maxlength="16" id="prenom" name="prenom">
                    </div>
                    <div class="form-groupe">
                        <label for="nom">Nom</label>
                        <input type="text" required maxlength="16" id="nom" name="nom">
                    </div>
                    <div class="form-groupe">
                        <textarea id="txt" placeholder="Votre message" required name="message"></textarea>
                    </div>
                    <div class="form-groupe">
                        <input type="submit" value="ENVOYER" class="button-sub" name="submit">
                    </div>
                </form>
				<div class="message <?php if (isset($classe_message)){echo $classe_message;} ?>">
					<?php if(isset($message_envoi)){echo $message_envoi;} ?>
				</div>
            </div>
        </section>

        <footer>
            Tous droits réservés &copy;
            <br> Designed and coded by <a href="https://www.linkedin.com/in/marion-durant-7a556b280" target="_blank">Marion Durant</a> 
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script src="app.js"></script>
    </body>
</html>