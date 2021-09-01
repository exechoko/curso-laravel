{{-- Mi comentario HTML --}}

@include('contacto.cabecera', array('nombre' => $nombre))

<h1>Página de contacto {!!$nombre!!} {{-- isset($edad) && !is_null($edad) ? $edad : 'No existe la edad' --}}</h1>

{{-- Condicional if --}}
@if(is_null($edad))
  No existe la edad
@else
  Si existe la edad: {{$edad}}
@endif

{{-- Bucle for --}}
<p>Tabla del 2</p>
@for($i = 1; $i <= 10; $i++)
  {{$i.' x 2 = '.($i*2)}}<br/>
@endfor

{{-- Bucle while --}}
<?php $f = 1 ?>
@while($f<=7)
  <p>{{'Hola mundo '.$f}}</p>
  <?php $f++ ?>
@endwhile

{{-- Bucle foreach --}}
<h2>Listado de frutas</h2>
@foreach($frutas as $fruta)
  <p>{{$fruta}}</p>
@endforeach
