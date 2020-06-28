<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>
	<section class="section">
		<div class="container mt-5 pt-5">
			<div class="row">
				<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
					<!-- <div class="login-brand">
            <img src="<?php echo base_url(); ?>assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
          </div> -->

					<div class="card card-warning">
						<div class="card-header">
							<h4>Login</h4>
						</div>

						<div class="card-body">
							<form id="form-login" method="post">
								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
									<div class="invalid-feedback">
										Please fill in your username
									</div>
								</div>

								<div class="form-group">
									<div class="d-block">
										<label for="password" class="control-label">Password</label>
									</div>
									<input id="password" type="password" class="form-control" name="password" tabindex="2" required>
									<div class="invalid-feedback">
										please fill in your password
									</div>
								</div>


								<div class="form-group mt-5">
									<div class="alert alert-danger" id="error" style="display: none;"></div>
									<div class="alert alert-success" id="success" style="display: none;"></div>
									<button type="button" class="btn btn-warning btn-lg btn-block" onclick="login()" tabindex="4" id="btn-login">
										Login
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
</body>
<script>
	function login() {
		$("#error").hide('slow');
		$("#success").hide('slow');
		let data = $("#form-login").serialize();
		$("#btn-login").attr('disabled', true);
		$("#btn-login").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...');
		$.ajax({
			url: '<?= base_url() ?>account/auth',
			type: 'POST',
			dataType: 'json',
			data: data,
			success: function(r) {
				if (!r.error) {
					$("#success").html(r.message);
					$("#success").show('slow');
					setTimeout(function() {
						location.reload();
					}, 2000);
				} else {
					$("#error").html(r.message);
					$("#error").show('slow');
					$('#btn-login').removeAttr("disabled");
					$("#btn-login").html('Login <i class="fas fa-sign-in-alt"></i>');
				}
			}
		});
	}
</script>
