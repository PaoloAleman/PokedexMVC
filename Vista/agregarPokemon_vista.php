<h1>Agregar pokemón</h1>
<form method="post" action="../Modelo/Pokemones_model.php" enctype="multipart/form-data">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <br><br>
    <label for="codigo">Código</label>
    <input type="number" name="codigo">
    <br><br>
    <label for="imagen">Imagen</label>
    <input type="file" name="imagen">
    <br><br>
    <label for="tipo">Tipo</label>
    <select name="tipo">
        <option value="fuego">Fuego</option>
        <option value="hoja">Hoja</option>
        <option value="agua">Agua</option>
        <option value="rayo">Rayo</option>
    </select>
    <br><br>
    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion">
    <br><br>
    <input type="submit" name="agregarPokemon" value="Agregar Pokemón">
</form>
