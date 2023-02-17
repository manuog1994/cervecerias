@extends('layouts.base')
@section('title','Contacto')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-cardtitle text-center mt-3 mb-3">
            <h1>Formulario de @yield('title')</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center my-card mt-2">
        <h2 class="text-center mt-3 mb-3">Contacta con nosotros</h2>
        <div class="col-12 col-md-6 mt-5 mb-5">
            <form action="{{route('contact')}}" method='POST'>
                @csrf
                @if (session('success'))
                    <p class="text-center bg-success p-3 rounded">{{session('success')}}</p>
                @endif
                <div class="mb-3">
                    <label for="inputName" class="form-label">Nombre Completo</label>
                    <input type="text" placeholder="Antonio García Sanchez" class="form-control" id="inputName" aria-describedby="nameHelp" name="name">
                    <div id="nameHelp" class="form-text">Introduce tu nombre completo.</div>
                </div>
                <div class="mb-3">
                    <label for="inputEmail1" class="form-label">Email</label>
                    <input type="email" placeholder="name@example.com" class="form-control" id="inputEmail1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">Introduce tu email de contacto.</div>
                </div>
                <div class="mb-3">
                    <label for="inputPhone" class="form-label">Número de teléfono</label>
                    <input type="number" placeholder="666222333" class="form-control" id="inputPhone" aria-describedby="phoneHelp" name="phone">
                    <div id="phoneHelp" class="form-text">Introduce tu teléfono de contacto.</div>
                </div>
                <div class="mb-3">
                    <label for="formControlTextarea1" class="form-label">Asunto</label>
                    <textarea class="form-control" id="formControlTextarea1" rows="5" aria-describedby="subjectHelp" name="subject"></textarea>
                    <div id="subjectHelp" class="form-text">Escribe el asunto por el que contactas.</div>

                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-danger rounded-pill mt-3">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
