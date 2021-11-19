<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="./img/versia.icon.short.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<title>Versia.cl</title>
	<script type="text/javascript">
		var base_url = "<?php echo base_url() ?>index.php/";
	</script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo base_url() ?>"><img src="./img/versia.icon.new.png" alt="" width="16%"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#"><i class="bi bi-bookmark"></i>Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled">Contactanos</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<img src="./img/oculus-head.jpg" alt="" width="100%">
		</div>
		<br>
		<div class="row">
			<div class="col">

			</div>
			<div class="col">
				<h5 class="text-center">Oficina Equipada</h5>
				<img src="./img/oficina_equipada.gif" alt="" width="100%">
			</div>
			<div class="col s">
				<h5 class="text-center">Arriendo de Equipos de Realidad Virtual</h5>
				<img src="./img/arriendo_equipos.gif" alt="" width="100%">
			</div>
			<div class="col">
				<h5 class="text-center">Armado de PC Gamer</h5>
				<img src="./img/armado_gamer.gif" alt="" width="100%">
			</div>
			<div class="col">
				<h5 class="text-center">Venta de Insumos</h5>
				<img src="./img/venta_insumos.gif" alt="" width="100%">
			</div>
			<div class="col">

			</div>
		</div>

	</div>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 class="display-2"><img src="./img/versia.icon.short.png" alt="" width="65%" height="auto"></h1>
					<p class="lead">Disponibilidad de la oficina: Lunes a viernes de 9am a 19hrs Sábado de 9am a 14hrs</p>
					<p class="lead">Para reservas o consultas de otros horarios comunicarse vía telefono fijo: (71)-2746423 o vía Whatsapp al número: +56949477660</p>

					<br>
				</div>
				<div class="col ">
					<h5 class="display-5">Puedes Encontrarnos aquí, 30 oriente #1546, Edificio las rastras 2, oficina 309.</h5>
					<br>
					<p class="lead"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3251.0660061985327!2d-71.6286118844558!3d-35.42839488025398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9665c6da184f4319%3A0x2c25275866f3b407!2sCalle%2030%20Ote.%201546%2C%20oficina%20309%2C%20Talca%2C%20Maule!5e0!3m2!1ses-419!2scl!4v1602532033073!5m2!1ses-419!2scl" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
				</div>
			</div>
			<div class="row">
				<div class="col"><a class="font-weight-bold" href="https://api.whatsapp.com/send?phone=56949477660&text=Hola, quiero hacer una consulta."><img src="./img/whatsapp.png" alt="" width="15%" height="auto"> +56949477660 </a></div>
				<div class="col"><a class="font-weight-bold" href="mailto:hablemos@versia.cl"><img src="./img/correo.png" alt="" width="15%" height="auto"> hablemos@versia.cl </a></div>
				<div class="col"><a class="font-weight-bold" href="https://www.instagram.com/versiachile/"><img src="./img/insta.png" alt="" width="15%" height="auto"> versiachile </a></div>
				<div class="col"><a class="font-weight-bold" href="https://www.facebook.com/versiachile/"><img src="./img/face.png" alt="" width="15%" height="auto"> versiachile </a></div>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>