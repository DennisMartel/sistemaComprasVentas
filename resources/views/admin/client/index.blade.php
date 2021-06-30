@extends('layouts.admin')

@section('title', 'Gestión de Clientes')

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Clientes
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item active" aria-current="page">Clientes</li>
      </ol>
    </nav>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
          <h4 class="card-title">Clientes</h4>
          <div class="nav-link">
            {{-- <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">English</span> --}}
          <i class="fas fa-ellipsis-v" data-toggle="dropdown"></i>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
            <a class="dropdown-item font-weight-medium" href="{{ route('clients.create') }}">
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
                    <th>DUI</th>
                    <th>Nombre</th>
                    <th>Telefóno/Celular</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($clients as $client)
                  <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->dui }}</td>
                    <td><a href="{{ route('clients.show', $client) }}">{{ $client->name }}</a></td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                      {!! Form::open(['route' => ['clients.destroy', $client], 'method' => 'DELETE']) !!}
                      <a href="{{ route('clients.edit', $client) }}" class="jsgrid-button jsgrid-edit-button" title="Editar categoria {{ $client->name }}"><i class="fas fa-edit"></i></a>
                      
                      <button type="submit" class="jsgrid-button jsgrid-delete-button text-danger" title="Eliminar categoria {{ $client->name }}" style="border: none; background: none; padding: 0;"><i class="far fa-trash-alt"></i></button>
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