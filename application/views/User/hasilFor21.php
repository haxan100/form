<!DOCTYPE html>
<html>
<?php
// var_dump($_SESSION);
$nama = $_SESSION['name'];
$nomorSer = $_SESSION['Nomor_Service'];
?>

<head>
	<meta charset="utf-8">
	<title>Form Sulam Alis</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- LINEARICONS -->
	<link rel="stylesheet" href="<?= base_url() ?>/templates/user/fonts/linearicons/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>/templates/user/css/style.css">
</head>

<body>




	<div class="wrapper">

		<div class="inner">
			<img src="<?= base_url() ?>/templates/user/images/image-1.png" alt="" class="image-1">
			<form id="formRegister">
				<h3>Terimakasih</h3>
				<h3>EYELASH EXTENSION</h3>
				<h5>Berikut Ini Adalah Nomor Service Kamu</h5>

				<br>
				<hr>
				<b></b><br>
				<div class="form-holder" style="
					border-radius: 8px;
					background-color: #616b68;
					padding: 10px;
				">
					<span class="lnr lnr-user"></span>
					<div class="TextKu" style="
						font-size: medium;
						margin-left: 20%;
						font-weight: bolder;
					">
						<p style="
    color: aliceblue;
">Nama : <?= $nama ?></p>
					</div>
				</div>
				<br>
				<div class="form-holder" style="
					border-radius: 8px;
					background-color: #616b68;
					padding: 10px;
				">
					<div class="TextKu" style="
						font-size: medium;
						margin-left: 20%;
						font-weight: bolder;
					">
						<span class="lnr lnr-user"></span>
						<p style="
    color: aliceblue;
