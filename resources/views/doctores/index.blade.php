@extends('layouts.admin')

@section('titulo')
<span><i class="fa-solid fa-user-doctor"></i> Doctores</span>
@endsection

@section('contenido')
<div class="d-flex justify-content-end">
    <a href="{{ route('doctores.create') }}" class="btn btn-light  btn-circle" >
        <i class="fa-solid fa-user-plus"></i>
    </a> 
</div>
<div class="card ">
    <div class="card-body">
        <table id="dt-doctors" class="table table-striped table-bordered dts text-dark">
            <thead>
                <tr>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Identificacion</th>
                    <th class="text-center">Prestador</th>
                    <th class="text-center">Especialidad</th>
                    <th class="text-center">Editar</th>
                    <th class="text-center">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>Angelo Pallares</td>
                    <td>1004826382</td>
                    <td>Si</td>
                    <td>Cirujano de software</td>
                    <td><a href="{{ url('/doctores/1/edit') }}" class="edit-form-data"><i class="fa-solid fa-folder-open"></i></a></td>
                    <td><a href="" class="delete-form-data"><i class="far fa-trash-alt"></i></a></td>
                </tr>
                <tr class="text-center">
                    <td>William Pallares</td>
                    <td>1004826382</td>
                    <td>Si</td>
                    <td>Cirujano de software</td>
                    <td><a href="{{ url('/doctores/1/edit') }}" class="edit-form-data"><i class="fa-solid fa-folder-open"></i></a></td>
                    <td><a href="" class="delete-form-data"><i class="far fa-trash-alt"></i></a></td>
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