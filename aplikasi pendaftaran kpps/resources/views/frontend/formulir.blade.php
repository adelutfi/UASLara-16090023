<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulir KPPS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('assetfrom/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetfrom/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetfrom/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetfrom/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetfrom/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetfrom/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetfrom/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetfrom/vendor/noui/nouislider.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetfrom/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assetfrom/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="{{route('formulir.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				@if($errors->has('ktp'))
				<div class="alert alert-danger" role="alert"> Data gagal ditambahkan, KTP harus gambar</div>
				@elseif($errors->has('ijazah'))
				<div class="alert alert-danger" role="alert"> Data gagal ditambahkan, Ijazah harus gambar</div>
				@elseif($errors->has('surat_keterangan'))
				<div class="alert alert-danger" role="alert"> Data gagal ditambahkan, Surat keterangan dokter harus gambar</div>
				@endif
				<span class="contact100-form-title">
					
					Pendaftaran KPPS
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">NIK</span>
					<input class="input100" type="text" value="{{old('nik')}}" name="nik" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Nama</span>
					<input class="input100" type="text" value="{{old('nama')}}" name="nama" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Tanggal Lahir</span>
					<input class="input100" type="date" value="{{old('tanggal_lahir')}}" name="tanggal_lahir" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Tempat Lahir</span>
					<input class="input100" type="text" name="tempat_lahir" value="{{old('tempat_lahir')}}" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Jenis Kelamin</span><br>
					<div class="form-check form-check-inline">
					  <input type="radio" name="jenis_kelamin" {{(old('jenis_kelamin') == 'Laki-laki') ? 'checked' : ''}} id="inlineRadio1" value="Laki-laki">
					  <label for="inlineRadio1">Laki-laki</label>
					</div>
					<div class="form-check form-check-inline">
					  <input type="radio" name="jenis_kelamin" {{(old('jenis_kelamin') == 'Perempuan') ? 'checked' : ''}} id="inlineRadio2" value="Perempuan">
					  <label for="inlineRadio2">Perempuan</label>
					</div>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" value="{{old('email')}}" name="email" placeholder="Enter Your Email ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">No Hp</span>
					<input class="input100" type="text" value="{{old('no_hp')}}" name="no_hp" placeholder="Masukan no hp">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Lulusan Sekolah</span><br>
					<div class="form-check form-check-inline">
					  <input type="radio" name="lulusan" id="inlineRadio1" {{(old('lulusan') == 'SMA') ? 'checked' : ''}} value="SMA">
					  <label for="inlineRadio1">SMA</label>
					</div>
					<div class="form-check form-check-inline">
					  <input type="radio" name="lulusan" id="inlineRadio2" {{(old('lulusan') == 'SMK') ? 'checked' : ''}} value="SMK">
					  <label for="inlineRadio2">SMK</label>
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">KTP</span>
					<input class="input100" type="file" name="ktp" placeholder="Enter Your Name">
					@if($errors->has('ktp'))
					<span style="color:red">Ktp harus gambar</span>
					@endif
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Ijazah</span>
					<input class="input100" type="file" name="ijazah" placeholder="Enter Your Name">
					@if($errors->has('ijazah'))
					<span style="color:red">Ijazah harus gambar</span>
					@endif
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Surat Keterangan Dokter</span>
					<input class="input100" type="file" name="surat_keterangan" placeholder="Enter Your Name">
					@if($errors->has('surat_keterangan'))
					<span style="color:red">Surat keterangan dokter harus gambar</span>
					@endif
				</div>



			


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="{{asset('assetfrom/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetfrom/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetfrom/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assetfrom/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetfrom/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js')}}-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js')}}-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js')}}-show-service').slideUp();
					}
					else {
						$('.js')}}-show-service').slideUp();
						$('.js')}}-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assetfrom/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('assetfrom/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetfrom/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetfrom/vendor/noui/nouislider.min.js')}}"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assetfrom/js/main.js')}}"></script>

<!-- Global site tag (gtag.js')}}) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
