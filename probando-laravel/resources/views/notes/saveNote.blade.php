<h1>Crear una nota</h1>

<form action="{{ url('/notas/save-note') }}" method="post">

    <input type="text" name="title" placeholder="Titulo de la nota"/><br/>
    <textarea name="descripcion" placeholder="Descripción de la nota"></textarea><br/>
    <input type="submit" value="Guardar"/>
</form>

<a href="{{ url('/notas') }}">Volver</a>
