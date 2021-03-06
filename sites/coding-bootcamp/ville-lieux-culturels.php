<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Villeur'Tourisme</title>
		<link rel="stylesheet" href="./style.css" />
		<script src="./assets/js/js-tabs.js" defer></script>
	</head>
	<body>
		<!--  HEADER (START) -->
		<header class="l-header">
			<div class="image header-image">
				<img
					src="./assets/img/banner-top.jpg"
					alt="Bannière : Photo d'une vue sur la basilique de Fourvière (Lyon)."
				/>
			</div>
			<div class="image header-image">
				<img
					src="./assets/img/banner-bottom.jpg"
					alt="Bannière : Photo d'une vue sur la place de Bellecour (Lyon)."
				/>
			</div>
			<div class="header-title">Montre Leur Villeur'</div>
		</header>
		<!--  HEADER (END) -->

		<!--  NAVBAR (START) -->
		<nav class="l-nav" role="navigation">
			<ul class="nav-ul">
				<li class="nav-li"><a href="./index.php">accueil</a></li>
				<li class="nav-li nav-dropdown-show">
					<a>la ville</a>
					<!-- HIDDEN by DEFAULT (START) -->
					<div class="nav-dropdown-content">
						<ul>
							<li class="nav-li-dropdown">
								<a href="./ville-lieux-culturels.php">lieux culturels</a>
							</li>
							<li class="nav-li-dropdown">
								<a href="./ville-sorties.php">bars, cafés et restaurants</a>
							</li>
						</ul>
					</div>
					<!-- HIDDEN by DEFAULT (END)   -->
				</li>

				<li class="nav-li"><a href="./a-propos.php">à propos</a></li>
			</ul>
		</nav>
		<!--  NAVBAR (END) -->

		<!-- LAYOUT : MAIN SECTION (START) -->
		<section class="l-main-section">
			<aside class="l-left-aside">
				<!-- TAB LINK (START) -->
				<div class="tabs">
					<a
						class="link-tab"
						onclick="openHoodTabContent(event, 't-default')"
						id="tab-default"
					>
						<!-- PAGE PRESENTATION -->>
					</a>
					<a class="link-tab" onclick="openHoodTabContent(event, 't-Tonkin')"> Tonkin </a>
					<a class="link-tab" onclick="openHoodTabContent(event, 't-Totem')"> Totem </a>
					<a class="link-tab" onclick="openHoodTabContent(event, 't-Gratte-Ciel')">
						Gratte-Ciel
					</a>
					<a class="link-tab" onclick="openHoodTabContent(event, 't-Cusset')"> Cusset </a>
					<a class="link-tab" onclick="openHoodTabContent(event, 't-La-Doua')">
						La-Doua
					</a>
				</div>
				<!-- TAB LINK (END) -->
			</aside>
			<main class="l-main">
				<div id="t-default" class="tab-shown-content">
					<div class="main-header tab-title text">
						<!-- TAB CONTENT TITLE-->
						Découvrez les lieux culturels de Villeurbanne, classés par quartiers !
					</div>
					<div class="main-content tab-content text">
						<!-- TAB CONTENT-->
						Vous pouvez cliquer sur le nom du quartier à gauche, et vous aurez accès à
						une liste des activité à faire.
					</div>
				</div>

				<div id="t-Tonkin" class="tab-shown-content">
					<div class="main-header tab-title text">
						<!-- TAB CONTENT TITLE-->
						Le quartier de
						<h3>Tonkin</h3>
					</div>
					<div class="main-content tab-content">
						<!-- TAB CONTENT-->

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="t-Totem" class="tab-shown-content">
					<div class="main-header tab-title text">
						<!-- TAB CONTENT TITLE-->
						Le quartier de
						<h3>Totem</h3>
					</div>
					<div class="main-content tab-content">
						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="t-Gratte-Ciel" class="tab-shown-content">
					<div class="main-header tab-title text">
						<!-- TAB CONTENT TITLE-->
						Le quartier de
						<h3>Gratte-Ciel</h3>
					</div>
					<div class="main-content tab-content">
						<!-- TAB CONTENT-->

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="t-Cusset" class="tab-shown-content">
					<div class="main-header tab-title text">
						<!-- TAB CONTENT TITLE-->
						Le quartier de
						<h3>Cusset</h3>
					</div>
					<div class="main-content tab-content">
						<!-- TAB CONTENT-->

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="t-La-Doua" class="tab-shown-content">
					<div class="main-header tab-title text">
						<!-- TAB CONTENT TITLE-->
						Le quartier de
						<h3>La Doua</h3>
					</div>
					<div class="main-content tab-content">
						<!-- TAB CONTENT-->

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>

						<div class="tab-content-card">
							<div class="image tab-content-image">
								<img src="https://source.unsplash.com/random/200x200" />
							</div>
							<div class="tab-content-desc">
								<div class="tab-content-desc-title text">Lorem Ipsum Dolor</div>
								<div class="tab-content-desc-text text">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit.
									Minima, enim nisi. Porro quidem tenetur voluptas, voluptatem
									sint quo suscipit voluptates maxime molestias qui ad magni eum
									quasi, dignissimos ut expedita?
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
			<aside class="l-right-aside"></aside>
		</section>
		<!-- LAYOURT : MAIN SECTION (END)-->

		<!-- LAYOUT : FOOTER (START) -->
		<footer class="l-footer text">©️ 2020 Footer Ipsum</footer>
		<!-- LAYOUT : FOOTER (END) -->
	</body>
</html>
