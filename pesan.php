	<!doctype html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap demo</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	</head>

	<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

		<!-- carousel start -->
		<div id="carouselExampleCaptions" class="carousel slide">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/gam1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/gam2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Some representative placeholder content for the second slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/gam3.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<!-- carousel end -->

		<!-- navbar start -->
		<nav class="navbar px-5 navbar-expand-lg bg-dark" data-bs-theme="dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="/digitalent">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="/digitalent/pesan.php">Pesan Kamar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="/digitalent/riwayat.php">Riwayat Pesan</a>
						</li>
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
		<!-- navbar end -->

		<!-- card pemesanan start -->
		<div class="container">
			<div class="card px-5 py-5">
				<div class="card-body">
					<h5 class="mb-3">Form Pendaftaran</h5>
					<form method="POST" action="proses_booking.php" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
								<p>Nama Pemesanan</p>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="nama" name="nama">
								</div>
							</div>
							<div class="col-md-6">
								<p>No Telp.</p>
								<div class="form-floating mb-3">
									<input type="number" class="form-control" id="notelp" name="notelp">
								</div>
							</div>
							<div class="col-md-6">
								<p>Tanggal Pemesanan</p>
								<div class="form-floating mb-3">
									<input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Pesan">
								</div>
							</div>
							<div class="col-md-6">
								<p>Durasi (Hari)</p>
								<div class="form-floating mb-3">
									<input type="number" class="form-control" id="durasi" name="durasi" value="1">
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="row">
								<div class="col mt-4">
									<h6>Pilih Kamar</h6>
									<div class="col-md-6 mt-4">
										<div class="form-check">
											<input type="radio" id="deluxe" name="tipe_kamar" class="form-check-input" value="1000000" checked>
											<label class="form-check-label" for="deluxe">
												<span class="d-block d-md-none">1</span>
												<span class="d-none d-md-block">Deluxe (Rp. 1.000.000)</span>
											</label>
										</div>
									</div>

									<div class="col-md-6 mt-4">
										<div class="form-check">
											<input type="radio" id="standard" name="tipe_kamar" class="form-check-input" value="800000">
											<label class="form-check-label" for="standard">
												<span class="d-block d-md-none">2</span>
												<span class="d-none d-md-block">Standard (Rp. 800.000)</span>
											</label>
										</div>
									</div>
								</div>

								<div class="col mt-4">
									<h6>Pilih Fasilitas</h6>
									<div class="col-md-6 mt-4">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="200000" id="smoking_room" name="smoking_room">
											<label class="form-check-label" for="smoking_room">
												Include Smoking Room (Rp. 200.000)
											</label>
										</div>
									</div>

									<div class="col-md-6 mt-4">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="100000" id="breakfast" name="breakfast">
											<label class="form-check-label" for="breakfast">
												Include Breakfast (Rp. 100.000)
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 mt-4">
								<p>Harga Paket</p>
								<div class="form-floating mb-3">
									<input type="text" disabled class="form-control" id="hargapaket" name="harga_paket">
								</div>
							</div>

							<div class="col-md-6 mt-4">
								<p>Jumlah Tagihan</p>
								<div class="form-floating mb-3">
									<input type="text" disabled class="form-control" id="jumlahtagihan" name="jumlah_tagihan">
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<button class="btn btn-secondary" type="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- card pemesanan end -->

		<script>
			$(document).ready(function() {
				function calculateTotal() {
					var roomPrice = parseInt($("input[name='tipe_kamar']:checked").val());
					var smokingRoom = $("#smoking_room").is(":checked") ? parseInt($("#smoking_room").val()) : 0;
					var breakfast = $("#breakfast").is(":checked") ? parseInt($("#breakfast").val()) : 0;
					var duration = parseInt($("#durasi").val());

					var totalPackagePrice = roomPrice + smokingRoom + breakfast;
					var totalBill = (roomPrice + smokingRoom + breakfast) * duration;

					$("#hargapaket").val("Rp. " + totalPackagePrice.toLocaleString('id-ID'));
					$("#jumlahtagihan").val("Rp. " + totalBill.toLocaleString('id-ID'));
				}

				$("input[name='tipe_kamar'], #smoking_room, #breakfast, #durasi").on("change", calculateTotal);
				calculateTotal(); // Initial calculation
			});
		</script>
	</body>

	</html>