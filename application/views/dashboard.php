<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<?php require_once('layout/3css.php'); ?>
</head>

<body>
	<div class="wrapper">
		<!-- sidebar start -->
		<?php require_once('layout/3sidebar.php') ?>
		<!-- end sidebar -->

		<div class="main">
			<!-- navbar start -->
			<?php require_once('layout/3navbar.php'); ?>
			<!-- navbar end -->


			<!-- content start -->
			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

					<h1>Selamat Datang</h1>
				</div>
			</main>
			<!-- content end -->


			<!-- footer -->
			<?php require_once('layout/3footer.php'); ?>
			<!-- end footer -->
		</div>
	</div>


	<script src="<?= base_url('ase/kit/') ?>js/app.js"></script>
</body>

</html>
