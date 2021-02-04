<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<!-- <button type="button" id="btnTambah" class="btn btn-primary">Tambah</button> -->
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Master Survey EYELASH EXTENSION</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="dataTable" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Custumer</th>
										<th>Nomor Service</th>
										<th>No Phone</th>
										<th>Alergi Lem</th>
										<th>Pengobatan Teroid</th>
										<th>Operasi Plastik</th>
										<th>Kemoterapi</th>
										<th>Memakai Softlens</th>
										<th>Kulit Berminyak</th>
										<th>Name ART</th>
										<th>Store</th>
										<th>Foto Art</th>
										<th style="width: 100px;">Aksi</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lblTambah">Tambah</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="form">
					<input type="hidden" name="idservice" id="idservice">
					<div class="form-group">
						<label for="NamaService">Nama Service</label>
						<input type="text" class="form-control" id="nama_service" name="nama_service" aria-describedby="emailHelp" placeholder="Masukan Nama Service">
					</div>
					<div class="form-group">
						<label for="Harga">Harga</label>
						<input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" id="btnTambahPRO" class="btn btn-primary">Save changes</button>
				<button id="btnUbah" class="btn btn-info"><i class="fa fa-pencil-square-o"></i> Ubah</button>

			</div>
		</div>
	</div>
	</form>
</div>

