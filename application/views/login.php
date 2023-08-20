<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<?php require_once('layout/3css.php'); ?>
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Sign-In</h1>
							<p class="lead">
								User And Admin
							</p>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="name"
												placeholder="Enter your username" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password"
												placeholder="Enter your password" />
										</div>
										<div class="text-center mt-3">
											<a href="#" class="btn btn-lg btn-primary">Sign in</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
										<div class="text-center mt-3">
											<a href=""></a>
										</div>
									</form>
									<div class="text-center mt-5 text-lg fs-4">
										<p class="text-gray-600">Don't have an account? <a href="auth-register.html"
												class="font-bold">Sign
												up</a>.
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="<?= base_url('ase/kit/') ?>js/app.js"></script>
</body>

</html>
