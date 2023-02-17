@extends('layouts.base')
@section('title', 'Registrarse!')
@section('content')
@push('footerbottom')
<style>

</style>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-12 text-center my-cardtitle">
            <h1>@yield('title')</h1>
        </div>
    </div>
    <div class="row justify-content-center mt-5 my-card">
        <div class="col-12 col-md-6 mb-5 mt-5">
            <h3 class="text-center">Introduce tus datos de registro</h3>
            <form action='register' method='POST'>
                <div class="mb-3">
                    @csrf
                    <label for="inputName" class="form-label">Nombre Completo:</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Ejem: Pedro Picapiedra"
                        aria-describedby="nameHelp" name="name">
                    <div id="nameHelp" class="form-text">Introduzca su nombre completo.</div>
                    <label for="inputEmail" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Ejem: example@example.com"
                        aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">Introduzca su email si ya esta registrado.</div>
                    <label for="inputPassword" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder=""
                        aria-describedby="passwordHelp" name="password">
                    <div id="passwordHelp" class="form-text">Introduzca su nueva contraseña.</div>
                    <label for="inputPassword" class="form-label">Repita su contraseña:</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder=""
                        aria-describedby="passwordHelp" name="password_confirmation">
                    <div id="passwordHelp" class="form-text">Introduzca de nuevo su nueva contraseña.</div>
                    <!--                     <label for="inputDescription" class="form-label">Descripción:</label>
                        <input type="text" class="form-control" id="inputDescription" placeholder="Ejem: La mejor de toda España" aria-describedby="descriptionHelp" name="description">
                        <div id="descriptionHelp" class="form-text">Introduzca una descripción de su cervecería.</div>
                        <label for="inputImagen" class="form-label">Url de la imagen:</label>
                        <input type="text" class="form-control" id="inputImagen" placeholder="Ejem: http://imagenes.google.com/f7ds3jkkjf7" aria-describedby="imagenHelp" name="imagen">
                        <div id="imagenHelp" class="form-text">Introduzca el url de la imagen.</div> -->
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class=" btn btn-outline-danger rounded-pill">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
