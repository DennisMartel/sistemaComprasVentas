<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="email">Correo</label>
    <input type="email" name="email" id="email" placeholder="ejemplocorreo@gmail.com" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="ruc_number">Código</label>
    <input type="text" name="ruc_number" id="ruc_number" placeholder="12345678" class="form-control @error('ruc_number') is-invalid @enderror" value="{{ old('ruc_number') }}" required>
    @error('ruc_number')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="address">Dirección</label>
    <input type="text" name="address" id="address" placeholder="" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
    @error('address')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="phone">Telefóno/Celular</label>
    <input type="text" name="phone" id="phone" placeholder="" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
    @error('phone')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>