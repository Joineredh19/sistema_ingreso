<form action="{{ url ('/personal') }}"method="post" enctype="multipart/form-data">
@csrf

    <label for="Documento"> Documento </label>
    <input type="text" name="Documento" id="Documento">
    <br>
    <label for="Nombre"> Nombre </label>
    <input type="text" name="Nombre" id="Nombre">
    <br>
    <label for="Apellido"> Apellido </label>
    <input type="text" name="Apellido" id="Apellido">
    <br>
    <label for="Foto"> Foto </label>
    <input type="file" name="Foto" id="Foto">
    <br>
    <label for="Enviar"> Enviar </label>
    <input type="submit" value="Enviar">

</form>
