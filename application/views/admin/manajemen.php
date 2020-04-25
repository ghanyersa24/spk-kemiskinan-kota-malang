<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper" style="padding-top:0px;">

			<?php $this->load->view("admin/_partials/navbar.php") ?>

			<div class="container-fluid" style="padding-top: 20px; background-color: #ecf0f5; padding-bottom: 200px; ">

				<h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">Manajemen User</h5>
				<div class="form-inline" style="margin-bottom:20px; margin-top:20px;">
					<div class="col-md-6" style="padding: 0px; color: #555555! important;">
						<button class="btn btn-warning" data-toggle="modal" data-target="#add"><i class="fa fa-plus-circle"></i> Tambah Data</button>
					</div>
				</div>
				<div class="card mb-3">
					<!-- Voting -->
					<div class="card-header d-flex justify-content-between">
						<span>
							<i class="fa fa-calculator" aria-hidden="true"></i>
							Manajemen User
						</span>
					</div>

					<div class="card-body" id="card-VT" style="display: block">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nomor</th>
										<th>Peran</th>
										<th>Hak Akese</th>
										<th>Aksi</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
				<div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add-title" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="add-title">Tambah Pengguna</h5>
								<button class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" id="form-add">
									<div class="form-group">
										<label for="add-username">Username</label>
										<input id="add-username" class="form-control" type="text" name="username">
									</div>
									<div class="form-group">
										<label for="add-password">Password</label>
										<input id="add-password" class="form-control" type="password" name="password">
									</div>
									<div class="form-group">
										<label for="add-password_confirmation">Password Konfirmasi</label>
										<input id="add-password_confirmation" class="form-control" type="password" name="password_confirmation">
									</div>
									<div class="form-group">
										<label for="add-role">Jabatan</label>
										<select class="custom-select" id="add-role" name="role">
											<option selected disabled>Pilih salah satu</option>
											<option value="admin">Admin</option>
											<option value="dinas sosial">Dinas Sosial</option>
											<option value="kecamatan">Kecamatan</option>
											<option value="kelurahan">Kelurahan</option>
										</select>
									</div>
							</div>
							</form>
							<div class="modal-footer">
								<button class="btn btn-default" type="button" data-dismiss="modal">Batal</button>
								<button class="btn btn-primary" type="button" id="btn-add">Tambah</button>
							</div>
						</div>
					</div>
				</div>
				<div id="view" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="view-title" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="view-title">Ubah Pengguna</h5>
								<button class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" id="form-view">
									<input id="view-id" class="form-control" type="number" name="id" hidden readonly>
									<div class="form-group">
										<label for="view-username">Username</label>
										<input id="view-username" class="form-control" type="text" name="username">
									</div>
									<div class="form-group">
										<label for="view-role">Jabatan</label>
										<select class="custom-select" id="view-role" name="role">
											<option selected disabled>Pilih salah satu</option>
											<option value="admin">Admin</option>
											<option value="dinas sosial">Dinas Sosial</option>
											<option value="kecamatan">Kecamatan</option>
											<option value="kelurahan">Kelurahan</option>
										</select>
									</div>
							</div>
							</form>
							<div class="modal-footer">
								<button class="btn btn-default" type="button" data-dismiss="modal">Batal</button>
								<button class="btn btn-primary" type="button" id="btn-view">Tambah</button>
							</div>
						</div>
					</div>
				</div>
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
			$("#btn-add").click(function(e) {
				$.ajax({
					"type": "POST",
					"url": api + 'account/register',
					"data": $('#form-add').serialize(),
					"success": function(res) {
						if (!res.error) {
							Swal.fire({
								title: 'Berhasil!',
								text: res.message,
								icon: 'success',
							})
							$('#dataTable').dataTable().api().ajax.reload()
							$('#add').modal('hide')
						} else {
							Swal.fire({
								title: 'Error!',
								text: res.message,
								icon: 'error',
							})
						}

					}
				});
			})
			$('#dataTable').dataTable({
				ajax: api + 'actor/users/get',
				columns: [{
						"render": function(data, type, row, meta) {
							return meta.row + meta.settings._iDisplayStart + 1;
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.username
						}
					},
					{
						"render": function(data, type, row) {
							return row.role
						}
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
			})
			$('#dataTable tbody').on('click', 'a.btn-edit', function() {
				var data = $('#dataTable').DataTable().row($(this).parents('tr')).data()
				for (key in data) {
					$('#view-' + key).val(data[key])
				}
				$('#view').modal('show')
			});
			// click button delete datatable
			$('#dataTable tbody').on('click', 'a.btn-delete', function() {
				var data = $('#dataTable').DataTable().row($(this).parents('tr')).data();
				Swal.fire({
					title: 'Apakah kamu yakin?',
					text: `Menghapus data ${data.username} ini secara permanen?`,
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
							url: api + "actor/users/delete",
							data: {
								id: data.id
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

			let is_vt_open = true //Voting
			$('#btn-minimize-VT').click(function() {
				$('#card-VT').toggle('fast')
				if (is_vt_open) {
					$('#icon-VT').removeClass('fa fa-minus');
					$('#icon-VT').addClass('fa fa-plus');
					is_vt_open = false
				} else {
					$('#icon-VT').removeClass('fa fa-plus');
					$('#icon-VT').addClass('fa fa-minus');
					is_vt_open = true
				}
			});
		</script>
</body>

</html>
