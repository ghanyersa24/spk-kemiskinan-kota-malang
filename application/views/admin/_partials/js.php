<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/select2/js/select2.full.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
<!-- Demo scripts for this page-->
<script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/dist/js/adminlte.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Bootstrap scripts for this page-->

<!-- select2 scripts for this page-->
<script type="text/javascript">
	$('#select_asset').select2();
	$('#select_kartu').select2();
	$('#select_kk').select2();

	function snackbar(text) {
		// Get the snackbar DIV
		var x = document.getElementById("snackbar");

		// Add the "show" class to DIV
		x.className = "show";
		x.innerHTML = text;

		// After 3 seconds, remove the show class from DIV
		setTimeout(function() {
			x.className = x.className.replace("show", "");
		}, 3000);
	}
</script>

<!-- hide scripts for this page-->
<script type="text/javascript">
	$("#form-pengenalan-tempat").hide();
	$("#form-perumahan").hide();
	$("#form-sosial").hide();
	$("#form-asset").hide();


	$('.select2bs4').select2({
		theme: 'bootstrap4'
	})

	//Initialize Select2 Elements
	$('.select2').select2()


	$("#prev").on("click", function() {
		prev();
	});

	$("#next").on("click", function() {
		next();
	});

	$("#input-nama").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (keycode >= 48 && keycode <= 57) {
			$("#warning-input-nama").show();
			return false;
		} else {
			$("#warning-input-nama").hide();
			return true;
		}
	})

	$("#input-nik").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (!(keycode >= 48 && keycode <= 57)) {
			$("#warning-input-nik").show();
			return false;
		} else {
			$("#warning-input-nik").hide();
			return true;
		}
	})

	$("#input-no-keluarga").keypress(function(evt) {
		var keycode = evt.keyCode;
		now = isNaN(parseInt($("#input-no-keluarga").val())) ? 0 : parseInt($("#input-no-keluarga").val());
		var value = now + parseInt(String.fromCharCode(keycode))
		console.log('velue', value);
		if (value <= 8 && value >= 1) {
			$("#warning-input-no-keluarga").hide();
			return true;
		} else {
			$("#warning-input-no-keluarga").show();
			return false;
		}
	})

	$("#input-alamat").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (!((keycode >= 48 && keycode <= 57) || (keycode >= 65 && keycode <= 90) || (keycode >= 97 && keycode <= 122))) {
			$("#warning-input-alamat").show();
			return false;
		} else {
			$("#warning-input-alamat").hide();
			return true;
		}
	})

	$("#input-alamat1").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (!((keycode >= 48 && keycode <= 57) || (keycode >= 65 && keycode <= 90) || (keycode >= 97 && keycode <= 122))) {
			$("#warning-input-alamat1").show();
			return false;
		} else {
			$("#warning-input-alamat1").hide();
			return true;
		}
	})

	$("#input-rt").keypress(function(evt) {
		var keycode = evt.keyCode;
		now = isNaN(parseInt($("#input-rt").val())) ? 0 : parseInt($("#input-rt").val());
		var value = now + parseInt(String.fromCharCode(keycode))
		console.log('velue', value);
		if (value <= 9 && value >= 1) {
			$("#warning-input-rt").hide();
			return true;
		} else {
			$("#warning-input-rt").show();
			return false;
		}
	})

	$("#input-rt1").keypress(function(evt) {
		var keycode = evt.keyCode;
		now = isNaN(parseInt($("#input-rt1").val())) ? 0 : parseInt($("#input-rt1").val());
		var value = now + parseInt(String.fromCharCode(keycode))
		console.log('velue', value);
		if (value <= 9 && value >= 1) {
			$("#warning-input-rt1").hide();
			return true;
		} else {
			$("#warning-input-rt1").show();
			return false;
		}
	})

	$("#input-rw").keypress(function(evt) {
		var keycode = evt.keyCode;
		now = isNaN(parseInt($("#input-rw").val())) ? 0 : parseInt($("#input-rw").val());
		var value = now + parseInt(String.fromCharCode(keycode))
		console.log('velue', value);
		if (value <= 9 && value >= 1) {
			$("#warning-input-rw").hide();
			return true;
		} else {
			$("#warning-input-rw").show();
			return false;
		}
	})

	$("#input-rw1").keypress(function(evt) {
		var keycode = evt.keyCode;
		now = isNaN(parseInt($("#input-rw1").val())) ? 0 : parseInt($("#input-rw1").val());
		var value = now + parseInt(String.fromCharCode(keycode))
		console.log('velue', value);
		if (value <= 9 && value >= 1) {
			$("#warning-input-rw1").hide();
			return true;
		} else {
			$("#warning-input-rw1").show();
			return false;
		}
	})

	$("#input-umur").keypress(function(evt) {
		var keycode = evt.keyCode;
		now = isNaN(parseInt($("#input-umur").val())) ? 0 : parseInt($("#input-umur").val());
		var value = now + parseInt(String.fromCharCode(keycode))
		console.log('velue', value);
		if (value <= 50 && value >= 1) {
			$("#warning-input-umur").hide();
			return true;
		} else {
			$("#warning-input-umur").show();
			return false;
		}

	})

	$("#input-nama1").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (keycode >= 48 && keycode <= 57) {
			$("#warning-input-nama1").show();
			return false;
		} else {
			$("#warning-input-nama1").hide();
			return true;
		}
	})

	$("#input-luas-lantai").keypress(function(evt) {
		var keycode = evt.keyCode;
		now = isNaN(parseInt($("#input-luas-lantai").val())) ? 0 : parseInt($("#input-luas-lantai").val());
		var value = now + parseInt(String.fromCharCode(keycode))
		console.log('velue', value);
		if (value <= 9 && value >= 1) {
			$("#warning-input-luas-lantai").hide();
			return true;
		} else {
			$("#warning-input-luas-lantai").show();
			return false;
		}
	})

	$("#input-kamar-tidur").keypress(function(evt) {
		var keycode = evt.keyCode;
		now = isNaN(parseInt($("#input-kamar-tidur").val())) ? 0 : parseInt($("#input-kamar-tidur").val());
		var value = now + parseInt(String.fromCharCode(keycode))
		console.log('velue', value);
		if (value <= 5 && value >= 1) {
			$("#warning-input-kamar-tidur").hide();
			return true;
		} else {
			$("#warning-input-kamar-tidur").show();
			return false;
		}
	})

	$("#input-lahan").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (!(keycode >= 48 && keycode <= 57)) {
			$("#warning-input-lahan").show();
			return false;
		} else {
			$("#warning-input-lahan").hide();
			return true;
		}
	})

	$("#input-rumah").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (!(keycode >= 48 && keycode <= 57)) {
			$("#warning-input-rumah").show();
			return false;
		} else {
			$("#warning-input-rumah").hide();
			return true;
		}
	})

	$("#input-sapi").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (!(keycode >= 48 && keycode <= 57)) {
			$("#warning-input-sapi").show();
			return false;
		} else {
			$("#warning-input-sapi").hide();
			return true;
		}
	})

	$("#input-kerbau").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (!(keycode >= 48 && keycode <= 57)) {
			$("#warning-input-kerbau").show();
			return false;
		} else {
			$("#warning-input-kerbau").hide();
			return true;
		}
	})

	$("#input-kuda").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (!(keycode >= 48 && keycode <= 57)) {
			$("#warning-input-kuda").show();
			return false;
		} else {
			$("#warning-input-kuda").hide();
			return true;
		}
	})

	$("#input-babi").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (!(keycode >= 48 && keycode <= 57)) {
			$("#warning-input-babi").show();
			return false;
		} else {
			$("#warning-input-babi").hide();
			return true;
		}
	})

	$("#input-kambing").keypress(function(evt) {
		var keycode = evt.charCode || evt.keyCode;
		if (!(keycode >= 48 && keycode <= 57)) {
			$("#warning-input-kambing").show();
			return false;
		} else {
			$("#warning-input-kambing").hide();
			return true;
		}
	})


	var section = ["jenis-penerima", "form-pengenalan-tempat", "form-perumahan", "form-sosial", "form-asset"];
	var position = 0;

	function prev() {
		if (position == 0) {
			return true;
		} else {
			$("#submit").css("display", "none");
			$("#next").css("display", "");

			$("#" + section[position]).css("display", "none");

			var jenis = $("#input-jenis-penerima").val();
			if (jenis == 1) {
				if (position == 3) {
					position = 0;
				}
			} else {
				position--;
				if (position == 3) {
					position--;
				}
			}

			$("#" + section[position]).css("display", "");
			if (position == 0) {
				$("#prev").css("display", "none");
			}
		}
	}

	function next() {
		if (position == 4) {
			return true;
		} else {
			if (position == 0) {
				isi = true;
				isi = $("#input-jenis-penerima").val() != null && $("#input-jenis-penerima").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon untuk memilih terlebih dahulu sebelum masuk ke form selanjutnya ");
					return true;
				}
				isi = $("#input-pengambilan-data").val() != null && $("#input-pengambilan-data").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
			} else if (position == 1) {
				isi = $("#input-nama1").val() != null && $("#input-nama1").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-nama-kecamatan").val() != null && $("#input-nama-kecamatan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-nama-kelurahan").val() != null && $("#input-nama-kelurahan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}

				isi = $("#input-alamat").val() != null && $("#input-alamat").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-rt").val() != null && $("#input-rt").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-rw").val() != null && $("#input-rw").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}

			} else if (position == 2) {
				isi = $("#input-penguasaan-bangunan").val() != null && $("#input-penguasaan-bangunan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-status-lahan").val() != null && $("#input-status-lahan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-luas-lantai").val() != null && $("#input-luas-lantai").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-jenis-lantai").val() != null && $("#input-jenis-lantai").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-jenis-dinding").val() != null && $("#input-jenis-dinding").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-kondisi-dinding").val() != null && $("#input-kondisi-dinding").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-jenis-atap").val() != null && $("#input-jenis-atap").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-kondisi-atap").val() != null && $("#input-kondisi-atap").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-kamar-tidur").val() != null && $("#input-kamar-tidur").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-sumber-air").val() != null && $("#input-sumber-air").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-memperoleh-air").val() != null && $("#input-memperoleh-air").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-penerangan").val() != null && $("#input-penerangan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-daya-penerangan").val() != null && $("#input-daya-penerangan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-bahan-bakar").val() != null && $("#input-bahan-bakar").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-fasilitas-bab").val() != null && $("#input-fasilitas-bab").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-jenis-kloset").val() != null && $("#input-jenis-kloset").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-pembuangan-tinja").val() != null && $("#input-pembuangan-tinja").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
			} else if (position == 3) {
				isi = $("#input-nama").val() != null && $("#input-nama").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-alamat1").val() != null && $("#input-alamat1").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-rt1").val() != null && $("#input-rt1").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-rw1").val() != null && $("#input-rw1").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-nik").val() != null && $("#input-nik").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-hubungan-krt").val() != null && $("#input-hubungan-krt").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-no-keluarga").val() != null && $("#input-no-keluarga").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-hubungan-kk").val() != null && $("#input-hubungan-kk").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-jenis-kelamin").val() != null && $("#input-jenis-kelamin").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-umur").val() != null && $("#input-umur").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-status-perkawinan").val() != null && $("#input-status-perkawinan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-buku-nikah").val() != null && $("#input-buku-nikah").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-ada-kk").val() != null && $("#input-ada-kk").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-ada-kartu-identitas").val() != null && $("#input-ada-kartu-identitas").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-kehamilan").val() != null && $("#input-kehamilan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-jenis-cacat").val() != null && $("#input-jenis-cacat").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-penyakit-kronis").val() != null && $("#input-penyakit-kronis").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-partisipasi-sekolah").val() != null && $("#input-partisipasi-sekolah").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-jenjang-pendidikan").val() != null && $("#input-jenjang-pendidikan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-kelas-tertinggi").val() != null && $("#input-kelas-tertinggi").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-ijazah-tertinggi").val() != null && $("#input-ijazah-tertinggi").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-status-bekerja").val() != null && $("#input-status-bekerja").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-lapangan-pekerjaan").val() != null && $("#input-lapangan-pekerjaan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-kedudukan-pekerjaan").val() != null && $("#input-kedudukan-pekerjaan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
			} else if (position == 4) {
				isi = $("#input-ada-asset").val() != null && $("#input-ada-asset").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-lahan").val() != null && $("#input-lahan").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-rumah").val() != null && $("#input-rumah").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-sapi").val() != null && $("#input-sapi").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-kerbau").val() != null && $("#input-kerbau").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-kuda").val() != null && $("#input-kuda").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-babi").val() != null && $("#input-babi").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-kambing").val() != null && $("#input-kamibng").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}
				isi = $("#input-kartu-pemerintah").val() != null && $("#input-kartu-pemerintah").val() != "" ? true : false;
				if (isi == false) {
					alert("Mohon melengkapi data yang belum diisi");
					return true;
				}

			}

			$("#prev").css("display", "");
			$("#" + section[position]).css("display", "none");

			var jenis = $("#input-jenis-penerima").val();
			if (jenis == 1) {
				if (position == 0) {
					position = 3;
					$("#" + section[position]).css("display", "");
					$("#submit").css("display", "");
					$("#next").css("display", "none");
				}
			} else {
				position++;
				if (position == 3) {
					position++;
				}
				$("#" + section[position]).css("display", "");
				if (position == 4) {
					$("#submit").css("display", "");
					$("#next").css("display", "none");
				}
			}

		}
	}

	function cek(isi) {
		if (isi == false) {
			alert("Mohon lengkapi data yang belum terisi");
			return true;
		}
	}


	var tabel = null;
	$(document).ready(function() {
		$.fn.dataTable.ext.errMode = 'none';
		$('#dataTable tfoot .table_search').each(function() {
			var title = $(this).text();
			$(this).html('<input type="text" class="form-control-sm" placeholder="Search ' + title + '" />');
		});


		// tabel = $('#dataTable').DataTable({
		//     "language" : {
		//         "url" : "//cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
		//         "sEmptyTable" : "Tidads"
		//     },
		//     "processing": true,
		//     "serverSide": true,
		//     "ordering": true, // Set true agar bisa di sorting
		//     "searching" : false,
		//     "lengthChange" : false,
		//     "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
		//     "ajax":
		//     {
		//         "url": "<?php echo base_url('api/Formulir/listdata') ?>", 
		//         "type": "POST"
		//     },
		//     "deferRender": true,
		//     "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], 
		//     "columns": [
		//         { "render": function (data, type, row, meta) {
		//             return meta.row + meta.settings._iDisplayStart + 1;
		//         }}, 
		//         { "render" : function (data, type, row){
		//             return row.IdJenisPenerima == "1" ? "Perorangan" : "Keluarga";
		//         }},  
		//         { "render" : function (data, type, row){
		//            return row.IdJenisPenerima == "1" ? row.NamaPerorangan : row.NamaKeluarga;
		//         }},  
		//         { "render" : function (data, type, row){
		//            return row.IdJenisPenerima == "1" ? row.AlamatPerorangan : row.AlamatKeluarga;
		//         }},  
		//         { "data": "TglPemeriksa" },  
		//         { "render": function ( data, type, row ) { // Tampilkan kolom aksi
		//                 var html  = '<a class="hovercursor" onclick="bukamodaldetail('+row.IdJenisPenerima+', '+row.id_survey+');">'+ 
		//                             '<i class="fa fa-file-o"></i>'+
		//                           '</a>'+
		//                           '<a class="hovercursor" onclick="bukamodaledit('+row.IdJenisPenerima+', '+row.id_survey+');">'+
		//                             '<i class="fa fa-pencil"></i>'+
		//                           '</a>'+
		//                           '<a class="hovercursor" onclick="bukamodalhapus('+row.IdJenisPenerima+', '+row.id_survey+');">'+
		//                             '<i class="fa fa-trash"></i>'+
		//                           '</a>';
		//                 return html
		//             }
		//         },
		//     ],
		// });



		$('#input-lahan').prop('disabled', true);
		$('#input-lahan').val(0);

		$('#input-rumah').prop('disabled', true);
		$('#input-rumah').val(0);

		$('#input-sapi').prop('disabled', true);
		$('#input-sapi').val(0);

		$('#input-kerbau').prop('disabled', true);
		$('#input-kerbau').val(0);

		$('#input-kuda').prop('disabled', true);
		$('#input-kuda').val(0);

		$('#input-babi').prop('disabled', true);
		$('#input-babi').val(0);

		$('#input-kambing').prop('disabled', true);
		$('#input-kambing').val(0);

		$('#enable-input-lahan').click(function() {
			if ($('#input-lahan').is(':disabled')) {
				$('#input-lahan').prop('disabled', false);
				$('#input-lahan').val('');
			} else {
				$('#input-lahan').prop('disabled', true);
				$('#input-lahan').val(0);
			}
		})

		$('#enable-input-rumah').click(function() {
			if ($('#input-rumah').is(':disabled')) {
				$('#input-rumah').prop('disabled', false);
				$('#input-rumah').val('');
			} else {
				$('#input-rumah').prop('disabled', true);
				$('#input-rumah').val(0);
			}
		})

		$('#enable-input-sapi').click(function() {
			if ($('#input-sapi').is(':disabled')) {
				$('#input-sapi').prop('disabled', false);
				$('#input-sapi').val('');
			} else {
				$('#input-sapi').prop('disabled', true);
				$('#input-sapi').val(0);
			}
		})

		$('#enable-input-kerbau').click(function() {
			if ($('#input-kerbau').is(':disabled')) {
				$('#input-kerbau').prop('disabled', false);
				$('#input-kerbau').val('');
			} else {
				$('#input-kerbau').prop('disabled', true);
				$('#input-kerbau').val(0);
			}
		})

		$('#enable-input-kuda').click(function() {
			if ($('#input-kuda').is(':disabled')) {
				$('#input-kuda').prop('disabled', false);
				$('#input-kuda').val('');
			} else {
				$('#input-kuda').prop('disabled', true);
				$('#input-kuda').val(0);
			}
		})

		$('#enable-input-babi').click(function() {
			if ($('#input-babi').is(':disabled')) {
				$('#input-babi').prop('disabled', false);
				$('#input-babi').val('');
			} else {
				$('#input-babi').prop('disabled', true);
				$('#input-babi').val(0);
			}
		})

		$('#enable-input-kambing').click(function() {
			if ($('#input-kambing').is(':disabled')) {
				$('#input-kambing').prop('disabled', false);
				$('#input-kambing').val('');
			} else {
				$('#input-kambing').prop('disabled', true);
				$('#input-kambing').val(0);
			}
		})

	});

	function bukamodaldetail(id_jenis, id_survey) {
		$.ajax({
			"type": "post",
			"url": "<?php echo base_url('api/formulir/getdetailpenerima'); ?>",
			"data": {
				"id_jenis": id_jenis,
				"id_survey": id_survey
			},
			"success": function(data) {
				console.log(data);
			}
		});


		$("#title-modal-penerima").text("Detail Data Penerima - " + (id_jenis == 1 ? "Perorangan" : "Keluarga"))
		if (id_jenis == 1) {
			$("#form-perorangan").css("display", "");
			$("#form-keluarga").css("display", "none");
		} else {
			$("#form-perorangan").css("display", "none");
			$("#form-keluarga").css("display", "");
		}
		$("#myModal").modal("toggle");
	}


	function bukamodaledit(id_jenis, id_survey) {
		$.ajax({
			"type": "post",
			"url": "<?php echo base_url('api/formulir/getdetailpenerima'); ?>",
			"data": {
				"id_jenis": id_jenis,
				"id_survey": id_survey
			},
			"success": function(data) {
				console.log(data);
			}
		});


		$("#title-modal-penerima").text("Edit Data Penerima - " + (id_jenis == 1 ? "Perorangan" : "Keluarga"))
		if (id_jenis == 1) {
			$("#form-perorangan").css("display", "");
			$("#form-keluarga").css("display", "none");
		} else {
			$("#form-perorangan").css("display", "none");
			$("#form-keluarga").css("display", "");
		}
		$("#myModal").modal("toggle");
	}


	function bukamodalhapus(id_jenis, id_survey) {

	}
</script>
