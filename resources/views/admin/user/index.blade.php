@extends('layouts.admin')

@section('title', 'Gestión de Usuarios')

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Usuarios
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
      </ol>
    </nav>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
          <h4 class="card-title">Usuarios</h4>
          <div class="nav-link">
            {{-- <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">English</span> --}}
          <i class="fas fa-ellipsis-v" data-toggle="dropdown"></i>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
            <a class="dropdown-item font-weight-medium" href="{{ route('users.create') }}">
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
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                  <tr>
                    <td><a href="{{ route('users.show', $user) }}">{{ $user->id }}</a></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      {!! Form::open(['route' => ['users.destroy', $user], 'method' => 'DELETE']) !!}
                      <a href="{{ route('users.edit', $user) }}" class="jsgrid-button jsgrid-edit-button text-info" title=""><i class="fas fa-edit"></i></a>
                      <a href="{{ route('users.show', $user) }}" class="jsgrid-button jsgrid-edit-button text-warning" title=""><i class="fas fa-eye"></i></a>
                      <button type="submit" class="jsgrid-button jsgrid-delete-button text-danger" title="Eliminar usuario {{ $user->name }}" style="border: none; background: none; padding: 0;"><i class="far fa-trash-alt"></i></button>
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