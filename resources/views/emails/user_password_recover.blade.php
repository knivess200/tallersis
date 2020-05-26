@extends('emails.master')

@section('content')
<p>Hola: <strong>{{ $name }}</strong> </p>
<p>Este es una correo electronico que le ayudara a reestablver la contraseña de su cuenta en nuestra plataforma.</p>
<p>Para continuar haga clic en el siguiente boton e ingrese el siguiente codigo: <h2> {{ $code}}</h2></p>
<p><a href="{{ url('reset')}}" style="display: inline-block; background-color: #2caaff; color: #fff; padding: 12px; border-radius: 4px; text-decoration: none;"> Resetear mi contraseña</a></p>
<p>Si el boton anterior no le funciona, copie y pegue la siguiente url en su navegador:</p>
<p>{{ url('reset?email='.$email)}}</p>
@stop