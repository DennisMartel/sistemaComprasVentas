<div class="form-group">
    <label for="name">Rol</label>
    <input type="name" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="permissions">Permisos</label>
    <select name="permissions" id="permissions" class="form-control @error('permissions') is-invalid @enderror" value="{{ old('permissions') }}">
        <option value="">Selecciona el Permiso</option>
        @foreach($permissions as $permission)
            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
        @endforeach
    </select>
    @error('permissions')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>