<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="email">Correo</label>
    <input type="email" name="email" id="email" placeholder="Ingresa el correo" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
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
