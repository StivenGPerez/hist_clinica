@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Iniciar Sesión</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger text-center">
							Los datos ingresados no coinciden con los registros de la bds
						</div>
					@endif

					{!! Form::open(['url' => 'auth/login', 'role' => 'form', 'class' => 'form-horizontal']) !!}

						<div class="form-group">
							{!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
								<div class="col-md-6">
									{!! Form::email('email', old('email'),
										['class' => 'form-control']
									) !!}
								</div>
						</div>

						<div class="form-group">
							{!! Form::label('password', 'Password:', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
							{!! Form::password('password', ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Recuerdame
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Entrar</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">¿Olvidate tu password?</a>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
