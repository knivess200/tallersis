@extends('admin.master')

@section('title' , 'Editar Usuario' )

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{url('/admin/products')}}"><i class="far fa-folder-open"></i> Usuario</a>
		
	</li>
	
@endsection


@section('content')
<div class="container-fluid">
	<div class="page_user">
		<div class="row">
			<div class="col-md-4">
				<div class="panel shadow">
					<div class="header">					
						<h2 class="title"><i class="fas fa-user"></i> Informacion</h2>			
					</div>
					
					<div class="inside">
						<div class="mini_profile">
							@if(is_null($u->avatar))
							<img src="{{ url('static/images/default-avatar.png')}}" class="avatar">
							@else
							<img src="{{ url('uploads/user/'.$u->id.'/'.$user->avatar) }}" class="avatar">
							@endif
							<div class="info">
								<span class="title"><i class="far fa-address-card"></i> Nombre:</span>
								<span class="text">{{ $u->name}}  {{ $u->lastname}}</span>
								<span class="title"><i class="fas fa-user-tie"></i> Estado del Usuario:</span>
								<span class="text">{{getUserStatusArray (null,$u->status)}}</span>
								<span class="title"><i class="fas fa-envelope"></i> Correo Electronicó:</span>
								<span class="text">{{ $u->email}}</span>
								<span class="title"><i class="far fa-calendar-alt"></i> Fecha de Registro:</span>
								<span class="text">{{ $u->created_at}}</span>
								<span class="title"><i class="fas fa-user-shield"></i> Rol de Usuario:</span>
								<span class="text">{{getRoleUserArray (null,$u->role)}}</span>
								
							</div>
							@if($u->status == "100")
							<a href="{{ url('/admin/user/'.$u->id.'/banned')}}" class="btn btn-success"> Activar Usuario</a>
							@else
							<a href="{{ url('/admin/user/'.$u->id.'/banned')}}" class="btn btn-danger"> Suspender Usuario</a>
							@endif
						</div>
					</div>
							
				</div>
			</div>		
			<div class="col-md-8">
				<div class="panel shadow">
					<div class="header">					
						<h2 class="title"><i class="fas fa-user-edit"></i> Editar Informacion</h2>			
					</div>
					
					<div class="inside">
						{!! Form::open(['url' => '/admin/user/'.$u->id.'/edit']) !!}
					<label for="name">Nombre:</label>
					 	<div class="input-group">
					 		 		<div class="input-group-prepend">
					 			<div class="input-group-text"><i class="fas fa-user"></i></div>
					 		</div>
					 		{!! Form::text('name', $u->name, ['class' => 'form-control', 'required']) !!}
					 	</div>

					 	<label for="lastname" class="mtop16">Apellido:</label>
					 	<div class="input-group">
					 		 		<div class="input-group-prepend">
					 			<div class="input-group-text"><i class="fas fa-user-tag"></i></div>
					 		</div>
					 		{!! Form::text('lastname', $u->lastname, ['class' => 'form-control', 'required']) !!}
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
</div>

@endsection

