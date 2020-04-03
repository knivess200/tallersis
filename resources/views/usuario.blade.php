<div class="user">
			<span class="subtitle">Hola:</span>
			<div class="name">
				{{Auth::user()->name}} {{Auth::user()->lastname}}
				<a href="{{url('/logout')}}" data-toggle="tooltip" data-placement="top" title="Salir">
					salir</a>			 	
			</div>
			<div class="email">
				{{Auth::user()->email}}
			</div>			
		</div>