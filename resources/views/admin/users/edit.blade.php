@extends('admin.master')

@section('title' , 'Categorias' )

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{url('/admin/products')}}"><i class="far fa-folder-open"></i> Categorias</a>
		
	</li>
	
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="panel shadow">
				<div class="header">
					
					<h2 class="title"><i class="fas fa-user-friends"></i> Editar Usuario</h2>			
				</div>
				
				<div class="inside">								
					{!! Form::open(['url' => '/admin/users/'.$users->id.'/edit']) !!}
					<label for="name">Nombre:</label>
					 	<div class="input-group">
					 		 		<div class="input-group-prepend">
					 			<div class="input-group-text"><i class="fas fa-user"></i></div>
					 		</div>
					 		{!! Form::text('name', $users->name, ['class' => 'form-control', 'required']) !!}
					 	</div>

					 	<label for="lastname" class="mtop16">Apellido:</label>
					 	<div class="input-group">
					 		 		<div class="input-group-prepend">
					 			<div class="input-group-text"><i class="fas fa-user-tag"></i></div>
					 		</div>
					 		{!! Form::text('lastname', $users->lastname, ['class' => 'form-control', 'required']) !!}
					 	</div>


					 	<label for="email" class="mtop16">Correo electrónico:</label>
					 	<div class="input-group">
					 		 		<div class="input-group-prepend">
					 			<div class="input-group-text"><i class="far fa-envelope-open"></i></div>
					 		</div>
					 		{!! Form::email('email', $users->email, ['class' => 'form-control', 'required']) !!}
					 	</div>

					 	<label for="password" class="mtop16">Password:</label>
					 	<div class="input-group">
					 		 		<div class="input-group-prepend">
					 			<div class="input-group-text"><i class="fas fa-lock"></i></div>
					 		</div>
					 		{!! Form::password('password',    ['class' => 'form-control', 'required']) !!}
					 	</div>

					 	<label for="cpassword" class="mtop16">Confirmar Password:</label>
					 	<div class="input-group">
					 		 		<div class="input-group-prepend">
					 			<div class="input-group-text"><i class="fas fa-lock"></i></div>
					 		</div>
					 		{!! Form::password('cpassword',  ['class' => 'form-control', 'required']) !!}
					 	</div>

					{!! Form::submit('Guardar', ['class' => 'btn btn-success mtop16']) !!}
					{!! Form::close() !!}
				</div>			
			</div>
		</div>		
	</div>
</div>

@endsection

