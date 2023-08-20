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
					<h1 class="h3 mb-3"><strong>Tambah</strong> User</h1>
					<div class="container-fluid pt-4 px-4">
						<div class="bg-light rounded h-100 p-4">
							<form action="<?= base_url('user/simpan'); ?>" method="post">
								<div class="row mb-3">
									<label class="col-sm-2 col-form-label">Username</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="username">
									</div>
								</div>
								<div class="row mb-3">
									<label class="col-sm-2 col-form-label">Nama</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="nama">
									</div>
								</div>
								<div class="row mb-3">
									<label class="col-sm-2 col-form-label">Password</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" name="password">
									</div>
								</div>

								<div class="row mb-3">
									<label class="col-sm-2 col-form-label">Level</label>
									<div class="col-sm-10">
										<select name="level" class="form-control">
											<option value="user">User</option>
											<option value="admin">Admin</option>
										</select>
									</div>
								</div>

								<button type="submit" class="btn btn-primary">Simpan</button>
							</form>
						</div>

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
