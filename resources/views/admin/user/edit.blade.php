@extends('layouts.admin')

@section('title', 'Editar Usuario ' . $user->name)

@section('styles')
  
@endsection

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      Editar Usuario {{ $user->name }}
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Panel Administrativo</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuarios</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Usuario {{ $user->name }}</li>
      </ol>
    </nav>
  </div>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">Editar Usuario {{ $user->name }}</h4>
        </div>
        {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT', 'files' => true]) !!}
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" placeholder="Ingresa el correo" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Ingresa la contraseña" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <h3 class="font-weight-normal text-muted">Listado de Roles</h3>
            @foreach ($roles as $role)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="{{ $role->id }}" id="role-{{ $role->id }}">
                    <label class="custom-control-label" for="role-{{ $role->id }}">{{ $role->name }}</label>
                </div>
            @endforeach
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <a href="{{ route('users.index') }}" class="btn btn-light">Cancelar</a>
        {!! Form::close() !!}
      </div>
    </div>
</div>

@section('scripts')
  {{ Html::script("js/dropify.js") }}
@endsection
@endsection