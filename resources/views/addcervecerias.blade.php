@extends('layouts.base')
@section('content')
<div class="container" style="height: 75vh;">
@include('layouts._form')
@if (Request()->user() == null)<h3 class="text-center bg-danger rounded p-5 font-monospace align-middle mt-5">"No estas Logueado, logueate y vuelve a la página"</h3>@endif
</div>
@endsection

