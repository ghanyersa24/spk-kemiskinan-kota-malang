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

				<h5 style="margin-bottom : 3px;">Voting - Copeland Score </h5>

				<div class="card mb-3" style="margin-top: 20px; ">
					<div class="card-header" style="padding : 0 !important;"></div>

					<div class="card-body">
						<h5>Hasil Voting</h5>
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTableHsailVoting" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Ranking</th>
										<th>Id Alternatif</th>
										<th>Nama Penerima</th>
										<th>Poin</th>
										<th>Jumlah Pemilih</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
					<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div>

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
		let response

		function ajax_keluarga(callback) {
			$.ajax({
				type: 'GET',
				url: api + 'vote/get/keluarga',
				success: function(res) {
					response = res
					callback()
				}
			});
		}

		function ajax_individu(callback) {
			$.ajax({
				type: 'GET',
				url: api + 'vote/get/individu',
				success: function(res) {
					response = res
					callback()
				}
			});
		}

		function render() {
			$('#dataTableHsailVoting').DataTable().destroy()
			$('#dataTableHsailVoting').DataTable({
				data: response.data.PERANKINGAN,
				order: [
					[0, "asc"]
				],
				columns: [{
						"render": function(data, type, row, meta) {
							return row.position
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.id
						}
					},
					{
						"render": function(data, type, row) {
							return row.nama
						}
					},
					{
						"render": function(data, type, row) {
							return row.point
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.jumlah
						},
						className: "text-center"
					},
				]
			})
		}

		$('#select-type').change(function() {
			if ($('#select-type').val() == 'keluarga') {
				$('.method').text('Keluarga')
				ajax_keluarga(render)
			} else {
				$('.method').text('Individu')
				ajax_individu(render)
			}
		});
		$(document).ready(function() {
			ajax_keluarga(render)
		});
	</script>
</body>

</html>
