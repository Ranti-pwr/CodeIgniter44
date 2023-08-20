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
					<div id="notifications"><?php echo $this->session->flashdata('pesan'); ?>
							<?php echo $this->session->flashdata('pes'); ?>
				</div>

					<h1 class="h3 mb-3"><strong>Table</strong> User</h1>
					<div class="row" id="table-head">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<!-- <h4 class="card-title">User</h4> -->
									<a class="btn btn-primary" href="<?= base_url('user/tambah') ?>">Tambah</a>
								</div>
								<div class="card-content">
									<!-- table head dark -->
									<div class="table-responsive">
										<table class="table mb-0">
											<thead class="thead-dark">
												<tr>
													<th>Username</th>
													<th>Nama</th>
													<th>Level</th>
													<th>ACTION</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($user as $id) { ?>
												<tr>
													<td class="text-bold-500"><?= $id['username'] ?></td>
													<td><?= $id['nama'] ?></td>
													<td class="text-bold-500"><?= $id['level'] ?></td>
													<td>
													<a class="btn btn-primary m-2" href="<?= base_url('user/edit/'.$id['id_user']) ?>" onclick="return confirm('Edit data?');"><i data-feather="edit"></i></a>
													<a class="btn btn-primary m-2" href="<?= base_url('user/hapus/'.$id['id_user']) ?>" onclick="return confirm('Yakin hapus data?');"><i data-feather="trash-2"></i></a>
													</td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
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
