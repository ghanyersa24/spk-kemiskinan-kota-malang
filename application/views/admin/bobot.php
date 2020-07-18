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

			<div class="container-fluid" style="padding-top: 20px; background-color: #ecf0f5; ">

				<h5 style="margin-bottom : 3px;" class="d-flex justify-content-between"><span>Data Kriteria Kemiskinan <small> Dinas Sosial Kota Malang </small></span>
					<select class="form-control col-md-2" style="margin-right:10px;" id="select-type">
						<option value="individu">Individu</option>
						<option selected value="keluarga">Keluarga</option>
					</select>
				</h5>
				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header" style="padding : 0rem !important;"></div>
					<div class="card-body">
						<div class="table-responsive">
							<table style="margin-top : 40px;" class="table table-bordered" id="tableBobotIndikator" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th width="10%">Nomor</th>
										<th width="45%">Jenis Indikator</th>
										<th width="30%">Bobot Indikator</th>
										<th width="15%">Aksi</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th></th>
										<th></th>
										<th id="total-indikator"></th>
										<th></th>
									</tr>
								</tfoot>
							</table>
						</div>
						<span class="d-none" id="bobot_indikator"></span>
						<span id="display-indikator" style="display: none;">selisih bobot indikator saat ini <span id="selisih-bobot_indikator"></span></span>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<div id="view-kriteria" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="left: 0">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modal-title">Detail <span id="nama-kriteria"></span></h5>
					<button class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table style="margin-top : 40px;" class="table table-bordered" id="table-kriteria" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th width="10%">Nomor</th>
									<th width="45%">Jenis Kriteria</th>
									<th width="30%">Bobot Kriteria</th>
									<th width="15%">Aksi</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th></th>
									<th></th>
									<th id="total-kriteria"></th>
									<th></th>
								</tr>
							</tfoot>
						</table>
					</div>
					<span class="d-none" id="bobot_kriteria"></span>
					<span id="display-kriteria" style="display: none;">selisih bobot kriteria saat ini <span id="selisih-bobot_kriteria"></span></span>
				</div>
				<!-- <div class="modal-footer">
					<button class="btn btn-primary" type="button">Text</button>
				</div> -->
			</div>
		</div>
	</div>

	<div id="view-sub" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="left: 0">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modal-title">Detail <span id="nama-sub"></span></h5>
					<button class="close" aria-label="Close" onclick="close_sub()">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table style="margin-top : 40px;" class="table table-sub" id="table-sub" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th width="10%">Nomor</th>
									<th width="45%">Jenis Sub Kriteria</th>
									<th width="30%">Bobot Sub Kriteria</th>
									<th width="15%">Aksi</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th></th>
									<th></th>
									<th id="total-sub"></th>
									<th></th>
								</tr>
							</tfoot>
						</table>
					</div>
					<span class="d-none" id="bobot_sub"></span>
					<span id="display-sub" style="display: none;">selisih bobot sub kriteria saat ini <span id="selisih-bobot_sub"></span></span>
				</div>
				<!-- <div class="modal-footer">
					<button class="btn btn-primary" type="button">Text</button>
				</div> -->
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" id="edit-indikator">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Ubah Nilai Indikator</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="edit-name_indikator">Indikator</label>
						<input id="edit-id_indikator" class="form-control" type="text" name="id" hidden readonly>
						<input id="edit-name_indikator" class="form-control" type="text" name="indikator" readonly>
					</div>
					<div class="form-group">
						<label for="edit-bobot_indicator">Persentase</label>
						<input id="edit-bobot_indikator" class="form-control" type="number" name="bobot_indikator">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="saveIndikator()">Simpan Perubahan</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" role="dialog" id="edit-kriteria">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Ubah Nilai Kriteria</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="edit-kriteria">Kriteria</label>
						<input id="edit-id_kriteria" class="form-control" type="text" name="id" hidden readonly>
						<input id="edit-name_kriteria" class="form-control" type="text" name="indikator" readonly>
					</div>
					<div class="form-group">
						<label for="edit-bobot_kriteria">Persentase</label>
						<input id="edit-bobot_kriteria" class="form-control" type="number" name="bobot_indikator">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="saveKriteria()">Simpan Perubahan</button>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" tabindex="-1" role="dialog" id="edit-sub">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Ubah Nilai Sub Kriteria</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="edit-sub_kriteria">Sub Kriteria</label>
						<input id="edit-id_sub_kriteria" class="form-control" type="text" name="id" hidden readonly>
						<input id="edit-name_sub_kriteria" class="form-control" type="text" name="indikator" readonly>
					</div>
					<div class="form-group">
						<label for="edit-bobot_sub_kriteria">Persentase</label>
						<input id="edit-bobot_sub_kriteria" class="form-control" type="number" name="bobot_indikator">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="saveSub()">Simpan Perubahan</button>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>

