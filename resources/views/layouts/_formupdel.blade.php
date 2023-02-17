@auth
<div class="row justify-content-center mt-5 my-card">
    <div class="col-12">
        <div class="col d-flex justify-content-end">
        <button id="closeForm" class="btn mt-2" type="submit"><i class="far fa-times-circle fs-2 text-white "></i></button>
        </div>
        <h3 class="d-flex justify-content-center">Modificar cervecería</h3>
    </div>
    <div class="col-12 col-md-6">
        <form action="{{route('cervecerias.update', ['id'=>$brewery->id])}}" method='POST'>
            <div class="mb-3">
                @method('PUT')
                @csrf
                <label for="inputName" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="inputName" value="{{$brewery->name}}"
                    placeholder="Ejem: Cervecería San Jorge" aria-describedby="nameHelp" name="name">
                <div id="nameHelp" class="form-text">Introduzca el nombre de la cervecería.</div>
                <label for="inputCapacity" class="form-label">Capacidad:</label>
                <input type="number" class="form-control" id="inputCapacity" value="{{$brewery->capacity}}"
                    placeholder="Ejem: 50" aria-describedby="capacityHelp" name="capacity">
                <div id="capacityHelp" class="form-text">Introduzca el aforo de la cervecería.</div>
                <label for="inputDescription" class="form-label">Descripción:</label>
                <input type="text" class="form-control" id="inputDescription" value="{{$brewery->description}}"
                    placeholder="Ejem: La mejor de toda España" aria-describedby="descriptionHelp" name="description">
                <div id="descriptionHelp" class="form-text">Introduzca una descripción de su cervecería.</div>
                <label for="inputImagen" class="form-label">Url de la imagen:</label>
                <input type="text" class="form-control" id="inputImagen" value="{{$brewery->imagen}}"
                    placeholder="Ejem: http://imagenes.google.com/f7ds3jkkjf7" aria-describedby="imagenHelp"
                    name="imagen">
                <div id="imagenHelp" class="form-text">Introduzca el url de la imagen.</div>
                <label for="inputMap" class="form-label">Url del Mapa:</label>
                <input type="text" class="form-control" id="inputImagen" value="{{$brewery->map}}"
                    placeholder="Ejem: https://www.google.com/maps/embed?pb=..." aria-describedby="mapHelp" name="map">
                <div id="mapHelp" class="form-text">Introduzca el url del mapa.</div>
            </div>
            <div class="col-12 d-flex justify-content-center mb-3">
                <button type="submit" class="btn btn-outline-danger rounded-pill">Modificar</button>
            </div>
        </form>
        <form action="{{route('cervecerias.delete', ['id'=>$brewery->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <div class='text-center'><button class="btn btn-outline-danger rounded-pill" type="submit">Eliminar</button>
            </div>
        </form>

    </div>
</div>
@endauth
