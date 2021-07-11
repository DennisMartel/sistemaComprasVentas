@extends('layouts.admin')

@section('title', 'Gestión de Empresa')

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Empresa
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item active" aria-current="page">Empresa</li>
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
                    <th>Dirección</th>
                    <th>Correo</th>
                    <th>NIT</th>
                    <th>Logo</th>
                    <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>{{ $business->id }}</td>
                    <td>{{ $business->name }}</td>
                    <td>{{ $business->address }}</td>
                    <td>{{ $business->mail }}</td>
                    <td>{{ $business->ruc }}</td>
                    <td><img src="{{ asset('image/logo/'.$business->logo) }}" alt="{{ $business->name }}"></td>
                    <td>
                      <a href="" class="jsgrid-button jsgrid-edit-button" title="Editar empresa {{ $business->name }}" data-toggle="modal" data-target="#exampleModal{{ $business->id }}"><i class="fas fa-edit"></i></a>                      
                    </td>
                    <!-- Modal starts -->
                    <div class="modal fade" id="exampleModal{{ $business->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="{{ route('business.update', $business) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Empresa {{ $business->name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ruc">NIT</label>
                                                <input type="text" name="ruc" id="ruc" value="{{ old('ruc', $business->ruc) }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nombre</label>
                                                <input type="text" name="name" id="name" value="{{ old('name', $business->name) }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mail">Correo</label>
                                        <input type="text" name="mail" id="mail" value="{{ old('mail', $business->mail) }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Dirección</label>
                                        <input type="text" name="address" id="address" value="{{ old('address', $business->address) }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descripción de la Empresa</label>
                                        <textarea name="description" id="description" rows="4" class="form-control">{{ old('description', $business->description) }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="logo">Logo de Empresa</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="picture" id="picture">
                                            <label class="custom-file-label" for="customFile">Seleccionar archivo...</label>
                                        </div>
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