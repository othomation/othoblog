<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Contact - Ma petite entreprise - une société super bien !</title>
	<link rel="stylesheet" href="./assets/styles/fonts.css" />
	<link rel="stylesheet" href="./assets/styles/main.css" />
	<link rel="stylesheet" href="./assets/styles/contact.css" />
</head>

<body>
	<main>
		<!-- ================================ HEADER ================================ -->
		<header>
			<h1>ma petite entreprise</h1>
			<p>connait pas la crise</p>
		</header>

		<!-- ================================ MAIN CONTAINER [750px] ================================ -->
		<div id="container">
			<!-- ================================ NAV ================================ -->
			<nav>
				<ul>

					<li><a href="./index.php">accueil</a></li>
					<li><a href="./produits.php">nos produits formidables</a></li>
					<li><a href="./services.php">nos services innovants</a></li>
					<li class="current"><a href="./contact.php">contact</a></li>
				</ul>
			</nav>

			<!-- ================================ CONTENT ================================ -->
			<section class="container__contact">
				<!-- |-------- ARTICLE 1 > une affaire qui roule --------| -->
				<article>
					<h2>une affaire qui roule</h2>
					<form action="./success.php">
						<div class="row">
							<div class="container__label">
								<label class="required" for="nom">Nom: </label>
							</div>
							<div class="container__input">
								<input type="text" id="nom" name="firstname" placeholder="Karine Durand" required />
							</div>
						</div>
						<div class="row">
							<div class="container__label">
								<label class="required" for="email" required>E-mail</label>
							</div>
							<div class="container__input">
								<input type="email" id="email" name="lastname" placeholder="contact@example.com" required />
							</div>
						</div>
						<div class="row">
							<div class="container__label">
								<label for="subject">Sujet</label>
							</div>
							<div class="container__input">
								<select id="country" name="country">
									<option value="products">Nos produits</option>
									<option value="services" selected>Nos services</option>
									<option value="swearing">Pensées insultantes</option>
									<option value="other">Autres</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="container__label">
								<label class="required" for="message">Message</label>
							</div>
							<div class="container__input">
								<textarea id="message" name="message" placeholder="Que votre flot de mots se deversent sur nos serveurs" required></textarea>
							</div>
						</div>
						<div class="row">
							<input type="submit" value="Envoyer le message !" />
						</div>
					</form>
				</article>
				<!-- |-------- ARTICLE 2 > actualiés --------| -->
				<article>
					<h2>coordonnées</h2>
					<p>Ecrivez-nous aussi à&nbsp: <a href="mailto:info@mpentreprise.com">info@mpentreprise.com</a></p>
					<p>Ou téléphonez-nous : <a href="tel:0000000000"><span>(+33) 1 23 45 67 69</span></a></p>
				</article>
			</section>
		</div>
	</main>
</body>

</html>