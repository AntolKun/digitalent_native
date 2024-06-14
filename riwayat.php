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
		<div class="container mt-5">
			<h5>Riwayat Pemesanan</h5>
			<table class="table" id="tabel_pesanan">
				<thead>
					<tr>
						<th scope="col">Nama Pemesan</th>
						<th scope="col">Nomor telepon</th>
						<th scope="col">Tanggal</th>
						<th scope="col">Durasi</th>
						<th scope="col">Tipe Kamar</th>
						<th scope="col">Smoking Room</th>
						<th scope="col">Breakfast</th>
						<th scope="col">Tagihan</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// masukan file koneksi ke database
					include 'koneksi.php';

					// tangkap data dari tabel
					$sql = "SELECT * FROM bookings";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// looping data
						while ($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row["nama"] . "</td>";
							echo "<td>" . $row["notelp"] . "</td>";
							echo "<td>" . $row["tanggal"] . "</td>";
							echo "<td>" . $row["durasi"] . " Hari</td>";
							echo "<td>" . $row["tipe_kamar"] . "</td>";
							echo "<td>";
							if ($row["smoking_room"]) {
								echo '<span class="badge bg-success">YA</span>';
							} else {
								echo '<span class="badge bg-danger">TIDAK</span>';
							}
							echo "</td>";
							echo "<td>";
							if ($row["breakfast"]) {
								echo '<span class="badge bg-success">YA</span>';
							} else {
								echo '<span class="badge bg-danger">TIDAK</span>';
							}
							echo "</td>";
							echo "<td>Rp. " . $row["jumlah_tagihan"] . "</td>";
							echo "<td>";
							echo "<a href='editPesan.php?id=" . $row["id"] . "' class='btn btn-warning me-2'>Edit</a>";
							echo "<button class='btn btn-danger' onclick='deleteBooking(" . $row["id"] . ")'>Delete</button>";
							echo "</td>";
							echo "</tr>";
						}
					} else {
						echo "<tr><td colspan='9'>No records found</td></tr>";
					}
					$conn->close();
					?>
				</tbody>
			</table>
		</div>
		<!-- card pemesanan end -->

		<!-- function delete data -->
		<script>
			function deleteBooking(id) {
				if (confirm('Are you sure you want to delete this booking?')) {
					$.ajax({
						url: 'delete_booking.php',
						type: 'POST',
						data: {
							id: id
						},
						success: function(response) {
							alert(response);
							location.reload(); // reload the page to see the changes
						},
						error: function(xhr, status, error) {
							alert('An error occurred: ' + error);
						}
					});
				}
			}
		</script>
		<!-- function delete data end -->
	</body>

	</html>