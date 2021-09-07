<div class="sidebar" id="sidebar">
	<div class="sidebar-logo">
		<a href="{{ url('dashboard') }}">
			<img src="{{ asset('theme/assets/img/logo-icon.png') }}" class="img-fluid" alt="">
		</a>
	</div>
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="active">
					<a href="{{ url('dashboard') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
				</li>
				<li>
					<a href="{{ route('usuario.anuncio.index') }}"><i class="fas fa-bullhorn"></i> <span> Anuncios</span></a>
				</li>
				<li>
					<a href="{{ route('usuario.rating.index') }}"><i class="fas fa-star"></i> <span>Ratings</span></a>
				</li>
				<li>
					<a href="{{ route('usuario.suscripcion.index') }}"><i class="far fa-calendar-alt"></i> <span>Suscripción</span></a>
				</li>
				<li>
					<a href="{{ route('usuario.pagos.index') }}"><i class="fas fa-wallet"></i> <span> Pagos</span></a>
				</li>
				<li>
					<a href="{{ route('usuario.perfil.index') }}"><i class="fas fa-user"></i> <span>Perfil</span></a>
				</li>
				<li>
					<a href="{{ route('usuario.configuracion.index') }}"><i class="fas fa-cog"></i> <span> Configuración</span></a>
				</li>
			</ul>
		</div>
	</div>
</div>