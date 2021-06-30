<div class="form-group">
    <label for="dui">DUI</label>
    <input type="text" name="dui" id="dui" placeholder="Ingresa el nombre" class="form-control @error('dui') is-invalid @enderror" value="{{ old('dui') }}" required>
    @error('dui')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="ruc">Código</label>
    <input type="text" name="ruc" id="ruc" placeholder="Ingresa el nombre" class="form-control @error('ruc') is-invalid @enderror" value="{{ old('ruc') }}">
    @error('ruc')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="address">Dirección</label>
    <input type="text" name="address" id="address" placeholder="Ingresa el nombre" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
    @error('address')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="address">Teléfono/Celular</label>
    <input type="text" name="phone" id="phone" placeholder="Ingresa el nombre" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
    @error('phone')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="address">Correo Electrónico</label>
    <input type="email" name="email" id="email" placeholder="Ingresa el nombre" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>