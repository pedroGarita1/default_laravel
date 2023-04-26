@extends('layouts/main')
@section('contenido')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-7">
			<div class="container-auth mt-5" id="container-auth">
				<div class="form-container sign-up-container">
					<form action="{{ route('auth-signup') }}" method="POST">
						@csrf
						<h1>Crear cuenta</h1>
						<div class="social-container">
							<a href="#" class="social social-icon"><i class="fab fa-facebook-f"></i></a>
							<a href="#" class="social social-icon"><i class="fab fa-google-plus-g"></i></a>
							<a href="#" class="social social-icon"><i class="fab fa-linkedin-in"></i></a>
						</div>
						<span>Registrate con tu correo electronico</span>
						<div class="form-floating mb-1">
							<input type="text" class="form-control" name="name" id="id_name" placeholder="Nombre del usuario">
							<label for="id_name">Nombre del usuario</label>
						</div>
						<div class="form-floating mb-1">
							<input type="email" class="form-control" name="email" id="id_email" placeholder="Correo Electronico">
							<label for="id_email">Correo Electronico</label>
						</div>
						<div class="form-floating mb-2">
							<input type="password" class="form-control" name="password" id="id_password" placeholder="Contraseña">
							<label for="id_password">Contraseña</label>
						</div>
						<button class="btn btn-outline-primary mt-2">Registrar</button>
					</form>
				</div>
				<div class="form-container sign-in-container">
					<form action="{{ route('auth-signin') }}" method="POST">
						@csrf
						<h1>Inicio de sesion</h1>
						<div class="social-container">
							<a href="#" class="social social-icon"><i class="fab fa-facebook-f"></i></a>
							<a href="#" class="social social-icon"><i class="fab fa-google-plus-g"></i></a>
							<a href="#" class="social social-icon"><i class="fab fa-linkedin-in"></i></a>
						</div>
						<div class="form-floating mb-2">
							<input type="text" class="form-control" name="name" id="id_email" placeholder="Correo Electronico">
							<label for="id_email">Correo o Nombre</label>
						</div>
						<div class="form-floating mb-2">
							<input type="password" class="form-control" name="password" id="id_password" placeholder="Contraseña">
							<label for="id_password">Contraseña</label>
						</div>
						<a href="#" class="mb-2">Olvidaste tu Contraseña?</a>
						<button class="btn btn-outline-primary">Registrar</button>
					</form>
				</div>
				<div class="overlay-container">
					<div class="overlay">
						<div class="overlay-panel overlay-left">
							<h1>Vienvenido de vuelta</h1>
							<p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
							<button class="btn btn-outline-light" id="signIn">Iniciar Sesion</button>
						</div>
						<div class="overlay-panel overlay-right">
							<h1>Hola, amigo!</h1>
							<p>Ingresa tus datos personales y comienza tu viaje con nosotros</p>
							<button class="btn btn-outline-light" id="signUp">Inscribirse</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7 mt-3">
			@error('error-auth')
				<div class="alert alert-danger" role="alert">
					{{ $message }}
				</div>
			@enderror
		</div>
	</div>
</div>
<script src="{{ asset('js/auth.js') }}"></script>
@endsection