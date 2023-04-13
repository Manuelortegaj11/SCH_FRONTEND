@extends('layouts.admin')

@section('titulo')
<div class="">
<h1  class="fa-solid fa-user-doctor"></h1>
</div>
@endsection

@section('contenido')
<div class="d-flex justify-content-end">
    <a href="{{route('pacientes.create')}}" class="btn btn-light btn-circle">
        <i class="fa-solid fa-user-plus"></i>
    </a>
</div>


<div class="card">
    <div class="card-body">
        <table id="dt-pacients" class="table table-striped table-bordered dts text-dark">
            <thead>
                <tr>
                    <th class="text-center">Paciente</th>
                    <th class="text-center">Cedula</th>
                    <th class="text-center">Celular</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Editar</th>
                    <th class="text-center">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>Willian Pallares</td>
                    <td>1004826382</td>
                    <td>3067423892</td>
                    <td>WilliamP@gmail.com</td>
                    <td><a href="" class="edit-form-data" data-toggle="modal" data-target="#editMdl">
                        <!-- <i class="fa-solid fa-edit"></i> -->
                        <i class="fa-solid fa-folder-open"></i>
                    </a></td>
                    <td><a href="" class="delete-form-data" data-toggle="modal" data-target="#deleteMdl">
                        <!-- <i class="fa-solid fa-trash"></i> -->
                        <i class="far fa-trash-alt"></i>
                    </a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection


@push('styles')
    <link rel="stylesheet" href="{{asset('libs/datatables/dataTables.bootstrap4.min.css')}}">
@endpush


@push('scripts')
    <script src="{{asset('/libs/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endpush