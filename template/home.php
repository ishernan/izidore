
<body>
	<header>
		<!-- nav1 -->
		<nav class="navbar navbar-expand-md navbar-light bg-white border shadow-sm">
			<div class="container-fluid">
				<a class="navbar-brand fs-2 police1 text-muted">izidore</a>
				<div class="collapse navbar-collapse" id="navbarNav">
					<form class="d-flex container justify-content-center">
						<input class="form-control rounded-pill border-2 bg-light w-50 police1" type="search" placeholder="Quel produit vous ferait plaisir ?" aria-label="Search">
						<button class="btn btn-search btn-outline-warning btn-lg d-flex align-items-center shadow-1 rounded-pill" type="submit"><i class="bi bi-search"></i></button>
					</form>
					<button type="button" class="btn button-vert text-uppercase fw-bold px-4">Vendre</button>
				</div>

				<div>

					<a class="btn btn-outline-light text-dark" role="button"><i class="bi bi-heart"></i></a>
					<a class="btn btn-outline-light text-dark" role="button"><i class="bi bi-cart3"></i></a>
					<a class="btn btn-outline-light text-dark" role="button"><i class="bi bi-file-person"></i></a>
				</div>
			</div>
		</nav>
		<!-- nav1 -->

		<!-- nav2 -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav police1">
						<!-- <div class="d-flex"> -->
						<li class="nav-item">
							<a class="nav-link active text-danger fw-bold text-uppercase" aria-current="page" href="#">Nouveautés</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Vide-Apparts</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Meubles</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Eléctroménager</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Décoration</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Marques</a>
						</li>
					</ul>
				</div>
				<div>
					<ul class="navbar-nav collapse navbar-collapse police1" id="navbarNav">
						<li class="nav-item">
							<a class="nav-link" href="#">Comment ça marche ?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Conseils</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- nav2 -->
	</header>

	<main>
		<section>
			<!-- banier -->
			<div class="container-fluid imageBannier">
				<p class="text-uppercase text-white text-start ps-5 pt-4 police2" style="font-size: 35px;"><strong>Bienvenue chez Antoine</strong>
				</p>
			</div>
			<!-- banier -->
		</section>

		<section class="container-fluid">

			<div class="row mt-5 justify-content-center">
				<!-- card vendeur -->
				<div class="col-12 col-lg-6 col-xl-4 order-md-1 order-lg-1 ">
					<div class="card card-vendeur box-Sha mx-auto">
						<div class="d-flex align-items-center justify-content-center background">
							<h5 class="card-title text-center fw-bold police2" style="font-size: 17px;"><i class="bi bi-geo-alt h4 pe-3"></i>Toulouse, 31000</h5>
						</div>
						<div class="card-body">
							<div class="card-text m-4 police2">
								<h2 class="">
									<span class="z me-3">Z'</span>
									<span style="font-size: 30px; font-weight: 400;"> Antoine</span>
								</h2>
								<div class="" role="button" tabindex="0" id="evaluations">
									<a href="template/evaluation.php" class="bg-white">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
									</a>
								</div>

								<div class="card bg-light mb-3 d-none" style="max-width: 10rem;" id="cardRating">
									<div class="card-header police1" style="font-size: 16px;">Evaluez le vendeur</div>
									<div class="card-body police1">
										<h5 class="card-title">Note : <span id="ponderation"><?= $ponderation; ?> </span>  sur 5</h5>
										<p class="card-text fw-bold"><?= $votes; ?> Evaluations </p>
									</div>
								</div>

								<h5 class="mt-2"> Meubles descendus</h5>
								<div class="d-flex">
									<i class="bi bi-arrow-down pe-3 arrow"></i>
									<p class=" police1"> Antoine s'engage à descendre ses meubles au rez-de-chaussée ! </p>
								</div>
								<h5> Préférence de retrait</h5>
								<div class="d-flex">
									<i class="bi bi-calendar3 pe-3 calendar"></i>
									<p class="police1">
										Semaine : de 08h à 20h <br>
										Week-end : de 08h à 20h </p>
								</div>
								<hr class="text-muted">
								<div class="accordion accordion-flush p-0" id="accordionFlushExample">
									<div class="accordion-item">
										<h2 class="accordion-header" id="flush-headingOne">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: white;">
												Description
											</button>
										</h2>
										<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
											<div class="accordion-body">
												⚠️ Vide-appartement témoin : rien n'est à vendre !
											</div>
										</div>
									</div>
								</div>
								<hr class="text-muted">
								<a href="#" class="btn w-100 text-uppercase button-vert"><span style="font-size: 18px;">Entrer en contact</span></a>
							</div>
							<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
								<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
								<script>
									(function() {
										var setting = {
											"height": 385,
											"width": 803,
											"zoom": 17,
											"queryString": "7 Boulevard des Minimes, Toulouse, France",
											"place_id": "ChIJNbQcQKS8rhIRqPHisX3C7tA",
											"satellite": false,
											"centerCoord": [43.614944415130495, 1.4494223999999978],
											"cid": "0xd0eec27db1e2f1a8",
											"lang": "fr",
											"cityUrl": "/france/toulouse",
											"cityAnchorText": "Carte de Toulouse, Sud de la France, France",
											"id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
											"embed_id": "511633"
										};
										var d = document;
										var s = d.createElement('script');
										s.src = 'https://1map.com/js/script-for-user.js?embed_id=511633';
										s.async = true;
										s.onload = function(e) {
											window.OneMap.initMap(setting)
										};
										var to = d.getElementsByTagName('script')[0];
										to.parentNode.insertBefore(s, to);
									})();
								</script><a href="https://1map.com/fr/map-embed">1 Map</a>
							</div>
						</div>
					</div>
				</div>
				<!-- card vendeur -->

				<!-- cards articles -->
				<div class="col-12 col-lg-6 col-xl-7 order-md-2 pe-5 ps-0">
					<div class="row responsive1">
						<div class="col-12 col-md-6 col-xxl-4 mb-3 d-flex justify-content-evenly ">
							<div class="card box-Sha full" style="width: 20rem; border: none;">
								<img src="public/images/lampe.jpeg" class="card-img-top" alt="...">
								<div class="d-flex align-items-center justify-content-center">
									<h5 class="card-title h6 text-center background-card-article mb-0">Déco</h5>
								</div>
								<div class="card-body p-1">
									<div class=" card-text d-flex justify-content-between">
										<div>
											<span class="fs-3 fw-bold">11 € </span> <br>
											<p class="gray"> Maison du Monde </p>
										</div>
										<div class="panier align-middle mt-3">
											<i class="bi bi-cart3"></i>
										</div>
									</div>
									<a href="#" class="btn btn-mondialrelay"><i class="bi bi-truck me-2"></i>Mondial Relay</a>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6 col-xxl-4 mb-3 d-flex justify-content-evenly">
							<div class="card box-Sha full" style="width: 20rem; border: none;">
								<img src="public/images/canapé.jpeg" class="card-img-top img-fluid" alt="...">
								<div class="d-flex align-items-center justify-content-center">
									<h5 class="card-title h6 text-center background-card-article mb-0">Déco</h5>
								</div>
								<div class="card-body p-1">
									<div class=" card-text d-flex justify-content-between">
										<div>
											<span class="fs-3 fw-bold">11 € </span> <br>
											<p class="gray"> Maison du Monde </p>
										</div>
										<div class="panier align-middle mt-3">
											<i class="bi bi-cart3"></i>
										</div>
									</div>
									<a href="#" class="btn btn-mondialrelay"><i class="bi bi-truck me-2"></i>Mondial Relay</a>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6 col-xxl-4 mb-3 d-flex justify-content-evenly">
							<div class="card box-Sha full" style="width: 20rem; border: none;">
								<img src="public/images/table.jpeg" class="card-img-top" alt="...">
								<div class="d-flex align-items-center justify-content-center">
									<h5 class="card-title h6 text-center background-card-article mb-0">Déco</h5>
								</div>
								<div class="card-body p-1">
									<div class=" card-text d-flex justify-content-between">
										<div>
											<span class="fs-3 fw-bold">11 € </span> <br>
											<p class="gray"> Maison du Monde </p>
										</div>
										<div class="panier align-middle mt-3">
											<i class="bi bi-cart3"></i>
										</div>
									</div>
									<a href="#" class="btn btn-mondialrelay"><i class="bi bi-truck me-2"></i>Mondial Relay</a>
								</div>
							</div>
						</div>


						<div class="col-12 col-md-6 col-xxl-4 mb-3 d-flex justify-content-evenly">
							<div class="card box-Sha full" style="width: 20rem; border: none;">
								<img src="public/images/living-room.jpg" class="card-img-top" alt="...">
								<div class="d-flex align-items-center justify-content-center">
									<h5 class="card-title h6 text-center background-card-article mb-0">Déco</h5>
								</div>
								<div class="card-body p-1">
									<div class=" card-text d-flex justify-content-between">
										<div>
											<span class="fs-3 fw-bold">11 € </span> <br>
											<p class="gray"> Maison du Monde </p>
										</div>
										<div class="panier align-middle mt-3">
											<i class="bi bi-cart3"></i>
										</div>
									</div>
									<a href="#" class="btn btn-mondialrelay"><i class="bi bi-truck me-2"></i>Mondial Relay</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-4 mb-3 d-flex justify-content-evenly">
							<div class="card box-Sha full" style="width: 20rem; border: none;">
								<img src="public/images/cafetiere.jpeg" class="card-img-top" alt="...">
								<div class="d-flex align-items-center justify-content-center">
									<h5 class="card-title h6 text-center background-card-article mb-0">Déco</h5>
								</div>
								<div class="card-body p-1">
									<div class=" card-text d-flex justify-content-between">
										<div>
											<span class="fs-3 fw-bold">11 € </span> <br>
											<p class="gray"> Maison du Monde </p>
										</div>
										<div class="panier align-middle mt-3">
											<i class="bi bi-cart3"></i>
										</div>
									</div>
									<a href="#" class="btn btn-mondialrelay"><i class="bi bi-truck me-2"></i>Mondial Relay</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-4 mb-3 d-flex justify-content-evenly">
							<div class="card box-Sha full" style="width: 20rem; border: none;">
								<img src="public/images/chaise.jpeg" class="card-img-top" alt="...">
								<div class="d-flex align-items-center justify-content-center">
									<h5 class="card-title h6 text-center background-card-article mb-0">Déco</h5>
								</div>
								<div class="card-body p-1">
									<div class=" card-text d-flex justify-content-between">
										<div>
											<span class="fs-3 fw-bold">11 € </span> <br>
											<p class="gray"> Maison du Monde </p>
										</div>
										<div class="panier align-middle mt-3">
											<i class="bi bi-cart3"></i>
										</div>
									</div>
									<a href="#" class="btn btn-mondialrelay"><i class="bi bi-truck me-2"></i>Mondial Relay</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-4 mb-3 d-flex justify-content-evenly">
							<div class="card box-Sha full" style="width: 20rem; border: none;">
								<img src="public/images/etagere.jpeg" class="card-img-top" alt="...">
								<div class="d-flex align-items-center justify-content-center">
									<h5 class="card-title h6 text-center background-card-article mb-0">Déco</h5>
								</div>
								<div class="card-body p-1">
									<div class=" card-text d-flex justify-content-between">
										<div>
											<span class="fs-3 fw-bold">11 € </span> <br>
											<p class="gray"> Maison du Monde </p>
										</div>
										<div class="panier align-middle mt-3">
											<i class="bi bi-cart3"></i>
										</div>
									</div>
									<a href="#" class="btn btn-mondialrelay"><i class="bi bi-truck me-2"></i>Mondial Relay</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-4 mb-3 d-flex justify-content-evenly">
							<div class="card box-Sha full" style="width: 20rem; border: none;">
								<img src="public/images/plante2.jpeg" class="card-img-top" alt="...">
								<div class="d-flex align-items-center justify-content-center">
									<h5 class="card-title h6 text-center background-card-article mb-0">Déco</h5>
								</div>
								<div class="card-body p-1">
									<div class="card-text d-flex justify-content-between">
										<div>
											<span class="fs-3 fw-bold">11 € </span> <br>
											<p class="gray"> Maison du Monde </p>
										</div>
										<div class="panier align-middle mt-3">
											<i class="bi bi-cart3"></i>
										</div>
									</div>
									<a href="#" class="btn btn-mondialrelay"><i class="bi bi-truck me-2"></i>Mondial Relay</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-4 mb-3 d-flex justify-content-evenly">
							<div class="card box-Sha full" style="width: 20rem; border: none;">
								<img src="public/images/table2.jpeg" class="card-img-top" alt="...">
								<div class="d-flex align-items-center justify-content-center">
									<h5 class="card-title h6 text-center background-card-article mb-0">Déco</h5>
								</div>
								<div class="card-body p-1">
									<div class=" card-text d-flex justify-content-between">
										<div>
											<span class="fs-3 fw-bold">11 € </span> <br>
											<p class="gray"> Maison du Monde </p>
										</div>
										<div class="panier align-middle mt-3">
											<i class="bi bi-cart3"></i>
										</div>
									</div>
									<a href="#" class="btn btn-mondialrelay"><i class="bi bi-truck me-2"></i>Mondial Relay</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- cards articles -->
			</div>
		</section>
	</main>

	<section>

		<div class="bg-light mt-5 mb-4 pb-3">
			<p class="text-center ps-5 pt-4 police2" style="font-size: 35px;"><strong>Nos annonces similaires</strong></p>
			<div class="container-fluid mt-5">
				<div class="owl-carousel owl-theme">

					<div class="ms-2 me-2 box-Sha full">
						<div class="card ">
							<img src="public/images/suspension.jpeg" alt="" class="cardImage bgImage">
							<div class="card-img-overlay d-flex align-items-center mt-3">
								<h3 class="text-white text-uppercase">Chez Marine</h3>
							</div>
							<div class="card-body m-2 p-1">
								<h6 class="card-subtitle ">3 produits</h6>
								<div class="card-text">
									<p style="color: #58b58d; font-weight:500">table • bureau • +1 article</p>
									<p class="text-muted float-end mb-0 ">Colomiers
									<p>
								</div>
							</div>
						</div>
					</div>

					<div class="ms-2 me-2 box-Sha full">
						<div class="card">
							<img src="public/images/tapis.jpeg" alt="" class="cardImage bgImage">
							<div class="card-img-overlay d-flex align-items-center mt-3">
								<h3 class="text-white text-uppercase">Chez Sandrine</h3>
							</div>
							<div class="card-body m-2 p-1">
								<h6 class="card-subtitle ">3 produits</h6>
								<div class="card-text">
									<p style="color: #58b58d; font-weight:500">table • bureau • +1 article</p>
									<p class="text-muted float-end mb-0 ">Toulouse
									<p>
								</div>
							</div>
						</div>
					</div>

					<div class="ms-2 me-2 box-Sha full">
						<div class="card ">
							<img src="public/images/armoire.jpeg" alt="" class="cardImage bgImage">
							<div class="card-img-overlay d-flex align-items-center mt-3">
								<h3 class="text-white text-uppercase">Chez Rodrigo</h3>
							</div>
							<div class="card-body m-2 p-1">
								<h6 class="card-subtitle ">3 produits</h6>
								<div class="card-text">
									<p style="color: #58b58d; font-weight:500">table • bureau • +1 article</p>
									<p class="text-muted float-end mb-0 ">Muret
									<p>
								</div>
							</div>
						</div>
					</div>

					<div class="ms-2 me-2 box-Sha full">
						<div class="card">
							<img src="public/images/buffet2.jpeg" alt="" class="cardImage bgImage">
							<div class="card-img-overlay d-flex align-items-center mt-3">
								<h3 class="text-white text-uppercase">Chez Isaac</h3>
							</div>
							<div class="card-body m-2 p-1">
								<h6 class="card-subtitle ">3 produits</h6>
								<div class="card-text">
									<p style="color: #58b58d; font-weight:500">table • bureau • +1 article</p>
									<p class="text-muted float-end mb-0 ">Valparaiso
									<p>
								</div>
							</div>
						</div>
					</div>

					<div class="ms-2 me-2 box-Sha full">
						<div class="card">
							<img src="public/images/chevet.jpeg" alt="" class="cardImage bgImage">
							<div class="card-img-overlay d-flex align-items-center mt-3">
								<h3 class="text-white text-uppercase">Chez Pierre</h3>
							</div>
							<div class="card-body m-2 p-1">
								<h6 class="card-subtitle ">3 produits</h6>
								<div class="card-text">
									<p style="color: #58b58d; font-weight:500">table • bureau • +1 article</p>
									<p class="text-muted float-end mb-0 ">Paris
									<p>
								</div>
							</div>
						</div>
					</div>

					<div class="ms-2 me-2 box-Sha full">
						<div class="card">
							<img src="public/images/table3.jpeg" alt="" class="cardImage bgImage">
							<div class="card-img-overlay d-flex align-items-center mt-3">
								<h3 class="text-white text-uppercase ">Chez Elisa</h3>
							</div>
							<div class="card-body m-2 p-1">
								<h6 class="card-subtitle ">3 produits</h6>
								<div class="card-text">
									<p style="color: #58b58d; font-weight:500">table • bureau • +1 article</p>
									<p class="text-muted float-end mb-0 ">Marseille
									<p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="row">
		<div class="my-4 py-3 px-3">
			<div class="col-12 col-lg-10 col-xl-8 mx-auto row justify-content-around d-flex justify-content-center text-start police1">
				<div class="col-12 col-md-4">
					<h6 class="police2" style="font-size: 19px; font-weight: 400; ">1. LA MESSAGERIE <br>INTÉGRÉE</h6>
					<p style="font-size: 17px;" class="pt-2">Parlez directement avec le vendeur. Une fois l'achat effectué, recevez ses coordonnées téléphoniques.</p>
					<p class="card-text"><small class="text-muted">En savoir plus</small></p>
				</div>
				<div class="col-12 col-md-4">
					<h6 class="police2" style="font-size: 19px; font-weight: 400; ">2. LE PAIEMENT <br>SÉCURISÉ</h6>
					<p style="font-size: 17px;" class="pt-2">Votre argent est conservé, et le vendeur est payé lorsque vous confirmez la réception de l'article.</p>
					<p class="card-text"><small class="text-muted">En savoir plus</small></p>
				</div>
				<div class="col-12 col-md-4">
					<h6 class="police2" style="font-size: 19px; font-weight: 400; ">3. LA LIVRAISON <br>PARFAITE</h6>
					<p style="font-size: 17px;" class="pt-2">Faites-vous livrer via nos solutions de livraison adaptées à la seconde main.</p>
					<p class="card-text"><small class="text-muted">En savoir plus</small></p>
				</div>
			</div>
			<img src="public/images/buyer-online.png" alt="" class="button-image float-end" id="imagePosition">
		</div>
	</section>

	<section class="container-fluid bg-light">
		<div class="container py-4 text-center">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators" id="buttonPosition">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-secondary" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-secondary" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-secondary" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<h4 class="police2" style="font-size: 24px; font-weight:700;">01<h4>
								<h5 style="font-size:19px; font-weight:600;">Quand suis-je débité ?</h5>
								<p style="font-size: 17px;" class="pt-2">Vous pré-payez votre panier et n’êtes débité qu’une <br> fois que le vendeur confirme la disponibilité de ses meubles.</p>
					</div>
					<div class="carousel-item">
						<h4 class="police2" style="font-size: 24px; font-weight:700;">02<h4>
								<h5 style="font-size:19px; font-weight:600;">Comment je contacte le vendeur ?</h5>
								<p style="font-size: 17px;" class="pt-2">Son numéro vous est transmis une fois la disponibilité des<br> meubles confirmée pour prendre rendez-vous pour le<br>retrait.</p>
					</div>
					<div class="carousel-item">
						<h4 class="police2" style="font-size: 24px; font-weight:700;">03<h4>
								<h5 style="font-size:19px; font-weight:600;">Et si ça n’est pas conforme ?</h5>
								<p style="font-size: 17px;" class="pt-2">Si le meuble ne correspond pas à sa description, ne le<br> retirez pas et contactez-nous pour être remboursé à 100%.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center pb-5 police2">
			<button class="btn button-vert text-uppercase"> 🤔 J'ai encore un doute</button>
		</div>
	</section>


	<footer class="py-5 px-5 text-light">
		<div class="container p-4 pb-0">
			<div class="row text-start">
				<div class="col-lg-4 mb-3 my-lg-auto ml-lg-0">
					<a class="btn btn-outline-primary btn-floating m-1" href="https://www.facebook.com/izidore.off"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a class="btn btn-outline-info btn-floating m-1" href="https://www.instagram.com/izidore_/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a class="btn btn-outline-danger btn-floating m-1" href="https://fr.pinterest.com/izidore_off/"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
				</div>

				<div class="col-lg-8 text-lg-left" style="font-size: 17px">
					<p class="police2" style="font-weight: 700;">À PROPOS</p>
					<p class="mt-1 police1">
						"Acheter des meubles d'occasion ne doit plus se subir ! izidore a inventé le vide-appartement pour acheter facilement des meubles d'occasion chez les personnes qui vendent des meubles."
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-lg-4 text-sm-left pt-3 d-block">
					<h6 class="police2" style="font-size: 17px;">Top villes où se meubler</h6>
					<div class="police1 text-white" style="font-size: 15px;">
						<a href="#">Meubles d'occasion à Paris</a><br>
						<a href="#">Meubles d'occasion à Bordeaux</a><br>
						<a href="#">Meubles d'occasion à Toulouse</a><br>
						<a href="#">Meubles d'occasion à Montpellier</a><br>
						<a href="#">Le guide du vide-appartement</a><br>
						<a href="#">Je vends des meubles</a></p>
					</div>
				</div>

				<div class="col col-sm-6 col-lg-4 text-sm-left pt-3">
					<h6 class="police2" style="font-size: 17px;">Je vends des meubles</h6>
					<div class="police1 d-block " style="font-size: 15px;">
						<a href="###">Créer son vide-appart</a><br>
						<a href="###">Vendre tous ses meubles</a><br>
						<a href="###">Prendre des photos pour vendre</a><br>
						<a href="###">Estimer le prix des meubles</a></span>
					</div>
				</div>

				<div class="col col-sm-6 col-lg-4 text-sm-left pt-3">
					<h6 class="police2" style="font-size: 17px;">Nos Top Meubles d'occasion</h6>
					<div class="police1 d-block " style="font-size: 15px;">
						<a href="#">Canapé occasion</a><br>
						<a href="#">Table occasion</a><br>
						<a href="#">Commode occasion</a><br>
						<a href="#">Electroménager occasion</a><br>
						<a href="#">Lave-vaisselle occasion</a><br>
						<a href="#">Frigo occasion</a><br>
						<a href="#">Fauteuil occasion</a>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col col-sm-6 col-lg-4 text-sm-left pt-3 order-lg-2">
					<h6 class="police2" style="font-size: 17px;">Nos guides</h6>
					<div class="police1 d-block " style="font-size: 15px;">
						<a href="#">Conseils avant d'acheter des meubles d'occasion</a><br>
						<a href="#">Acheter un canapé d'occasion</a><br>
						<a href="#">Acheter un lit d'occasion</a><br>
						<a href="#">Acheter une table d'occasion</a><br>
						<a href="#">Se meubler dans un vide-appart</a><br>
						<a href="#">Le vide-appart</a><br>
						<a href="#">Le vide-maison</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 text-sm-left pt-0 pt-sm-3 order-lg-3">
					<div class="police1 d-block " style="font-size: 15px;">
						<a href="#">La décoration pas chère</a><br>
						<a href="#">DIY meubles</a><br>
						<a href="#">Aménager son intérieur</a><br>
						<a href="#">Vendre son mobilier d'entreprise</a><br>
						<a href="#">Nos recettes fait-maison</a><br>
						<a href="#">Consommation responsable</a><br>
						<a href="#">Tous nos guides</a>
					</div>
				</div>
				<div class="col col-sm-6 col-lg-4 text-sm-left pt-3 order-lg-1">
					<h6 class="police2" style="font-size: 17px;">Autres informations</h6>
					<div class="police1 d-block " style="font-size: 15px;">
						<a href="#">Plan du site</a><br>
						<a href="#">Le blog</a><br>
						<a href="#">Nous contacter</a><br>
						<a href="#">Avis clients</a><br>
						<a href="#">Recrutement</a><br>
						<a href="#">Notre service pro</a><br>
						<a href="#">Aide</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container mt-3">
			<div class="pt-3 text-center police1" style="font-size: 17px">
				<span>izidore, made with in Toulouse</span>
				<p>Copyright 2020 izidore. All Rights Reserved</p>
				<a href="#">Plan du site</a> |
				<a href="#">Presse</a> |
				<a href="#">CGU</a>
			</div>
		</div>

	</footer>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<script src="public/lib/js/owl.carousel.min.js"></script>
	<script src="public/js/carousel.js"></script>
	<script src="public/js/rating.js"></script>
	<script src="public/js/script.js"></script>


</body>

</html>