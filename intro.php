
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Pagina Producto</title>
		<link rel="stylesheet" href="style1.css" />
	</head>
	<body>
		<header>
			<h1>PrintMágico</h1>
				<nav>
					<ul class="nav-menu">
						
						<li><a href="formulario de inicio de secuion y loguuin/index.html">Registro</a></li>
						<li>
							<a href="index.html">Inicio</a>
							
						</li>
						<li><a href="contacto.php">Contactanos</a></li>
						<li><a href="./card/carrito.php">Carrito</a></li>
					</ul>
				</nav>
			</header>

		<div class="container-title"><h2>PrintMágico: </h2>Transformando Ideas en Realidad </div>

		<main>
			<div class="container-img">
				<img
					src="imagenes/producto.jpeg"
					alt="imagen-producto"
				/>
			</div>
			<div class="container-info-product">
				<div class="container-price">
					<span>$95.00</span>
					<i class="fa-solid fa-angle-right"></i>
				</div>

				<div class="container-details-product">
					<div class="form-group">
						<label for="colour">Color</label>
						<select name="colour" id="colour">
							<option disabled selected value="">
								Escoge una opción
							</option>
							<option value="negro">Negro</option>
							<option value="blanco">Blanco</option>
							<option value="gris">Gris</option>
						</select>
					</div>
					<div class="form-group">
						<label for="size">Talla</label>
						<select name="size" id="size">
							<option disabled selected value="">
								Escoge una opción
							</option>
							<option value="s">S</option>
							<option value="l">L</option>
							<option value="xl">XL</option>
							<option value="xxl">XXL</option>
						</select>
					</div>
					<button class="btn-clean" onclick="clearSelections()">Limpiar</button>
				</div>

				<div class="container-add-cart">
					<div class="container-quantity">
						<input
							type="number"
							placeholder="1"
							value="1"
							min="1"
							class="input-quantity"
						/>
						<div class="btn-increment-decrement">
							<i class="fa-solid fa-chevron-up" id="increment"></i>
							<i class="fa-solid fa-chevron-down" id="decrement"></i>
						</div>
					</div>
					<button class="btn-add-to-cart">
						<i class="fa-solid fa-plus" herf="./card/btnañadircarrito.php"></i>
						Añadir al carrito
					</button>
				</div>

				<div class="container-description">
					<div class="title-description">
						<h4>Descripción</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-description">
						<p>
							Conjunto de Camisetas de Pareja con Diseño de Hombre Araña <br>

							¡Exprésate con estilo y muestra tu amor por el Hombre Araña con este conjunto único de camisetas para pareja!
							Este set incluye dos camisetas de alta calidad, una en color negro y otra en blanco, cada una decorada con un 
							diseño exclusivo de telaraña roja con un corazón en el centro y una pequeña Araña colgando de la red.
						</p>
					</div>
				</div>

				<div class="container-additional-information">
					<div class="title-additional-information">
						<h4>Información adicional</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-additional-information hidden">
						<p>
							Características: <br>

- Diseño Exclusivo: La telaraña roja con un corazón en el centro y el Hombre Araña colgando añade un toque especial y romántico. <br>
- Colores Clásicos: La camiseta negra y la camiseta blanca permiten combinarlas fácilmente con cualquier atuendo.<br>
- Comodidad Total: Fabricadas con materiales suaves y transpirables que garantizan comodidad durante todo el día.<br>
- Perfectas para Parejas: Ideales para usar en citas, eventos especiales o simplemente para mostrar su conexión de una manera divertida y estilizada.

						</p>
					</div>
				</div>

				<div class="container-reviews">
					<div class="title-reviews" onclick="toggleReviews()">
						<h4>Calificación del Producto</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-reviews hidden" id="reviewsSection">
						<!-- Aquí se integra estrella.php mediante PHP -->
						<?php include('estrella.php'); ?>
					</div>
				</div>

				<div class="container-social">
					<span>Compartir</span>
					<div class="container-buttons-social">
						<a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox"><i class="fa-solid fa-envelope"></i></a>
						<a href="https://www.facebook.com/valentin.plazarte/"><i class="fa-brands fa-facebook"></i></a>
						<a href="https://x.com/BoJackHors21210?t=5H-Koa6hXNxQJwZisEiXkQ&s=09"><i class="fa-brands fa-twitter"></i></a>
						<a href="https://www.instagram.com/solo_mova_3000?igsh=MTY2aXk3bmpmaW12bQ=="><i class="fa-brands fa-instagram"></i></a>
						<!--<a href="#"><i class="fa-brands fa-pinterest"></i></a>-->
					</div>
				</div>
			</div>
		</main>

		<section class="container-related-products">
			<h2>Productos Relacionados</h2>
			<div class="card-list-products">
				<div class="card">
					<div class="card-img">
						<img
							src="imagenes/producto1.jpeg"
							alt="producto-1"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>Camiseta con la bati-señal</h3>
							<p class="category">Batman, Arkham</p>
						</div>
						<div class="price">$35.00</div>
					</div>
				</div>
				<div class="card">
					<div class="card-img">
						<img
							src="imagenes/producto2.jpeg"
							alt="producto-2"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>Camiseta del inigualable hombre araña</h3>
							<p class="category">Spiderman</p>
						</div>
						<div class="price">$40.00</div>
					</div>
				</div>
				<div class="card">
					<div class="card-img">
						<img
							src="imagenes/producto3.jpeg"
							alt="producto-3"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>Camiseta con logo de Batman	</h3>
							<p class="category">Footwear</p>
						</div>
						<div class="price">$35.00</div>
					</div>
				</div>
				<div class="card">
					<div class="card-img">
						<img
							src="imagenes/producto4.jpeg"
							alt="producto-4"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>Camiseta con logo del hombre araña</h3>
							<p class="category">inigualable</p>
						</div>
						<div class="price">$50.00</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<p>Para mas Información contactar con Estiven Plazarte </p> <br><br>
			<P>Celular: 0967487832</P>
		</footer>

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
		<script src="index.js"></script>
		<script src="clearForm.js"></script>
		<script>
			function toggleReviews() {
				const reviewsSection = document.getElementById('reviewsSection');
				reviewsSection.classList.toggle('hidden');
			}
		</script>
	</body>
</html>