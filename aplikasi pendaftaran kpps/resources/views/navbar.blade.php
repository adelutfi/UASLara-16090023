<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
		<a class="navbar-brand" href="{{url('home')}}">Pendaftran KPPS baru</a>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link" href="{{url('home')}}"><i style='font-size:18px' class='fas'>&#xf015;</i> Home </a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i style='font-size:18px' class='fas'>&#xf77c;</i> Data Pendaftar
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="{{url('anggota')}}"> <i style='font-size:18px' class='fas'>&#xf505;</i> Pendidikan</a>
					<a class="dropdown-item" href="{{url('dataPenyalur')}}"><i style='font-size:18px' class='fas'>&#xf0c0;</i> Biodata </a>
					<div class="dropdown-divider"></div>
					
			</li>			
			<li class="nav-item">
				<a class="nav-link" href="{{url('about')}}"><i style='font-size:18px' class='fas'>&#xf0c6;</i> Tentang Kami</a>
			</li>		
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
				<a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#"><i style='font-size:18px' class="fa fa-unlock-alt"></i> Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('setting')}}"><i style='font-size:18px' class='fas'>&#xf085;</i> Pengaturan</a>
			</li>
		</ul>	
	</div>
</nav>

<!--Modal Login-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Silahkan Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="username">Username</label>
							<input type="email" class="form-control" id="username" name="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" namae="password" placeholder="Enter Password">
					</div>
					<hr>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>	
			</div>
		</div>
	</div>
</div>	
<!--Modal Login-->