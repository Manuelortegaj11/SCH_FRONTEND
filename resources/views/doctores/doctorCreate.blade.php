@extends('layouts.admin')

@section('titulo')
<div class="">
<h1  class="fa-solid fa-user-doctor"></h1>
</div>
@endsection

@section('contenido')
<div class="d-flex justify-content-end">
    <a class="text-xl" href="{{ url('/doctores')}}"><h1 class="fa-solid fa-arrow-left"></h1></a>
</div>
<div class="card text-dark">
    <div class="card-body">
        <form action ="" method="" enctype="multipart/form-data">
            @include('doctores.doctorForm',['modo'=>'Crear'])';
        </form>
    </div>
</div>
@endsection