@extends('layouts.admin')

@section('title', 'Gestión de Impresora')

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Impresora
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item active" aria-current="page">Impresora</li>
      </ol>
    </nav>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>{{ $printer->id }}</td>
                    <td>{{ $printer->name }}</td>
                    <td>
                      <a href="" class="jsgrid-button jsgrid-edit-button" title="Editar Impresora {{ $printer->name }}" data-toggle="modal" data-target="#exampleModal{{ $printer->id }}"><i class="fas fa-edit"></i></a>                      
                    </td>
                    <!-- Modal starts -->
                    <div class="modal fade" id="exampleModal{{ $printer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="{{ route('printers.update', $printer) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Impresora {{ $printer->name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Nombre de Impresora</label>
                                        <input type="text" name="name" id="name" value="{{ old('name', $printer->name) }}" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Guardar cambios</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Ends -->
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@section('scripts')
{{ Html::script("js/dropify.js") }}
@endsection
@endsection