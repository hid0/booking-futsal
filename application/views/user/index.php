<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?? 'Home'; ?> | SIFut</title>
	<link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/x-icon">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>
	<nav class="navbar navbar-expand-md bg-purple">
		<!-- Brand -->
		<div class="container float-right">
			<a class="navbar-brand" href="#">
				<img src="<?= base_url('assets/img/logo-nav.svg'); ?>" alt="Logo " height="40" srcset="">
			</a>
			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="ml-auto navbar-nav">
					<li class="nav-item">
						<a class="text-white nav-link" href="#top">Home</a>
					</li>
					<li class="nav-item">
						<a class="text-white nav-link" href="#faq">FAQ</a>
					</li>
					<?php if ($this->session->userdata('email')) : ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="29" height="29" class="rounded-circle">
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<!-- <a class="dropdown-item" href="#">Dashboard</a>
                            <a class="dropdown-item" href="#">Edit Profile</a> -->
								<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Ingin Logout?')">Log Out</a>
							</div>
						</li>
					<?php else : ?>
						<li class="nav-item">
							<a class="text-white nav-link" href="<?= base_url('auth'); ?>">Login</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container mt-5" id="top">
		<div class="row">
			<div class="col-md-6">
				<p class="text-4xl text-left">JAGA KESEHATAN DENGAN BEROLAHRAGA</p>
			</div>
			<div class="col-md-6"><img src="<?= base_url('assets/img/undraw_goal_0v5v.svg'); ?>" width="500" alt=""></div>
		</div>
	</div>
	<div class="mt-8 mb-8 bg-purple" style="height: 708px !important;">
		<h2 class="p-5 text-center text-white font-weight-bold">Daftar Tempat Futsal</h2>
		<div class="pb-8 container-fluid d-flex">
			<?php foreach ($field as $field) : ?>
				<div class="mx-auto card top-card-img">
					<img class="card-img-top" src="<?= base_url('assets/img/' . $field->gambar); ?>" style="width: auto;height: 200px !important;">
					<div class="text-center card-body">
						<h5 class="card-title"><?= $field->nama_lapangan; ?></h5>
						<p class="card-text text-muted"><?= substr($field->alamat, 0, 20); ?>...</p>
					</div>
					<div class="card-footer d-flex justify-content-between">
						<a href="#" id="btnPesan" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#pesan" data-lapangan="<?= $field->id_lapangan; ?>" data-nama="<?= $field->nama_lapangan; ?>" data-stadion="<?= $field->id_stadion; ?>">Pesan</a>
						<a href="#" id="btnJadwal" class="btn btn-sm btn-info" data-toggle="modal" data-target="#jadwal" data-lapangan="<?= $field->id_lapangan; ?>" data-nama="<?= $field->nama_lapangan; ?>">Jadwal</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<div id="faq" class="container mt-8 mb-5 bg-white">
		<h2 class="text-center font-weight-bold">Frequently Asked Questions</h2>
		<h6 class="p-4 text-center text-muted">“Sebelum kalian memutuskan untuk membooking lapangan, kalian login terlebih dahulu dan alangkah baiknya kalian membaca informasi berikut ini dibaca terlebih dahulu untuk menghindari kebingungan dan adanya salah paham”</h6>
		<div class="p-8 container-fluid d-flex">
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-12">
					<ul>
						<li>Sebelum Pemesanan harus login terlebihdahulu, dan mengisi data dengan sebenar benarnya.</li>
						<li>Ketika pemesan tidak datang atau tidak jadi bermain maka uang DP tidak akan dikembalikan dan tidak ada pembatalan pemesanan, kalo sudah terlanjur yaaa nasib</li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-12">
					<ul>
						<li>Pemesanan tempat booking harus membayar DP pemesanan, kalo belum DP pemesanan tidak akan di proses.</li>
						<li>Dan masih banyak lagi aturan aturan lainnya, kami belumbisa menjelaskan disini karena kami masih diskusi</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="footer" class="p-3 bg-dark">
		<div id="contact" class="container">
			<div class="row">
				<div class="col-md-4">
					<h5 class="text-center text-white">No.Telepon/WA</h5>
					<div class="p-4">
						<h6 class="text-center text-white">+62857777111222</h6>
						<h6 class="text-center text-white">+62857777111233</h6>
					</div>
				</div>
				<div class="col-md-4">
					<h5 class="text-center text-white">Email</h5>
					<div class="p-4">
						<h6 class="text-center text-white">sifutsal@gmail.com</h6>
					</div>
				</div>
				<div class="col-md-4">
					<h5 class="text-center text-white">Follow Us</h5>
					<div class="p-4">
						<h6 class="text-center text-white"><i class="fab fa-whatsapp"></i>&nbsp;+62857777111233</h6>
						<h6 class="text-center text-white"><i class="fab fa-instagram"></i>&nbsp;@sifutsal</h6>
						<h6 class="text-center text-white"><i class="fab fa-facebook"></i>&nbsp;bookingfutsal</h6>
					</div>
				</div>
			</div>
		</div>
		<footer class="p-2">
			<div class="container text-center text-muted">Copyright &copysr; 2020 Develop By Sifut</div>
		</footer>
	</div>

	<!-- modal content -->
	<div class="modal fade" id="pesan" tabindex="-1" role="dialog" aria-labelledby="pesanLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pesanLabel"><span id="nama_lapangan"></span>, <?= indoDate(date('d F Y')); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('home/pesan'); ?>" class="modal-body">
					<div class="form-group">
						<label for="team">Nama Tim</label>
						<input type="text" name="team" id="team" class="form-control" placeholder="Mbuh Opo">
					</div>
					<div class="form-group">
						<label for="team">Tanggal</label>
						<input type="date" name="team" id="team" class="form-control" value="<?= date('Y-m-d'); ?>">
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="start">Mulai</label>
							<input type="time" name="start" id="start" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="end">Selesai</label>
							<input type="time" name="end" id="end" class="form-control">
						</div>
					</div>
				</form>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="button" class="btn btn-primary">Pesan Sekarang</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="jadwal" tabindex="-1" role="dialog" aria-labelledby="jadwalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="jadwalLabel"><span id="lapangan"></span>, <?= indoDate(date('d F Y')); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Tim</th>
								<th>Mulai</th>
								<th>Selesai</th>
							</tr>
						</thead>
						<tbody id="jadwal">
							<?php //$no = 1 
							?>
							<?php //foreach ($booking as $d) : 
							?>
							<!-- <tr>
									<td><?= $no++; ?>.</td>
									<td><?= $d->nama_tim; ?></td>
									<td><?= $d->jam_mulai; ?></td>
									<td><?= $d->jam_selesai; ?></td>
								</tr> -->
							<?php //endforeach; 
							?>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script>
		$(document).ready(function() {
			$(document).on('click', '#btnPesan', function() {
				var lapangan = $(this).data('lapangan')
				var nama = $(this).data('nama')
				console.log('berhasil')
				$('span#nama_lapangan').text(nama)
			})
			$(document).on('click', '#btnJadwal', function() {
				var IdLapangan = $(this).data('lapangan')
				var nama = $(this).data('nama') //data-nama
				$('span#lapangan').text(nama)
				$.ajax({
					url: '<?= base_url('home/getlapanganajax'); ?>',
					type: 'POST',
					data: {
						id_lapangan: IdLapangan
					},
					success: function(res) {
						// menampilkan hasil data dari ajax
						$("tbody#jadwal").html(res)
					}
				})
			})
		})
	</script>
</body>

</html>