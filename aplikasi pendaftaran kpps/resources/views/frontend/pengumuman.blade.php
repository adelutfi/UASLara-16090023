<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hasil Pengumuman</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('assetlogin/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetlogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetlogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetlogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assetlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetlogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetlogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assetlogin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-10">
				
					<span class="login100-form-title p-b-55">
						Hasil Pengumuman
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						@if($pelamars->isEmpty())
							<span class="login100-form-title p-b-55">
						Pengumuman Kosong
					</span>
						@else
						<table>
							@php($no = 1)
							@foreach($pelamars as $pelamar)
							<thead>
								<td>{{$no}}</td>
								<td width="20%">
									Nama
								</td>
								<td width="5%">
									 :
								</td>
								<td>
									{{$pelamar->nama}}
								</td>
								<td>
									Status :
								</td>
								<td>
									{{$pelamar->status}}
								</td>
							</thead>
							@php($no++)
							@endforeach
						</table>
						@endif
					</div>		
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{asset('assetlogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetlogin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assetlogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetlogin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetlogin/js/main.js')}}"></script>

</body>
</html>