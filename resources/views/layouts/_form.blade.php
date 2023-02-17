@auth
<div class="row justify-content-center mt-5 my-card">
            <div class="col-12 col-md-6 ">
                <h3 class="text-center">Añade una nueva cervecería</h3>
                <form action='/cervecerias' method='POST'>
                <div class="mb-3">
                    @csrf
                    <label for="inputName" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Ejem: Cervecería San Jorge" aria-describedby="nameHelp" name="name">
                    <div id="nameHelp" class="form-text">Introduzca el nombre de la cervecería.</div>
                    <label for="inputCapacity" class="form-label">Capacidad:</label>
                    <input type="number" class="form-control" id="inputCapacity" placeholder="Ejem: 50" aria-describedby="capacityHelp" name="capacity">
                    <div id="capacityHelp" class="form-text">Introduzca el aforo de la cervecería.</div>
                    <label for="inputDescription" class="form-label">Descripción:</label>
                    <input type="text" class="form-control" id="inputDescription" placeholder="Ejem: La mejor de toda España" aria-describedby="descriptionHelp" name="description">
                    <div id="descriptionHelp" class="form-text">Introduzca una descripción de su cervecería.</div>
                    <label for="inputImagen" class="form-label">Url de la imagen:</label>
                    <input type="text" class="form-control" id="inputImagen" placeholder="Ejem: http://imagenes.google.com/f7ds3jkkjf7" aria-describedby="imagenHelp" name="imagen">
                    <div id="imagenHelp" class="form-text">Introduzca el url de la imagen.</div>
                    <label for="inputMap" class="form-label">Url del Mapa:</label>
                    <input type="text" class="form-control" id="inputImagen" placeholder="Ejem: https://www.google.com/maps/embed?pb=..." aria-describedby="mapHelp" name="map">
                    <div id="mapHelp" class="form-text">Introduzca el url del mapa.</div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class=" btn btn-outline-danger rounded-pill">Enviar</button>
                </div>
            </form>
            
        </div>
    </div>
@endauth