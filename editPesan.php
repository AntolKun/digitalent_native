<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	// Fetch the booking data
	$stmt = $conn->prepare("SELECT * FROM bookings WHERE id = ?");
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$result = $stmt->get_result();
	$booking = $result->fetch_assoc();

	if (!$booking) {
		echo "Booking not found.";
		exit();
	}

	// Close the statement
	$stmt->close();
} else {
	echo "Invalid request.";
	exit();
}

$conn->close();
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Booking</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<!-- Edit booking form start -->
	<div class="container">
		<div class="card px-5 py-5">
			<div class="card-body">
				<h5 class="mb-3">Edit Booking</h5>
				<form method="POST" action="update_booking.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $booking['id']; ?>">
					<div class="row">
						<div class="col-md-6">
							<p>Nama Pemesanan</p>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $booking['nama']; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<p>No Telp.</p>
							<div class="form-floating mb-3">
								<input type="number" class="form-control" id="notelp" name="notelp" value="<?php echo $booking['notelp']; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<p>Tanggal Pemesanan</p>
							<div class="form-floating mb-3">
								<input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $booking['tanggal']; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<p>Durasi (Hari)</p>
							<div class="form-floating mb-3">
								<input type="number" class="form-control" id="durasi" name="durasi" value="<?php echo $booking['durasi']; ?>">
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="row">
							<div class="col mt-4">
								<h6>Pilih Kamar</h6>
								<div class="col-md-6 mt-4">
									<div class="form-check">
										<input type="radio" id="deluxe" name="tipe_kamar" class="form-check-input" value="1000000" <?php if ($booking['tipe_kamar'] == '1000000') echo 'checked'; ?>>
										<label class="form-check-label" for="deluxe">
											<span class="d-block d-md-none">1</span>
											<span class="d-none d-md-block">Deluxe (Rp. 1.000.000)</span>
										</label>
									</div>
								</div>

								<div class="col-md-6 mt-4">
									<div class="form-check">
										<input type="radio" id="standard" name="tipe_kamar" class="form-check-input" value="800000" <?php if ($booking['tipe_kamar'] == '800000') echo 'checked'; ?>>
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
										<input class="form-check-input" type="checkbox" value="200000" id="smoking_room" name="smoking_room" <?php if ($booking['smoking_room']) echo 'checked'; ?>>
										<label class="form-check-label" for="smoking_room">
											Include Smoking Room (Rp. 200.000)
										</label>
									</div>
								</div>

								<div class="col-md-6 mt-4">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="100000" id="breakfast" name="breakfast" <?php if ($booking['breakfast']) echo 'checked'; ?>>
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
						<button class="btn btn-secondary" type="submit">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit booking form end -->

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