<script type="text/javascript">
	let kriteria, persentaseIndikator = 0,
		persentaseKriteria = 0,
		type = 'keluarga'

	function ajax_individu(callback) {
		$.ajax({
			type: 'GET',
			url: api + 'bobot/get/individu',
			success: function(res) {
				response = res
				callback(res.data)
			}
		});
	}

	function ajax_keluarga(callback) {
		$.ajax({
			type: 'GET',
			url: api + 'bobot/get/keluarga',
			success: function(res) {
				response = res
				callback(res.data)
			}
		});
	}
	$('#select-type').change(function() {
		if ($('#select-type').val() == 'keluarga') {
			type = 'keluarga'
			ajax_keluarga(render)
		} else {
			type = 'individu'
			ajax_individu(render)
		}
	});

	function refresh() {
		if ($('#select-type').val() == 'keluarga') {
			type = 'keluarga'
			ajax_keluarga(render)
		} else {
			type = 'individu'
			ajax_individu(render)
		}
	}

	function render(source) {
		$('#tableBobotIndikator').DataTable().destroy()
		$('#tableBobotIndikator').DataTable({
			data: source,
			bPaginate: false,
			bLengthChange: false,
			bFilter: false,
			bInfo: false,
			footerCallback: function(row, data, start, end, display) {
				var indikator = 0;
				data.forEach(element => {
					indikator += parseFloat(element.bobot_indikator)
				});
				let print
				if (indikator == 100) {
					$('#display-indikator').hide()
					$('#bobot-indikator').text(indikator + ' %')
					print = `<span> ${indikator} %</span>`
				} else {
					$('#display-indikator').show()
					$('#bobot_indikator').text(indikator + ' %')
					$('#selisih-bobot_indikator').text((100 - indikator) + ' %')
					print = `<span class = "text-danger"> ${indikator} %</span>`
				}
				$('#total-indikator').html(print);
			},
			columns: [{
					"render": function(data, type, row, meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					},
					className: "text-center"
				},
				{
					"render": function(data, type, row) {
						return row.indikator;
					}
				},
				{
					"render": function(data, type, row) {
						return row.bobot_indikator + ' %';
					}
				},
				{
					"render": function(data, type, row) {
						var html =
							'<i class="fa fa-pencil btn-edit mr-3 hovercursor"></i>' +
							'<a class="hovercursor btn-view mr-3">' +
							'<i class="fa fa-eye "></i>' +
							'</a>';
						return html
					},
					className: "text-center"
				}
			]
		});
	}
	$(document).ready(function() {
		$('#tableBobotIndikator').DataTable({
			ajax: api + `bobot/get/${type}`,
			bPaginate: false,
			bLengthChange: false,
			bFilter: false,
			bInfo: false,
			footerCallback: function(row, data, start, end, display) {
				var indikator = 0;
				data.forEach(element => {
					indikator += parseFloat(element.bobot_indikator)
				});
				let print
				if (indikator == 100) {
					$('#display-indikator').hide()
					$('#bobot-indikator').text(indikator + ' %')
					print = `<span> ${indikator} %</span>`
				} else {
					$('#display-indikator').show()
					$('#bobot_indikator').text(indikator + ' %')
					$('#selisih-bobot_indikator').text((100 - indikator) + ' %')
					print = `<span class = "text-danger"> ${indikator} %</span>`
				}
				$('#total-indikator').html(print);
			},
			columns: [{
					"render": function(data, type, row, meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					},
					className: "text-center"
				},
				{
					"render": function(data, type, row) {
						return row.indikator;
					}
				},
				{
					"render": function(data, type, row) {
						return row.bobot_indikator + ' %';
					}
				},
				{
					"render": function(data, type, row) {
						var html =
							'<i class="fa fa-pencil btn-edit mr-3 hovercursor"></i>' +
							'<a class="hovercursor btn-view mr-3">' +
							'<i class="fa fa-eye "></i>' +
							'</a>';
						return html
					},
					className: "text-center"
				}
			]
		});

		$('#tableBobotIndikator tbody').on('click', 'a.btn-view', function() {
			var data = $('#tableBobotIndikator').DataTable().row($(this).parents('tr')).data()
			kriteria = data.kriteria
			persentaseIndikator = parseFloat(data.bobot_indikator).toFixed(4)
			$('#nama-kriteria').text(data.indikator)
			$('#view-kriteria').modal('show')
			$('#table-kriteria').DataTable().destroy()
			$('#table-kriteria').DataTable({
				data: data.kriteria,
				footerCallback: function(row, data, start, end, display) {
					var total = 0;
					data.forEach(element => {
						total += element.bobot_kriteria
					});
					total = total.toFixed(4)
					let print
					if (total == persentaseIndikator) {
						$('#display-kriteria').hide()
						$('#bobot-kriteria').text(total + ' %')
						print = `<span> ${total} %</span>`
					} else {
						$('#display-kriteria').show()
						$('#bobot_kriteria').text(total + ' %')
						$('#selisih-bobot_kriteria').text((persentaseIndikator - total) + ' %')
						print = `<span class = "text-danger"> ${total} %</span>`
					}
					$('#total-kriteria').html(print);
				},
				bPaginate: false,
				bLengthChange: false,
				bFilter: false,
				bInfo: false,
				bAutoWidth: false,
				columns: [{
						"render": function(data, type, row, meta) {
							return meta.row + meta.settings._iDisplayStart + 1;
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.kriteria;
						}
					},
					{
						"render": function(data, type, row) {
							return row.bobot_kriteria + ' %';
						}
					},
					{
						"render": function(data, type, row, meta) {
							var html =
								`<i class="fa fa-pencil btn-edit mr-3 hovercursor"></i>
								<a class="hovercursor btn-view mr-3">
								<i class="fa fa-eye "></i>
								</a>`;
							return html
						},
						className: "text-center"
					}
				]
			})
		});

		$('#tableBobotIndikator tbody').on('click', '.btn-edit', function() {
			let data = $('#tableBobotIndikator').DataTable().row($(this).parents('tr')).data()
			$('#edit-name_indikator').val(data.indikator)
			$('#edit-id_indikator').val(data.id)
			$('#edit-bobot_indikator').val(data.bobot_indikator)
			$('#edit-indikator').modal('show')
		});

		$('#table-kriteria').on('click', '.btn-view', function() {
			let data = $('#table-kriteria').DataTable().row($(this).parents('tr')).data()
			persentaseKriteria = parseFloat(data.bobot_kriteria).toFixed(4)
			$('#nama-sub').text(data.kriteria)
			$('#view-sub').modal('show')
			$('#view-kriteria').modal('hide')
			$('#table-sub').DataTable().destroy()
			$('#table-sub').DataTable({
				data: data.sub_kriteria,
				footerCallback: function(row, data, start, end, display) {
					var total = 0;
					data.forEach(element => {
						total += element.bobot_sub
					});
					total = total.toFixed(4)
					let print
					if (total == persentaseKriteria) {
						$('#display-sub').hide()
						$('#bobot-sub').text(total + ' %')
						print = `<span> ${total} %</span>`
					} else {
						$('#display-sub').show()
						$('#sub').text(total + ' %')
						$('#selisih-bobot_sub').text((persentaseKriteria - total) + ' %')
						print = `<span class = "text-danger"> ${total} %</span>`
					}
					$('#total-sub').html(print);
				},
				pageLength: 5,
				bLengthChange: false,
				bFilter: false,
				bInfo: false,
				bAutoWidth: false,
				columns: [{
						"render": function(data, type, row, meta) {
							return meta.row + meta.settings._iDisplayStart + 1;
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.sub_kriteria;
						}
					},
					{
						"render": function(data, type, row) {
							return row.bobot_sub + ' %';
						}
					},
					{
						"render": function(data, type, row) {
							var html =
								'<a class="hovercursor btn-edit mr-3">' +
								'<i class="fa fa-pencil "></i>' +
								'</a>';
							return html
						},
						className: "text-center"
					}
				]
			})
		})

		$('#table-kriteria').on('click', '.btn-edit', function() {
			let data = $('#table-kriteria').DataTable().row($(this).parents('tr')).data()
			$('#edit-name_kriteria').val(data.kriteria)
			$('#edit-id_kriteria').val(data.kriteria_id)
			$('#edit-bobot_kriteria').val(data.bobot_kriteria)
			$('#edit-kriteria').modal('show')
		})

		$('#table-sub').on('click', '.btn-edit', function() {
			let data = $('#table-sub').DataTable().row($(this).parents('tr')).data()
			$('#edit-name_sub_kriteria').val(data.sub_kriteria)
			$('#edit-id_sub_kriteria').val(data.sub_kriteria_id)
			$('#edit-bobot_sub_kriteria').val(data.bobot_sub)
			$('#edit-sub').modal('show')
		})
	});

	function close_sub() {
		$('#view-kriteria').modal('show')
		$('#view-sub').modal('hide')
	}

	function saveIndikator() {
		let indikator = $('#edit-name_indikator').val()
		Swal.fire({
			title: 'Apakah kamu yakin?',
			text: `Mengubah data indikator ${indikator}.`,
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#FAAAAA',
			cancelButtonColor: '#AAA',
			focusCancel: true,
			confirmButtonText: 'Yes'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					type: "POST",
					url: api + "indikator/update",
					data: {
						id: $('#edit-id_indikator').val(),
						bobot_indikator: $('#edit-bobot_indikator').val(),
					},
					success: function(response) {
						if (!response.error) {
							Swal.fire({
								title: 'Success!',
								text: response.message,
								icon: 'success',
							});
							$('#edit-indikator').modal('hide')
							$('#view-kriteria').modal('hide')
							refresh()
							// $('#tableBobotIndikator').dataTable().api().ajax.reload();
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
	}

	function saveKriteria() {
		let kriteria = $('#edit-name_kriteria').val()
		Swal.fire({
			title: 'Apakah kamu yakin?',
			text: `Mengubah data kriteria ${kriteria}.`,
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#FAAAAA',
			cancelButtonColor: '#AAA',
			focusCancel: true,
			confirmButtonText: 'Yes'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					type: "POST",
					url: api + "kriteria/update",
					data: {
						id: $('#edit-id_kriteria').val(),
						bobot_kriteria: $('#edit-bobot_kriteria').val(),
					},
					success: function(response) {
						if (!response.error) {
							Swal.fire({
								title: 'Success!',
								text: response.message,
								icon: 'success',
							});
							$('#view-kriteria').modal('hide')
							$('#edit-kriteria').modal('hide')
							refresh()
							// $('#tableBobotIndikator').dataTable().api().ajax.reload();
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
	}


	function saveSub() {
		let sub = $('#edit-sub_name_kriteria').val()
		Swal.fire({
			title: 'Apakah kamu yakin?',
			text: `Mengubah data kriteria ${sub}.`,
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#FAAAAA',
			cancelButtonColor: '#AAA',
			focusCancel: true,
			confirmButtonText: 'Yes'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					type: "POST",
					url: api + "sub_kriteria/update",
					data: {
						id: $('#edit-id_sub_kriteria').val(),
						bobot_sub: $('#edit-bobot_sub_kriteria').val(),
					},
					success: function(response) {
						if (!response.error) {
							Swal.fire({
								title: 'Success!',
								text: response.message,
								icon: 'success',
							});
							$('#view-sub').modal('hide')
							$('#edit-sub').modal('hide')
							refresh()
							// $('#tableBobotIndikator').dataTable().api().ajax.reload();
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
	}
</script>
