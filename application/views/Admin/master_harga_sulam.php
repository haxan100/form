<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Simple Table</h4>
						<p class="card-category"> Here is a subtitle for this table</p>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="dataTable" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Srvice</th>
										<th>Harga</th>
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

<script src="<?= base_url() ?>templates/MatAdmin/js/plugins/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		console.log("s")
		var bu = '<?= base_url() ?>';
		// $('#modalProduk').modal('show');
		var url_form_ubah = bu + 'admin/editFotoSur';

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
					"targets": 0,
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
				url: '<?= base_url('admin/getAllDataHargaSulam'); ?>',
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
					notifikasi('#alertNotif', e.message, false);
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
		$('body').on('click', '.btnHapus', function() {
			var id_foto = $(this).data('id_foto');
			Swal.fire({
				title: 'Are you sure?',
				text: "Hapus Data Survey Foto Ini",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {

					$.ajax({
						type: "post",
						url: '<?= base_url('admin/hapusDataSurveyFoto'); ?>',
						data: {
							id_foto,
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
			var id_foto = $(this).data('id_foto');
			var id_survey = $(this).data('id_survey');
			var nama_user = $(this).data('nama_user');
			$('#nama_user').val(nama_user);
			$('#id_foto').val(id_foto);
			$('#id_survey').val(id_survey);
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
