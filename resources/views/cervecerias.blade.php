@extends('layouts.base')
@section('title','Cervecerías')
@section('content')
@push('style h1')
<style>
    h1{
        color:orange;
    }
    p{
        font-style: italic;
    }
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
<div class="container" style="">
    <div class="row text-center mt-5 mb-5">
        <div class="col-12 my-cardtitle">
            <h1 class="display-4">@yield('title')</h1>
            <p>"Estas son nuestras cervecerías recomendadas"</p>
        </div>
    </div>
    <div class="row d-flex justify-content-evenly">
    @foreach($breweries as $brewery)
         <div class="col-12 col-md-3 my-card mb-2 me-1 mt-2 text-center d-flex justify-content-center" style="">
            <div class="row">
                <div class="col-12">
                    <img src="{{$brewery->imagen}}" alt="" width="100%;" height="200vh;" class="rounded-circle shadow pe-2 pt-2 ps-2">
                </div>
                <div class="col-12">
                    <h3 class="fs-3 fw-bold">{{$brewery->name}} </h3>
                </div>
                <div class="col-12">
                    <div>{{$brewery->description}} </div>
                </div>
                <div class="col-12 align-self-end">
                    <a href="{{route("cerveceria",['id'=>$brewery->id])}}" class="btn btn-outline-danger rounded-pill mt-3 mb-1">Ir a la cervecería</a>
                </div>
            </div>
        
        </div>
        @endforeach
    </div>        
</div>
    

    



    @endsection
