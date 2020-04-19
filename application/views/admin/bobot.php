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

				<h5 style="margin-bottom : 3px;">Data Kriteria Kemiskinan <small> Dinas Sosial Kota Malang </small> </h5>

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
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" type="button">Text</button>
				</div>
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
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" type="button">Text</button>
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
	let kriteria
	$(document).ready(function() {
		$('#tableBobotIndikator').DataTable({
			ajax: api + 'bobot/get/individu',
			footerCallback: function(row, data, start, end, display) {
				var indikator = 0;
				data.forEach(element => {
					indikator += parseFloat(element.bobot_indikator)
				});
				$('#total-indikator').html(`${indikator} %`);
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
							'<a class="hovercursor btn-edit mr-3">' +
							'<i class="fa fa-eye "></i>' +
							'</a>';
						return html
					},
					className: "text-center"
				}
			]
		});

		$('#tableBobotIndikator tbody').on('click', 'a.btn-edit', function() {
			var data = $('#tableBobotIndikator').DataTable().row($(this).parents('tr')).data()
			kriteria = data.kriteria
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
					$('#total-kriteria').html(`${total} %`);
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
								`<a class="hovercursor btn-edit-sub mr-3" onclick="edit_sub(${meta.row + meta.settings._iDisplayStart})">
								<i class="fa fa-eye "></i>
								</a>`;
							return html
						},
						className: "text-center"
					}
				]
			})
		});
	});

	function edit_sub(row) {
		let data = kriteria[row]
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
				$('#total-sub').html(`${total} %`);
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
	}

	function close_sub() {
		$('#view-kriteria').modal('show')
		$('#view-sub').modal('hide')
	}
</script>
