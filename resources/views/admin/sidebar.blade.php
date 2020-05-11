<div class="sidebar shadow">
	<div class="section-top">
		<div class="logo">
			<img src="{{url('static/images/logo.png')}}" class="img-fluid">
		</div>
		<div class="user">
			<span class="subtitle">Hola:</span>
			<div class="name">
				{{Auth::user()->name}} {{Auth::user()->lastname}}
				<a href="{{url('/logout')}}" data-toggle="tooltip" data-placement="top" title="Salir">
					<i class="fas fa-sign-out-alt"></i></a>			 	
			</div>
			<div class="email">
				{{Auth::user()->email}}
			</div>			
		</div>
	</div>

	<div class="main">
		<ul>
			<li>
				<a href="{{url('/admin')}}" class="lk-dashboard"><i class="fas fa-home"></i> Dashboard</a>
			</li>

			<li>
				<a href="{{url('/admin/products')}}" class="lk-products , lk-product_add , lk-product_edit"><i class="fas fa-boxes"></i> Servicios</a>
			</li>
			<li>
				<a href="{{url('/admin/categories/0')}}" class="lk-categories , lk-category_add , lk-category_edit"><i class="far fa-folder-open"></i> Categorias</a>
			</li>

			<li>
				<a href="{{url('/admin/users')}}" class="lk-user_list lk-user_edit lk-user_delete"><i class="fas fa-user-friends"></i> Usuarios</a>
			</li>
		</ul>
		
	</div>
	
</div>