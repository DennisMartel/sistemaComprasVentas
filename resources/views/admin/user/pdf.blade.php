<!DOCTYPE>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Reporte de Venta</title>
<style>
    body {
        /*position: relative;*/
        /*width: 16cm;  */
        /*height: 29.7cm; */
        /*margin: 0 auto; */
        /*color: #555555;*/
        /*background: #FFFFFF; */
        font-family: Arial, sans-serif;
        font-size: 14px;
        /*font-family: SourceSansPro;*/
    }
    #datos {
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
        /*text-align: justify;*/
    }
    #encabezado {
        text-align: center;
        margin-left: 35%;
        margin-right: 35%;
        font-size: 15px;
    }
    #fact {
        /*position: relative;*/
        float: right;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 20px;
        background: #33AFFF;
    }
    section {
        clear: left;
    }
    #cliente {
        text-align: left;
    }
    #faproveedor {
        width: 40%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }
    #fac,
    #fv,
    #fa {
        color: #FFFFFF;
        font-size: 15px;
    }
    #faproveedor thead {
        padding: 20px;
        background: #33AFFF;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;
    }
    #facVENTAdor {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }
    #facVENTAdor thead {
        padding: 20px;
        background: #33AFFF;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }
    #facproducto {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }
    #facproducto thead {
        padding: 20px;
        background: #33AFFF;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }
</style>

<body>
  
    <header>
        {{--  <div id="logo">
            <img src="img/logo.png" alt="" id="imagen">
        </div>  --}}
        <div>
            <table id="datos">
                <thead>
                    <tr>
                        <th id="">DATOS DEL VENDEDOR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <p id="proveedor">Nombre: {{$sale->user->name}}<br>
                                {{--  {{$sale->user->document_type}}-VENTA: {{$sale->user->document_number}}<br>  --}}
                                {{-- Dirección: {{$sale->user->address}}<br>
                                Teléfono: {{$sale->user->phone}}<br> --}}
                                Email: {{$sale->user->email}}</p>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="fact">
            {{--  <p>{{$sale->user->document_type}} VENTA<br />
                {{$sale->user->document_number}}</p>  --}}
                <p>NUMERO DE VENTA<br />
                    {{$sale->id}}</p>
        </div>
    </header>
    <br>

    <section>
        <div>
            <table id="facproducto">
                <thead>
                    <tr id="fa">
                        <th>Producto</th>
                        <th>Precio Venta</th>
                        <th>Cantidad</th>
                        <th>Descuento (%)</th>
                        <th>Subtotal</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach($saleDetails as $saleDetail)
                        <tr>
                        <td>{{ $saleDetail->product->name }}</td>
                        <td>${{ $saleDetail->price }}</td>
                        <td>{{ $saleDetail->quantity }}</td>
                        <td>{{ $saleDetail->discount }}%</td>
                        <td>${{ number_format(($saleDetail->quantity*$saleDetail->price)-($saleDetail->quantity*$saleDetail->price*$saleDetail->discount/100), 2, '.', ',') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4"><p class="float-right">SUBTOTAL:</p></th>
                        <th><p class="float-right">${{number_format($subtotal, 2, '.', ',')}}</p></th>
                    </tr>
                    <tr>
                        <th colspan="4"><p class="float-right">TOTAL IMPUESTO ({{$sale->tax}}%):</p></th>
                        <th><p class="float-right">${{number_format($subtotal * $sale->tax/100, 2, '.', ',')}}</p></th>
                    </tr>
                    <tr>
                        <th colspan="4"><p class="float-right">TOTAL:</p></th>
                        <th><p class="float-right">${{number_format($sale->total, 2, '.', ',')}}</p></th>
                    </tr>
    
                </tfoot>
            </table>
        </div>
    </section>
    <br>
    <br>
    <footer>
        <!--puedes poner un mensaje aqui-->
        <div id="datos">
            <p id="encabezado">
                {{--  <b>{{$company->name}}</b><br>{{$company->description}}<br>Telefono:{{$company->telephone}}<br>Email:{{$company->email}}  --}}
            </p>
        </div>
    </footer>
</body>

</html>