<script src="<?= base_url() ?>templates/MatAdmin/js/plugins/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		var bu = '<?= base_url() ?>';
		var url_form = bu + 'Admin/tambah_harga_sulam';
		var url_form_ubah = bu + 'admin/edit_user'
		// $('#modalProduk').modal('show');
		var url_form_ubah = bu + 'admin/editFotoSur';

		$('#btnTambah').on('click', function() {
			url_form = url_form;
			$('.modalProdukTitleTambah').show();
			$('.modalProdukTitleDetail').hide();
			$('.modalProdukTitleUbah').hide();
			$('#modalProduk').modal('show')
			$('#btnTambah').show();
			$('#btnUbah').hide();
			$('#btnCopy').hide();
			$('#btnTampil').hide();
			$('.modalFotoUbah').hide();
			$('#foto_wrapper').html('');

			$('#btnTambah').show();
			$('#btnUbah').hide();
			$('#labelEdit').hide();
			$('#labelTambah').show();
			// $('input').val('');
		});

		function CekNama() {
			var nama_service = $('#nama_service').val();
			if (nama_service == '') {
				validasi('#nama_service', false, 'Silahkan isi Nama Service');
				return false;
			} else {
				validasi('#nama_service', true);
				return true;
			}
		}

		function CekHarga() {
			var harga = $('#harga').val();
			if (harga == '') {
				validasi('#harga', false, 'Silahkan isi Harga');
				return false;
			} else {
				validasi('#harga', true);
				return true;
			}
		}

		$('#btnTambahPRO').on('click', function() {
			console.log('_nama, _harga')

			var _nama = CekNama();
			var _harga = CekHarga();
			console.log(_nama, _harga)
			if (
				_nama && _harga
			) {
				$("#form").submit();
			}
			return false;
			$('#modalProduk').modal('hide');
			datatable.ajax.reload();

		});

		function resetForm() {
			// console.log('reset');
			$('#alertNotifModal').html('');
			$('#form').trigger('reset');
			// validasi('#idTipeProduk', true);

		}
		var datatable = $('#dataTable').DataTable({
			'lengthMenu': [
				[5, 10, 25, 50, -1],
				[5, 10, 25, 50, 'All']
			],
			'pageLength': 10,
			"processing": true,
			"serverSide": true,

			"language": {
				processing: '....loading<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>loading....<span class="sr-only">Loading...</span> '
			},

			"columnDefs": [{
					"targets": [
						1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
					],
					"className": "dt-body-center dt-head-center",
					"width": "20px",
					"orderable": false,
				},
				{
					"targets": 1,
					"className": "dt-head-center"
				},
				{
					"targets": 2,
					"className": "dt-body-center dt-head-center"
				},
			],
			"order": [
				[1, "asc"]
			],
			'ajax': {
				url: '<?= base_url('admin/getAllDataSurveyEyelish'); ?>',
				type: 'POST',
				"data": function(d) {
					d.tipe = $('#Tipe').children('option:selected').val();
					return d;
				},
				"orderable": false,
			},
		});

		function notifikasiModal(modal, sel, msg, err) {
			var alert_type = 'alert-success ';
			if (err) alert_type = 'alert-danger ';
			var html = '<div class="alert ' + alert_type + ' alert-dismissible show p-4">' + msg + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			$(sel).html(html);
			$(modal).animate({
				scrollTop: $(sel).offset().top - 75
			}, 500);
		}

		$("#form").submit(function(e) {
			$.ajax({
				url: url_form,
				method: 'post',
				dataType: 'json',
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				async: false,
			}).done(function(e) {
				// console.log(e)
				if (!e.error) {

					Swal.fire(
						'Berhasil..',
						e.message,
						'success'
					)


					// notifikasi('#alertNotif', e.message, false);
					$('#modalProduk').modal('hide');
					datatable.ajax.reload();
					resetForm();
				} else {
					notifikasiModal('#modalProduk', '#alertNotifModal', e.message, true);
					$.each(e.errorInputs, function(key, val) {
						// console.log(val[0], val[1]);
						validasi(val[0], false, val[1]);
						$(val[0])
							.parent()
							.find('.input-group-text')
							.addClass('form-control is-invalid');
					});
				}

			}).fail(function(e) {

				$('#modalProduk').modal('hide');
				datatable.ajax.reload();
				resetForm();
			});
			return false;
		});

		function validasi(id, valid, message = '') {
			if (valid) {
				$(id)
					// .addClass('is-valid')
					.removeClass('is-invalid')
					.parent()
					.find('small')
					// .addClass('valid-feedback')
					.removeClass('invalid-feedback')
					.html(message);
			} else {
				$(id)
					// .removeClass('is-valid')
					.addClass('is-invalid')
					.parent()
					.find('small')
					// .removeClass('valid-feedback')
					.addClass('invalid-feedback')
					.html(message);
			}
		}
		$('body').on('click', '.btnPrint', function() {

			var ID = $(this).data('id_survey_eyelash');
			window.location.href = bu + 'Pdfview/getPrinDua?id=' + ID;
		})

		$('body').on('click', '.btnHapus', function() {
			var IDService = $(this).data('id_survey_eyelash');
			Swal.fire({
				title: 'Are you sure?',
				text: "Hapus Data Ini",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {

					$.ajax({
						type: "post",
						url: '<?= base_url('admin/hapusDataSurveyEyelish'); ?>',
						data: {
							IDService,
						},
						dataType: "json",
						success: function(e) {

							if (!e.status) {
								Swal.fire(
									'Error!',
									e.message,
									'warning'
								)
							} else {
								Swal.fire(
									'Deleted!',
									e.message,
									'success'
								)
							}
							datatable.ajax.reload();

						}
					});

					// Swal.fire(
					// 	'Deleted!',
					// 	'Your file has been deleted.',
					// 	'success'
					// )

				}
			});

		});

		$('body').on('click', '.btnEditAdmin', function() {
			$('#modalProduk').modal('show');
			$('#btnTambah').hide();
			$('#btnUbah').show();
			$('#labelEdit').show();
			$('#labelTambah').hide();

			var idservice = $(this).data('idservice');
			var servicename = $(this).data('servicename');
			var price = $(this).data('price');
			$('#idservice').val(idservice);
			$('#nama_service').val(servicename);
			$('#harga').val(price);
		});
		$('#btnUbah').click(function(e) {
			url_form = url_form_ubah;

			$('small.text-danger').html('');
			var id_foto = $('#id_foto').val();
			var foto = $('#foto').val();

			if (id_foto == '') {
				$('*[for="inputMerek"] > small').html('Harap isi Merk!');
				alert("maaf, coba lagi (#ef01)")
				return false;
			} else if (foto == '') {
				$('*[for="inputModel"] > small').html('Harap isi !');
				alert("maaf, coba lagi (#ef02)")
				return false;
			} else {
				$("#form").submit();
				return false;
			}
		});

	});
</script>
