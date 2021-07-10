@extends('layouts.admin')

@section('title', 'Detalles del rol '. $role->id)

@section('styles')
  
@endsection

@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Detalle del Rol {{ $role->name }}
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Panel Administrativo</a></li>
          <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">roles</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalle del rol</li>
        </ol>
      </nav>
    </div>
    
  </div>
@section('scripts')
  {{ Html::script("js/data-table.js") }}
@endsection
@endsection