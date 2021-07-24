@extends('layouts.admin')

@section('title', 'Gestión de Permisos')

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Permisos
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item active" aria-current="page">Permisos</li>
      </ol>
    </nav>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
          <h4 class="card-title">Permisos</h4>
          <div class="nav-link">
            {{-- <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">English</span> --}}
          <i class="fas fa-ellipsis-v" data-toggle="dropdown"></i>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
            <a class="dropdown-item font-weight-medium" href="{{ route('permissions.create') }}">
              Agregar
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Permiso</th>
                    <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($permissions as $permission)
                  <tr>
                    <td>{{ $permission->id }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>
                      {!! Form::open(['route' => ['permissions.destroy', $permission], 'method' => 'DELETE']) !!}
                      <button type="submit" class="jsgrid-button jsgrid-delete-button text-danger" title="Eliminar usuario {{ $permission->name }}" style="border: none; background: none; padding: 0;"><i class="far fa-trash-alt"></i></button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@section('scripts')
  {{ Html::script("js/data-table.js") }}
@endsection
@endsection