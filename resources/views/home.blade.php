@extends('layouts.base')
@section('title','Home')
@section('content')
@push('footerbottom')
<style>

</style> 
<div class="container" style="">
    <div class="row ">
        <div class="col-12 my-cardtitle mt-5 mb-5">
            <h1 class="text-center">Bienvenidos a Cervecerías<span>Website!</span></h1>
            <p class="text-center">"Si eres amante de la cerveza este es tu sitio"</p>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="my-card text-center" style="width: 60%">
                    <img src="https://images.unsplash.com/photo-1436076863939-06870fe779c2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" class="border shadow rounded mt-1 mb-2" width="95%;" alt="...">
                    <div class="">
                        <h3 class="">Vivimos la <span>cerveza!</span></h3>
                        <p class="">Cada día es único y que mejor que vivirlo con tu bebida favorita, no te quedes con las ganas celebra con ella tus ganas de vivir, tus logros, tus momentos especiales... Porque no existe herramienta social más potente que decir: "Vamos que te invito a una cerveza!" .</p>
                        <a href="{{'cervecerias'}}" class="btn btn-outline-danger rounded-pill btn-fs-4 mb-2">Entrar en cervecerías</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