">Service Nomor : <?= $nomorSer ?></p>
					</div>
				</div>



				<button id="tombolDaftar">
					<span>Close</span>
				</button>
			</form>
			<img src="<?= base_url() ?>/templates/user/images/image-2.png" alt="" class="image-2">
		</div>

	</div>
	<!-- Modal -->





	<script src="<?= base_url() ?>/templates/user/js/jquery-3.3.1.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="<?= base_url() ?>/templates/user/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<script>
		$(document).ready(function() {


			var bu = '<?= base_url(); ?>';


			$('#tombolDaftar').click(function(e) {

				window.location.href = bu + 'User/menu';
			});
			getSpek()

			function getSpek() {
				$.ajax({
					url: bu + 'user/get_tbl_service_sulam',
					method: 'post',
					dataType: 'json',
				}).done(function(e) {
					// console.log(e);
					if (e.status) {
						html = '<option value="" selected disabled>Silahkan Pilih </option>';
						$.each(e.data, function(key, val) {
							html += '<option value="' + val.value + '">' + val.html + '</option>';
						});
						$('#state2').html(html);
					} else {
						alert('Terjadi Kesalahan');
					}
				}).fail(function(e) {
					// console.log(e);
					alert('Terjadi Kesalahan');

				});
			}

			$("#formRegister").submit(function(e) {
				$('#registerBtn').html('<i class="fas fa-spinner fa-spin"></i> Tunggu.. Mendaftarkan..');
				$('#registerBtn').prop('disabled', true);
				$.ajax({
					type: 'POST',
					url: bu + 'user/simpan',
					dataType: 'json',
					data: new FormData(this),
					processData: false,
					contentType: false,
					cache: false,
					async: false,
				}).done(function(e) {
					// console.log('berhasil');
					console.log(e);
					if (e.status) {

						Swal.fire({
							icon: 'success',
							title: 'berhasil',
							text: e.message,
						})
					} else {

						Swal.fire({
							icon: 'error',
							title: 'Mohon Isi Semua Data...',
							text: e.message,
						})
					}
				}).fail(function(e) {
					// console.log('gagal');
					// console.log(e);
					var message = 'Terjadi Kesalahan.';
					$('#alertNotif').html('<div class="alert alert-danger alert-dismissible show" role="alert"><span>' + message + '</span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				}).always(function() {
					console.log('selesai');
					// toAlert();
					// resetButton();
				});
				return false;
			});

		});
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->


<style>
	.inner {
		position: relative;
		width: 65%;
	}

	.TulisanIni {
		min-width: 26px;
		background-color: rgb(103, 58, 183);
		color: rgba(255, 255, 255, 1);
		border-radius: 5px;
	}

	@media (max-width: 767px) {
		form {
			padding: 2px;
			box-shadow: none;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			-ms-box-shadow: none;
			-o-box-shadow: none;
		}

	}
</style>

</html>
<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<h3>EYEBROW EMBROIDERY CONSENT & RELEASE AGREEMENT</h3>
				<hr>

				Form ini dibuat untuk calon customer mengerti dan paham betul tentang treatment yang akan di lakukan. Jika anda memiliki pertanyaan, silahkan bertanya.<br>

				Meskipun treatment sulam alis saat efektif dam berhasil pada kebanyakan orang, tapi tidak ada jaminan pasti semua orang mendapatkan hasil yang sama. Tergantung kepada jenis kulit dan after care setelah sulam.<br><br>

				Proses sulam alis adalah memasukkan pigment dengan menggores lapisan terluar kulit.
				Semua bahan yang masuk kedalam kulit, menggunakan bahan sekali buang, dan langsung di buang setelah digunakan.<br><br>

				Secara umum, hasil yang didapat adalah bagus, namun hasil yang sempurna, membutuhkan retouch/penggulangan setelah minimal 1 bulan, maksimal 3 bulan.<br><br>

				Setelah proses sulam selesai, ada proses pengelupasan yang biasanya di mulai pada hari ke 3 sampai hari ke 7. Setelah kelupas sempurna, warna akan turun sampai 40-70% (tergantung jenis kulit dan after care). Dan setelah minggu ke 4 setelah sulam warna akan lebih nyata ( inilah hasil yang sebenarnya).<br><br>

				Tebal dan tipisnya warna hasil sulam setelah kelupas, adalah tergantung dari masing2 jenis kulit, tidak ada patokan khusus.<br><br>

				Pigment yang kami gunakan bersifat semi-permanent dan berbahan dasar herbal, jadi akan hilang dengan perlahan dari waktu ke waktu. Biasanya bertahan dari 1 th hingga 2 tahun. Dan agar selalu terlihat sempurna perlu di lakukan retouch setiap 6 bulan – 2 tahun sekali.<br><br>

				RESIKO, KOMPLIKASI<br>
				1. Sakit, walaupun proses sulam adalah hanya menggores lapisan luar kulit, tetap ada resiko rasa sakit atau ada rasa tidak nyaman. Rasa sakit / tidak nyaman pada setiap orang berbeda.<br>

				2. Infeksi, meskipun resiko infeksi sangat kecil, tapi tetap harus di perhatikan selalu kebersihan area yang di sulam agar selalu bersih dan steril.<br>

				3. Warna tidak rata, hasil seperti ini di karenakan after care yang tidak di lakukan dengan benar, atau pada saat pengerjaan mengeluarkan darah, kulit tipis, kulit berminyak , dsb. Buatlah jadwal retouch<br>

				4. Warna berubah, yang dimaksud warna berubah adalah warna menjadi lebih pudar atau lebih gelap dari hasil pertama sulam. Dikarenakan tingkat penyerapan setiap kulit orang berbeda.<br>

				5. Tidak balance, sesungguhnya tidak ada wajah yang 100 % balance, tetapi tetap kami mengusahakan membuat se-balance mungkin dengan teknik pengukuran.<br>

				6. Bengkak, situasi yang amat sangat jarang, bila ada bisa dibantu kompres es, hilang dlm 1- 5 hari maksimal.<br>

				7. Anestesi, dalam proses sulam , kami tidak menggunakan anestesi
				Nama dan foto yang terkait dengan Akun Google Anda akan dicatat saat Anda mengupload file dan mengirim formulir ini.<br>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
