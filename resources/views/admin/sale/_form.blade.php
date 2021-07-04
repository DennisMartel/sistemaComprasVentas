<div class="form-group">
    <label for="client_id">Cliente</label>
    <select name="client_id" id="client_id" class="form-control @error('client_id') is-invalid @enderror" value="{{ old('client_id') }}">
        <option value="">Selecciona el Cliente</option>
        @foreach($clients as $client)
            <option value="{{ $client->id }}">{{ $client->name }}</option>
        @endforeach
    </select>
    @error('client_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="tax">Impuesto</label>
    <input type="text" name="tax" id="tax" placeholder="Ingresa el nombre" class="form-control @error('tax') is-invalid @enderror" value="{{ old('tax') }}">
    @error('tax')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="product_id">Producto</label>
    <select name="product_id" id="product_id" class="form-control @error('product_id') is-invalid @enderror" value="{{ old('product_id') }}">
        <option value="">Selecciona el Producto</option>
        @foreach($products as $product)
            <option value="{{ $product->id }}_{{ $product->stock }}_{{ $product->sell_price }}">{{ $product->name }}</option>
        @endforeach
    </select>
    @error('product_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="stock">Stock Actual</label>
    <input type="text" name="stock" id="stock" placeholder="" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}" disabled>
    @error('stock')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="quantity">Cantidad</label>
    <input type="number" name="quantity" id="quantity" min="1" placeholder="" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}">
    @error('quantity')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="sell_price">Precio de Venta</label>
    <input type="number" name="sell_price" id="price" step="0.01" min="0.01" placeholder="" class="form-control @error('sell_price') is-invalid @enderror" value="{{ old('sell_price') }}" disabled>
    @error('sell_price')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="discount">Porcentaje de Descuento (%)</label>
    <input type="number" name="discount" id="discount" step="" min="0" max="100" placeholder="1" class="form-control @error('discount') is-invalid @enderror" value="{{ old('discount') }}">
    @error('discount')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <button type="button" id="agregar" class="btn btn-success float-right">Agregar producto</button>
</div>
<div class="form-group">
    <h4 class="card-title">Detalles de venta</h4>
    <div class="table-responsive col-md-12">
        <table id="detalles" class="table">
            <thead>
                <tr>
                    <th>Eliminar</th>
                    <th>Producto</th>
                    <th>Precio Venta</th>
                    <th>Descuento</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan="5">
                        <p align="right">TOTAL:</p>
                    </th>
                    <th>
                        <p align="right"><span id="total">0.00</span> </p>
                    </th>
                </tr>
                <tr>
                    <th colspan="5">
                        <p align="right">TOTAL IMPUESTO (18%):</p>
                    </th>
                    <th>
                        <p align="right"><span id="total_impuesto">0.00</span></p>
                    </th>
                </tr>
                <tr>
                    <th colspan="5">
                        <p align="right">TOTAL PAGAR:</p>
                    </th>
                    <th>
                        <p align="right"><span align="right" id="total_pagar_html">0.00</span> <input type="hidden"
                                name="total" id="total_pagar"></p>
                    </th>
                </tr>
            </tfoot>
            <tbody>
            </tbody>
        </table>
    </div>
</div>