<!DOCTYPE html>
<html>

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
				<h3>Consent form Sulam Alis</h3>
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


				<div class="form-holder">
					<b>Saya telah membaca, mengerti dan setuju *</b><br>
					<p id="alertNotifa1"></p>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="membacasetuju" id="membacasetuju">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>
				<hr>
				<div class="TulisanIni">
					<h5>STATEMENT OF CONSENT AND RECITALS</h5>
				</div>
				<br>

				<div class="form-holder">
					<p id="alertNotifa2"></p>
					<b>Instruksi aftercare sudah dijelaskan dan telah di berikan salinan secara tertulis oleh pihak rainbrow,dan saya akan mematuhinya. Dan bila saya kurang jelas saya akan menghubungi kontak after careRainBrow *</b><br>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state1" id="state1">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>


				<label for="idSpek">Saya mengerti dan memilih dengan benar jenis sulaman yang di buat dan mengerti dan jelas mengenai harga yang di pilih. *</label> <br>

				<h5><label for="idSpek">Silahkan diisi Tipe Sulam dan Harga *</label> </h5>
				<br>
				<select id="state2" name="state2" class="form-control">
					<option value="default">Silahkan Pilih </option>
				</select>
				<br>
				<br>


				<div class="form-holder">
					<p id="alertNotifa3"></p>
					<b>Saya mengerti dan memilih dengan benar jenis sulaman yang di buat dan mengerti dan jelas mengenai harga yang di pilih. *</b><br>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state3" id="state3">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>

				<div class="form-holder">
					<p id="alertNotifa4"></p>
					<b>Tidak ada garansi dalam setiap hasil yang didapat, termasuk didalamnya kamuflase, removal , dsb. *</b><br>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state4" id="state4">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>

				<div class="form-holder">
					<p id="alertNotifa5"></p>
					<b>Saya mengerti bahwa Retin A, Renova, AHA, BHA, Glicolic Acid, tidak dianjurkan terkena area yang disulam, karena mempercepat hilangnya sulam.</b><br>
				</div>

				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state5" id="state5">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>

				<div class="form-holder">
					<p id="alertNotifa6"></p>
					<b>Saya mengerti bahwa sinar matahari, berjemur, kaporit, dan beberapa obat kulit dapat merubahwarna sulam *</b><br>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state6" id="state6">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>

				<div class="form-holder">
					<p id="alertNotifa7"></p>
					<b>Saya bertanggung jawab untuk pemilihan warna, pilihan bentuk, yang akan di kerjakan hari ini. *</b><br>
				</div>

				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state7" id="state7">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>


				<div class="form-holder">
					<b>Saya mengerti tentang proses pengelupasan, dan warna akan pudar seiringnya waktu karenaregenerasi kulit, dan saya harus menjaga warnanya dengan cara melakukan retouch setelah 1 bulan *</b><br>
					<p id="alertNotifa8"></p>
				</div>

				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state8" id="state8">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>

				<div class="form-holder">
					<b>Saya mengerti bahwa harga sulam alis yang saya pilih *</b><br>
					<p id="alertNotifa9"></p>
				</div>

				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state9" id="state9">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
					<br>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state10" id="state10">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>

				<div class="form-holder">
					<b>Saya mengerti dengan tidak adanya sistem refund (kembali uang), dengan alasan apa pun. *</b><br>
					<p id="alertNotifa11"></p>
				</div>

				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state11" id="state11">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>

				<div class="form-holder">
					<p id="alertNotifa12"></p>
					<b>Saya mengerti Rainbrow menyediakan jasa seni kecantikan sulam, tidak ada tindak medis *</b><br>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state12" id="state12">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>


				<div class="form-holder">
					<b>Saya mengerti resiko dan komplikasi, dan saya akan sepenuhnya bertanggung jawab atas resikoyang mungkin terjadi. *</b><br>
					<p id="alertNotifa13"></p>
				</div>

				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state13" id="state13">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>


				<div class="form-holder">
					<b>Saya mengerti, proses penyembuhan berbeda pada setiap orang, hilangnya pigment atau perubahanwarna adalah normal di minggu pertama. Saya harus bersikap tenang, tidak panik, dan melakukan retouchtidak lebih dari 3 bulan terhitung dari sesi sulam pertama. Untuk harga retouch adalah sama dengan hargabaru. Pada kasus tertentu pengerjaan membutuhkan lebih dari 2x retouch. *</b><br>
					<p id="alertNotifa14></p>
				</div>

				<div class=" row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state14" id="state14">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>

				<div class="form-holder">
					<b>Saya telah membaca dan memahami isi dari concent form. Saya mengerti dan memahami resiko yang mungkin terjadi dari proses sulam, saya tidak akan meyalahi pihak Rainbrow atas resiko yang mungkin terjadi, dan saya telah mendapat kesempatan untuk bertanya dan pertanyaan saya telah dijawab dengan jelas dan saya memberikan otorisasi kepada (isi pada kolom di bawah) untuk melakukan proses sulam kepada saya. *</b><br>
					<p id="alertNotifa15"></p>
				</div>

				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state15" id="state15">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>
				<div class="TulisanIni">
					<h5>CLIENT MEDICAL HISTORY FORM</h5>
				</div>
				<br>

				<b>Tanggal Lahir Dan Usia</b><br>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" class="form-control" id="client_tgl_lahir_usia" name="clienttgl_lahir_usia" placeholder="tanggal lahir dan usia">
				</div>
				<br>

				<b>Nama Lengkap</b><br>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" class="form-control" id="client_nama" name="client_nama" placeholder="Nama">
				</div>
				<br>

				<b>Alamat</b><br>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" class="form-control" id="client_alamat" name="client_alamat" placeholder="Alamat">
				</div>
				<br>

				<b>No Telp / WA</b><br>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="number" class="form-control" id="client_no_hp" name="client_no_hp" placeholder="No HP">
				</div>
				<br>

				<b>Email</b><br>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" class="form-control" id="client_email" name="client_email" placeholder="Email">
				</div>
				<br>

				<b>Ya / tidak Botox ( terakhir pada tanggal? ) *</b><br>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" class="form-control" id="client_botox" name="client_botox" placeholder="Jawaban">
				</div>

				<label for="idSpek">Diabetes*</label> <br>
				<br>
				<select id="client_diabetes" name="client_diabetes" class="form-control">
					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>
				<label for="idSpek">Hepatitis (A, B,C,D) *</label> <br>
				<br>
				<select id="client_hepatitis" name="client_hepatitis" class="form-control">
					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>

				<br>
				<label for="idSpek">Mudah berdarah*</label> <br>
				<br>
				<select id="client_mudah_berdarah" name="client_mudah_berdarah" class="form-control">
					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>

				<br>
				<label for="idSpek">kulit sensitif **</label> <br>
				<br>
				<select id="client_kulit_sensitif" name="client_kulit_sensitif" class="form-control">
					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>

				<br>
				<label for="idSpek">kulit berminyak *</label> <br>
				<br>
				<select id="client_kulit_berminyak" name="client_kulit_berminyak" class="form-control">
					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>
				<br>
				<label for="idSpek">melakukan chemical peeling *</label> <br>
				<br>
				<select id="client_chemical_peeling" name="client_chemical_peeling" class="form-control">
					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>
				<br>
				<label for="idSpek">hamil</label> <br>
				<br>
				<select id="client_hamil" name="client_hamil" class="form-control">
					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>
				<br>
				<label for="idSpek">meminum alkohol dalam 24 jam terakhir</label> <br>
				<br>
				<select id="client_alkohol" name="client_alkohol" class="form-control">
					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>

				<label for="idSpek">meminum aspirin/ibuprofen dalam 24 jam terakhir </label> <br>
				<br>
				<select id="client_aspirin" name="client_aspirin" class="form-control">
					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>
				<label for="idSpek">alergi metal</label> <br>
				<br>
				<select id="client_alergi_metal" name="client_alergi_metal" class="form-control">
					<option value="YA">Ya</option>
					<option value="TIDAK">Tidak</option>
				</select>
				<br>
				<br>
				<div class="form-holder">
					<p id="alertNotifa16"></p>
					<b>Saya memberikan keterangan diatas dengan benar dan jujur, atas sepengetahuan saya. Treatment yang akan diberikan Rainbrow berdasarkan dari informasi yang saya berikan. Dan saya mengerti Rainbrow hanya menyediakan jasa seni kecantikan, tidak terlibat dalam treatment medik.</b><br>
				</div>
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state16" id="state16">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>
				<hr>


				<div class="TulisanIni">
					<h5>AFTER CARE SULAM ALIS RAINBROW</h5>
				</div>
				<br>
				<p>
					<b> DAN MENURUTI ANJURAN AFTER CARE SETELAH SULAM ADALAH WAJIB, KARENA MENENTUKAN 70% KEBERHASILAN DAN MEMPERLAMA MASA HASIL SULAMAN</b> <br>

					* Pada hari pertama sulam, per dua jam sekali alis di beri sabun dan vitamin, dengan cara: <br>bersihkan alis
					dengan sabun khusus yang encer (jangan menggunakan sabun yang lain) secara perlahan dan hati-hati, jangan digosok keras, lalu splash dengan air sampai bersih (jangan di gosok), lalu keringkan dengan cara totol-
					totol , dengan tisue. Lalu berikan vitamin tipis-tipis menggunakan cotton bud.<br>

					* Pada hari ke 2 sampai hari ke 7 bersihkan dengan sabun dan peri vitamin, hanya 1 kali sehari di pagi hari.<br>

					* Mulai hari ke tiga akan ada proses pengelupasan, jangan mencabut, menggaruk, kulit kering yang mengelupas, biarkan kulit mengelupas dengan sendirinya.<br>

					* Jangan menggunakan makeup/ pensil alis pada alis sampai pengelupasaan selesai sempurna (kurang lebih 1 minggu)<br>
					* Selalu mencuci tangan sebelum melakukan after care.<br>

					* Jangan melakukan aktifitas yang membuat keringat keluar banyak<br>

					* Jangan berenang paling tidak sampai seminggu setelah sulam<br>

					* Setelah proses pengelupasan selesai sempurna, boleh menggunakan make up pada alis.<br>

					* Hindari terik matahari langsung pada alis, menghindari sulaman cepat pudar, boleh menggunakan sun block
					untuk melindungi warna nya.<br>

					* Hindari penggunaan skin care yang dapat mengakibatkan pengelupasan di area yang disulam.<br>

					* TIDAK MENAATI TATA CARA AFTER CARE DAPAT MENYEBABKAN, TINTA HILANG, INFEKSI, DAN WARNA
					TIDAK RATA.<br>

					* Bila ada pertanyaan / konsultasi setelah sulam silahkan hub kontak after care Rainbrow di 085719221738<br>

					NORMAL BILA:<br>
					- Gatal: normal, karena proses pengelupasan, jangan digaruk<br>
					- Terlalu gelap/ rontok: setelah sulam pasti kalau mau mengelupas, timta tampak lebih gelap, setelah kelupas
					nanti warna lebih soft dan natural<br>
					- Warna berubah/ warna hilang: selama proses penyembuhan, adalah normal bila warna jadi sangat terang/
					samar, tapi seiringnya waktu, warna akan semakin terlihat. Hasil sulam terlihat di minggu ke 4.<br>
					- Butuh retouch, ada sebagian jenis kulit yang kebanyakan membutuhkan retouch, seperti kulit berminya, kulit<br>
					sensitif. Karena kulit jenis ini tidak mudak menerima tinta. Retouch dilakukan minimal 1 bulan dan max 3
					bulan. Tidak boleh melakukan sulam ulang dibawah 1 bulan. Untuk hasil terus bagus, disarankan melakuan
					sulam ulang setiap 6 bulan.

				</p>


				<br>
				<div class="form-holder">
					<p id="alertNotifa17"></p>
					<b>Saya membaca, mengerti dan setuju malakukan instruksi diatas. *</b><br>
				</div>


				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state17" id="state17">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>
				<hr>

				<br>
				<div class="form-holder">
					<p id="alertNotifa18"></p>
					<b>Saya Memahami dan Setuju seisi formulir ini *</b><br>
				</div>

				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="state18" id="state18">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Ceklist Disini
							</label>
						</div>
					</div>
				</div><br>
				<hr>
				<div class="TulisanIni">
					<h5>AFTER CARE SULAM ALIS RAINBROW</h5>
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
				var a1 = $('#membacasetuju').is(":checked");
				var a2 = $('#state1').is(":checked");
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
				var a14 = $('#state14').is(":checked");
				var a15 = $('#state15').is(":checked");
				var a16 = $('#state16').is(":checked");
				var a17 = $('#state17').is(":checked");
				var a18 = $('#state18').is(":checked");

				var i1 = $('#nama').val();
				var i2 = $('#tanggal_lahir').val();
				var i3 = $('#client_nama').val();
				var i4 = $('#client_alamat').val();
				var i6 = $('#client_no_hp').val();
				var i7 = $('#client_email').val();
				var i8 = $('#after_care_nama_art').val();
				var i9 = $('#after_care_nama_store').val();

				if (
					!a1 || !a2 || !a3 || !a4 || !a5 || !a6 || !a7 || !a8 || !a12 || !a11 || !a9 || !a13 || !a14 || !a15 || !a16 || !a17 || !a18 ||
					!i1 || !i2 || !i3 ||
					!i4 || !i6 ||
					!i7 || !i8 || !i9
				) {
					Swal.fire({
						icon: 'error',
						title: 'Mohon Isi Semua Data...',
						text: 'Anda Di Mohon Isi Semua Data',
					})
				} else if ($('#state2').val() == null) {
					Swal.fire({
						icon: 'error',
						title: 'Mohon Pilih Tipe Sulam Dan Harga...',
						text: 'Anda Di Mohon Isi Semua Data',
					})
				} else {
					$("#formRegister").trigger('submit');
					return false;
				}
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
						html = '<option value="0" selected disabled>Silahkan Pilih </option>';
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
						setInterval(() => {
							window.location.href = bu + 'user/indexb';

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

			$('#MyModal').modal('show');
			console.log("s")
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
