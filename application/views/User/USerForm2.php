<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Form Eyelash Extension</title>
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
				<h3>Consent Form Eyelash Extension</h3>
				<?php
				// var_dump($_SESSION); 
				?>

				<div class="TulisanIni">
					<h5>USER FORM</h5>
					<p id="alertNotif"></p>
				</div>
				<br>
				<hr>
				<b>Nama</b><br>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
				</div>
				<b>Tanggal Lahir</b><br>
				<div class="form-holder">
					<span class="lnr lnr-phone-handset"></span>
					<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
				</div>

				<b>No Telp / WA</b><br>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="number" class="form-control" id="client_no_hp" name="client_no_hp" placeholder="No HP">
				</div>
				<br>

				<div class="form-holder">
					<b>Saya setuju akan menjalani sambung / melepas / meretouch bulumata tambahan pada bulumata asli saya. Dengan menandatangani perjanjian ini, saya meminta untuk disambung / dilepas / diretouch oleh Rainbrow Eyelash Artist *</b><br>
					<p id="alertNotifa1"></p>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state1" id="state1">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Setuju
							</label>
						</div>
					</div>
				</div><br>

				<div class="form-holder">
					<b>Saya mengerti bahwa ada resiko dalam sambung / mencopot / meretouch bulumata buatan pada bulumata asli saya. Saya mengerti dengan adanya kemungkinan terjadi iritasi dan rasa perih. *</b><br>
					<p id="alertNotifa1"></p>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state2" id="state2">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Setuju
							</label>
						</div>
					</div>
				</div><br>

				<div class="form-holder">
					<b>Saya mengerti dan menyetujui melakukan perawatan instruksi after care yang akan dijelaskan Rainbrow. Saya memahami konsekuensi yang terjadi bila tidak menuruti instruksi dari Rainbrow, membuat hasil sambung bulumata tidak bertahan lama. *</b><br>
					<p id="alertNotifa1"></p>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state3" id="state3">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Setuju
							</label>
						</div>
					</div>
				</div><br>
				<div class="form-holder">
					<b>Saya mengerti harus selalu menutup mata saya, selama pekerjaan sambung / copot / retouch dilakukan. Lamanya waktu tergantung pada jumlah bulumata yang dipasangkan. *</b><br>
					<p id="alertNotifa1"></p>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state4" id="state4">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Setuju
							</label>
						</div>
					</div>
				</div><br>

				<br>
				<br>
				<label for="idSpek">KONDISI: Alergi pada lem | SARAN: Sambung bulumata menggunakan lem, ada kemungkinan reaksi alergi *
				</label> <br>
				<br>
				<select id="alergiLem" name="alergiLem" class="form-control">

					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>
				<br>
				<br>
				<label for="idSpek">KONDISI: Kemoterapi dlm 6 bulan terakhir | SARAN: Terapi kemo, mungkin menimbulkan reaksidari material sambung bulumata *
				</label> <br>
				<br>
				<select id="kemoterapi" name="kemoterapi" class="form-control">

					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>
				<br>
				<label for="idSpek">KONDISI: Pengobatan teroid | SARAN: Hasil sambung bulumata tidak bertahan lama *
				</label> <br>
				<br>
				<select id="teroid" name="teroid" class="form-control">

					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>
				<br>
				<label for="idSpek">Operasi lastik kurang dari 4 bulan *
				</label> <br>
				<br>
				<select id="lastik" name="lastik" class="form-control">

					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>
				<br>
				<br>
				<label for="idSpek">KONDISI: Pakai Softlense | SARAN: Lebih baik mencopot soft lense pada saatpengerjaan *
				</label> <br>
				<br>
				<select id="softlens" name="softlens" class="form-control">

					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>
				<br>
				<label for="idSpek">KONDISI: Kulit berminyak / rambut berminyak | SARAN: Minyak akan mengurangi kekuatan sambungbulumata, membuat sambung bulumata lebih tidak tahan lama*
				</label> <br>
				<br>
				<select id="kulit_berminyak" name="kulit_berminyak" class="form-control">

					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>

				<div class="form-holder">
					<b>Saya setuju untuk melakukan dan menuruti instruksi after care dibawah ini:</b><br>
					<p id="alertNotifa1"></p>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state5" id="state5">
							<label class="form-check-label" for="flexCheckIndeterminate">
								No mascara sama sekali
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state6" id="state6">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Bulumata disisir setiap hari menggunakan mascara wand

							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state7" id="state7">
							<label class="form-check-label" for="flexCheckIndeterminate">
								No oil based produk di sekitar mata
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state8" id="state8">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Hindari terkena air 24 jam setelah pemasangan bulumata
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state9" id="state9">
							<label class="form-check-label" for="flexCheckIndeterminate">
								No tinting dan keriting bulumata pada lash extension
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state10" id="state10">
							<label class="form-check-label" for="flexCheckIndeterminate">
								No mencabut atau mengucek lash extension
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state11" id="state11">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Merawat sambung bulumata menggunakan mascara khusus untuk sambung bulumata
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state12" id="state12">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Menggunakan serum bulumata setelah melakuan eyelash extension sebanyak 8x berturut
							</label>
						</div>
					</div>
				</div><br>

				<div class="form-holder">
					<b>Saya telah membaca dan mengerti semua informasi yang tertulis di perjanjian ini, saya telah diberikan penjelasan sejelas-jelasnya serta diberikan kesempatan untuk bertanya, segala pertanyaan saya telah dijawab dengan jelas dan saya mengerti sepenuhnya bahwa adanya resiko dan aftercare yang saya harus jalankan. Saya meminta dengan sadar untuk RAINBROW melakukan sambung / dicopot / retouch bulumata, walaupun adanya kemungkinan resiko yang telah dijelaskan. Saya tidak akan menuntut rainbrow bila terjadi resiko apapun. Dan tidak menuntut RAINBROW bila hasil tidak bertahan lama dikarenakan kelalaian saya dalam menjalani after care.</b><br>
					<p id="alertNotifa1"></p>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state13" id="state13">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Setuju
							</label>
						</div>
					</div>
				</div><br>







				<hr>
				<div class="TulisanIni">
					<h5>PROFILE ART RAINBROW</h5>
				</div>
				<h6>foto art sulam kami yang akan mengerjakan Treatment kepada Anda</h6>
				<hr>
				<br>

				<b>Foto Art Rainbow</b><br>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="file" class="form-control" id="foto" name="foto" placeholder="Nama">
				</div>
				<br>
				<b>Nama Lengkap ART Kami</b><br>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" class="form-control" id="after_care_nama_art" name="after_care_nama_art" placeholder="Nama Art Kami">
				</div>
				<br>
				<b>Nama Store</b><br>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" class="form-control" id="after_care_nama_store" name="after_care_nama_store" placeholder="Nama Store">
				</div>
				<br>



				<button id="tombolDaftar">
					<span>Submit</span>
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
				// console.log($('#state2').val())
				// return false
				var a1 = $('#state1').is(":checked");
				var a2 = $('#state2').is(":checked");
				var a3 = $('#state3').is(":checked");
				var a4 = $('#state4').is(":checked");
				var a5 = $('#state5').is(":checked");
				var a6 = $('#state6').is(":checked");
				var a7 = $('#state7').is(":checked");
				var a8 = $('#state8').is(":checked");
				var a9 = $('#state9').is(":checked");
				var a11 = $('#state11').is(":checked");
				var a12 = $('#state12').is(":checked");
				var a13 = $('#state13').is(":checked");

				var i1 = $('#nama').val();
				var i2 = $('#tanggal_lahir').val();
				var i3 = $('#client_no_hp').val();

				var i8 = $('#after_care_nama_art').val();
				var i9 = $('#after_care_nama_store').val();

				if (
					!a1 || !a2 || !a3 || !a4 || !a5 || !a6 || !a7 || !a8 || !a12 || !a11 || !a9 || !a13 ||
					!i1 || !i2 || !i3 || !i8 || !i9
				) {
					Swal.fire({
						icon: 'error',
						title: 'Mohon Isi Semua Data yang Di Butuhkan',
						text: 'Anda Di Mohon Isi Semua Data',
					});
					return false
				} else {
					console.log("sssss")
					$("#formRegister").trigger('submit');
					return false;
				}
			});


			$("#formRegister").submit(function(e) {
				$('#registerBtn').html('<i class="fas fa-spinner fa-spin"></i> Tunggu.. Mendaftarkan..');
				$('#registerBtn').prop('disabled', true);
				$.ajax({
					type: 'POST',
					url: bu + 'user/simpanEyelash',
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
						setInterval(() => {
							window.location.href = bu + 'User/HasilEyelash';

						}, 200);
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
