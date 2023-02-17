@extends('layouts.base')
@section('title','Cerveceria')
    @section('content')
    <div class="container d-flex ">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class='my-cardtitle '>{{$brewery->name}}</h1>
            </div>
            <div class="row my-card shadow mt-5 justify-content-center">
                <div class="col-12 col-lg-6 mt-5 mb-5 align-self-center">
                    <img class=" rounded shadow border" src="{{$brewery->imagen}}" alt="" width="100%;">
                </div>
                <div class="col-12 col-lg-6 mt-5 mb-5 text-center">
                    <h3>Descripción // <span>Aforo: {{$brewery->capacity}} personas</span></h3>
                    <p>{{$brewery->description}}</p>
                    <iframe src="{{$brewery->map}}" width="100%;" height="230" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="row my-card shadow pt-3 pb-3 mt-5">
                <div class="col-12">
                    <h3 class="text-center mb-5">Cervezas que despachan</h3>
                </div>
                <div class="col-12 col-lg-3 d-flex justify-content-center">
                    <img src="https://www.loypar.com/17178-large_default/cerveza-cruzcampo-25cl-24u.jpg" width="80%;" class="rounded-circle border" alt="">
                </div>
                <div class="col-12 col-lg-3 d-flex justify-content-center">
                    <img src="https://pollossanjuan.es/wp-content/uploads/2018/05/51D1Zi4vzqL._SL1000_.jpg" width="80%;" class="rounded-circle border" alt="">
                </div>
                <div class="col-12 col-lg-3 d-flex justify-content-center">
                    <img src="https://s1.eestatic.com/2019/03/29/cocinillas/actualidad-gastronomica/actualidad_gastronomica_386972389_119067236_1280x1280.jpg" width="80%;" class="rounded-circle border" alt="">
                </div>
                <div class="col-12 col-lg-3 d-flex justify-content-center">
                    <img src="https://cemacogt.vtexassets.com/arquivos/ids/394960-800-800?v=638119806138600000&width=800&height=800&aspect=true" width="80%;" class="rounded-circle border" alt="">
                </div>
            </div>
            @auth
            @if (Request()->user()->id !== $brewery->user_id)
            @else
            <!-- al hacer click en el enlace con icono, aparece el contenido -->
            <button id="boton" class="btn btn-danger mt-5" type="submit"><i class="far fa-edit"></i></button><br>
            <div id="cont5" style="display: none;">@include('layouts._formupdel')</div>
            @endif
            @endauth
        </div>
    </div>
    <script>
          
    

    </script>
    @endsection