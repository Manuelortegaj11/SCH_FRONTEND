@extends('layouts.admin')
@section('titulo')
<div class="">
<h1  class="fa-solid fa-user"></h1>
</div>
@endsection

@section('contenido')
<div class="d-flex justify-content-end">
    <a class="text-xl" href="{{ url('/pacientes')}}"><h1 class="fa-solid fa-arrow-left"></h1></a>
</div>
    <div class="card text-dark">
        <div class="card-body">
            <form action="" method="" enctype="multipart/form-data">
                <ul class="nav nav-tabs mb-3" id="myTab0" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button href="#home0" class="nav-link active" id="home-tab0" data-mdb-toggle="tab" data-mdb-target="#home0" type="button" role="tab" aria-controls="home" aria-selected="true">Datos basicos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button href="#profile0" class="nav-link" id="profile-tab0" data-mdb-toggle="tab" data-mdb-target="#profile0" type="button" role="tab" aria-controls="profile" aria-selected="false">Otros datos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button href="#contact0" class="nav-link" id="contact-tab0" data-mdb-toggle="tab" data-mdb-target="#contact0" type="button" role="tab" aria-controls="contact" aria-selected="false">Salud</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent0">
                    <div class="tab-pane fade show active" id="home0" role="tabpanel" aria-labelledby="home-tab0">
                    <div class="card text-dark">
                        <div class="card-body">
                            <form action ="" method="" enctype="multipart/form-data">
                        @include('pacientes.pacienteFormA',['modo'=>'Editar'])
                            </form>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
                    <div class="card text-dark">
                        <div class="card-body">
                            <form action ="" method="" enctype="multipart/form-data">
                        @include('pacientes.pacienteFormB',['modo'=>'Editar'])
                        </form>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="contact0" role="tabpanel" aria-labelledby="contact-tab0">
                    <div class="card text-dark">
                        <div class="card-body">
                            <form action ="" method="" enctype="multipart/form-data">
                        @include('pacientes.pacienteFormC',['modo'=>'Editar'])
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
