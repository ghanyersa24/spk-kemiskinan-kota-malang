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

				<h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">Voting
					<select class="form-control col-md-2" style="margin-right:10px;" id="select-type">
						<option value="individu">Individu</option>
						<option selected value="keluarga">Keluarga</option>
					</select>
				</h5>

				<div class="card mb-3">
					<!-- Voting -->
					<div class="card-header d-flex justify-content-between">
						<span>
							<i class="fa fa-calculator" aria-hidden="true"></i>
							Voting <span class="method">Keluarga</span>
						</span>
					</div>

					<div class="card-body" id="card-VT" style="display: block">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Ranking</th>
										<th>Nama Alternatif</th>
										<th>Poin</th>
										<th>Voting</th>
									</tr>
								</thead>
							</table>
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


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>
		<?php $this->load->view("admin/_partials/modal.php") ?>
		<?php $this->load->view("admin/_partials/js.php") ?>
		<script>
			let response

			function vote(id) {
				let data = id.split(".")
				$.ajax({
					type: "POST",
					url: api + 'vote/create',
					data: {
						id: data[1]
					},
					success: function(res) {
						if (!res.error) {
							Swal.fire({
								title: 'Berhasil!',
								text: res.message,
								icon: 'success',
								timer: 1000,
								showConfirmButton: false
							})
							if ($('#select-type').val() == 'keluarga') {
								ajax_keluarga(render)
							} else {
								ajax_individu(render)
							}
						} else {
							Swal.fire({
								title: 'Error!',
								text: res.message,
								icon: 'error',
							})
						}
					}
				})
			}

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
				$('#dataTable').DataTable().destroy()
				$('#dataTable').DataTable({
					data: response.data.PERANKINGAN,
					order: [
						// [3, "desc"],
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
								if (row.vote == 1)
									return `<button type="button" onclick="vote('${row.id}')" class="btn-vote btn btn-danger" data-toggle="tooltip" data-placement="top" title="Unvote"><i class="fa fa-heart" style="font-size:1.5em"></i><span class="position-relative badge badge-dark" style="font-size:0.7em;top:-10px;left:-8px">${row.jumlah}</span> </button>`
								else
									return `<button type="button" onclick="vote('${row.id}')" class="btn-vote btn btn-default" data-toggle="tooltip" data-placement="top" title="Vote this!!!"><i class="fa fa-heart"style="font-size:1.5em;"></i><span class="position-relative badge badge-danger" style="font-size:0.7em;top:-10px;left:-8px">${row.jumlah}</span></button>`
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
