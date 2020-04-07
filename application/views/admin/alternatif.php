<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
	<style>
		td a i {
			color: #555555;
			margin: 0px 5px;
		}
	</style>
</head>

<body id="page-top">

	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper" style="padding-top:0px;">

			<?php $this->load->view("admin/_partials/navbar.php") ?>

			<div class="container-fluid" style="padding-top: 20px; background-color: #ecf0f5; padding-bottom: 20px;">

				<h5 style="margin-bottom : 3px;">Data Alternatif Kemiskinan <small> Dinas Sosial Kota Malang </small> </h5>

				<div class="form-inline" style="margin-bottom:20px; margin-top:20px;">
					<div class="col-md-6" style="padding: 0px; color: #555555! important;">
						<a href="<?php echo site_url('admin/form') ?>" class="btn_a_style"> <button class="btn btn-warning"><i class="fa fa-plus-circle"></i> Tambah Data</button></a>
					</div>
					<select class="form-control col-md-2" style="margin-right:10px;">
						<option value="">Semua Jenis</option>
						<option value="">Perorangan</option>
						<option value="">Keluarga</option>
					</select>
					<input type="text" id="view-search" name="search" placeholder="Search" class="form-control col-md-3">
				</div>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header" style="padding : 0rem !important;"></div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nomor</th>
										<th>Jenis</th>
										<th>Nama Penerima</th>
										<th>Alamat</th>
										<th>Tanggal Survey</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th></th>
										<th class="table_search"></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div>


				<!-- Modal perorangan-->
				<?php
				$this->load->view('admin/modal_form/perorangan');
				?>

				<!-- modal  keluarga-->
				<?php
				$this->load->view('admin/modal_form/keluarga');
				?>


			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->



	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
	<script>
		$("#btn-perorangan").click(function(e) {
			$.ajax({
				"type": "POST",
				"url": api + 'formulir/update',
				"data": $('#form-perorangan').serialize(),
				"success": function(response) {
					if (!response.error) {
						Swal.fire({
							title: 'Success!',
							text: response.message,
							icon: 'success',
						});
						$('#view-perorangan').modal('hide')
						$('#dataTable').dataTable().api().ajax.reload();
					} else {
						Swal.fire({
							title: 'Error!',
							text: response.message,
							icon: 'error',
						});
					}
				}
			});
		});
		$("#btn-keluarga").click(function(e) {
			$.ajax({
				"type": "POST",
				"url": api + 'formulir/update',
				"data": $('#form-keluarga').serialize(),
				"success": function(response) {
					if (!response.error) {
						Swal.fire({
							title: 'Success!',
							text: response.message,
							icon: 'success',
						});
						$('#view1-keluarga').modal('hide')
						$('#dataTable').dataTable().api().ajax.reload();
					} else {
						Swal.fire({
							title: 'Error!',
							text: response.message,
							icon: 'error',
						});
					}
				}
			});
		});
		$(document).ready(function() {
			$('#dataTable').DataTable({
				ajax: api + 'formulir/get',
				"footerCallback": function(row, data, start, end, display) {
					var all = data.length;
					var valid = 0;
					data.forEach(element => {
						if (element.status == 'tervalidasi')
							++valid;
					});
					$('#persentase').html(`${parseInt (valid/all *100)} %`);
				},
				columns: [{
						"render": function(data, type, row, meta) {
							return meta.row + meta.settings._iDisplayStart + 1;
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.IdJenisPenerima == "1" ? "Perorangan" : "Keluarga";
						}
					},
					{
						"render": function(data, type, row) {
							return row.IdJenisPenerima == "1" ? row.NamaPerorangan : row.NamaKeluarga;
						}
					},
					{
						"render": function(data, type, row) {
							return row.IdJenisPenerima == "1" ? row.AlamatPerorangan : row.AlamatKeluarga;
						}
					},
					{
						"data": "TglPemeriksa"
					},
					{
						"render": function(data, type, row) { // Tampilkan kolom aksi
							var html =
								'<a class="hovercursor btn-edit mr-3">' +
								'<i class="fa fa-pencil "></i>' +
								'</a>' +
								'<a class="hovercursor btn-delete">' +
								'<i class="fa fa-trash"></i>' +
								'</a>';
							return html
						}
					}
				]
			});

			// pencarian
			var table = $('#dataTable').DataTable();
			table.columns().every(function() {
				var that = this;
				$('input', this.footer()).on('keyup change clear', function() {
					if (that.search() !== this.value) {
						that
							.search(this.value)
							.draw();
					}
				});
			});

			// click button view datatable
			$('#dataTable tbody').on('click', 'a.btn-edit', function() {
				var data = table.row($(this).parents('tr')).data();
				$.ajax({
					type: "POST",
					url: api + "formulir/get/" + data.id_survey,
					data: {
						id_jenis: data.IdJenisPenerima
					},
					dataType: "json",
					success: function(response) {
						if (!response.error) {
							if (data.IdJenisPenerima == 1)
								ajax_peroangan(response)
							else
								ajax_keluarga(response)
						} else {
							Swal.fire({
								title: 'Error!',
								text: response.message,
								icon: 'error',
							})
						}
					}
				});
			});


			$('#dataTable tbody').on('click', 'a.btn-delete', function() {
				var data = table.row($(this).parents('tr')).data();
				Swal.fire({
					title: 'Apakah kamu yakin?',
					text: `Menghapus data ${data.IdJenisPenerima == "1" ? data.NamaPerorangan : data.NamaKeluarga} ini secara permanen?`,
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#FAAAAA',
					cancelButtonColor: '#AAA',
					focusCancel: true,
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							type: "POST",
							url: api + "formulir/delete",
							data: {
								id_Survey: data.id_survey
							},
							dataType: "json",
							success: function(response) {
								if (!response.error) {
									Swal.fire({
										title: 'Success!',
										text: response.message,
										icon: 'success',
									});
									$('#dataTable').dataTable().api().ajax.reload();
								} else {
									Swal.fire({
										title: 'Error!',
										text: response.message,
										icon: 'error',
									});
								}
							}
						});
					}
				})
			});
		});

		// ajax perorangan
		function ajax_peroangan(response) {
			let res = response.data
			for (key in res) {
				$('#view-' + key).val(res[key])
			}
			var data_identitas = `${res.adaAktaKelahiran},${res.adaKartuPelajar},${res.adaKTP},${res.adaSIM }`;
			let identitas = []
			$.each(data_identitas.split(","), function(i, e) {
				if (e == 1)
					identitas[i] = i + 1
			});
			$("#view-ada-kartu-identitas").val(identitas);
			$("#view-ada-kartu-identitas").select2({
				tags: true,
				tokenSeparators: identitas
			})
			$('#view-perorangan').modal('show')
		}
		// ajax keluarga
		function ajax_keluarga(response) {
			let res = response.data
			for (key in res) {
				$('#view1-' + key).val(res[key])
			}
			var data_program = res.program
			let program = []
			let m = 0
			$.each(data_program.split(","), function(i, e) {
				if (i != 0 && i < 10)
					if (e == 1)
						program[m++] = i
			});
			$("#view1-program").val(program);
			$("#view1-program").select2({
				tags: true,
				tokenSeparators: program
			})
			var data_assetbergerak = res.assetbergerak
			let assetbergerak = []
			let n = 0
			$.each(data_assetbergerak.split(","), function(i, e) {
				if (i != 0 && i < 10)
					if (e == 1)
						assetbergerak[n++] = i
			});
			$("#view1-ada-asset").val(assetbergerak);
			$("#view1-ada-asset").select2({
				tags: true,
				tokenSeparators: assetbergerak
			})
			$('#view1-keluarga').modal('show')
		}
	</script>

</body>

</html>
