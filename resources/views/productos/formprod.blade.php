<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="codProd">Código</label>
            <input type="text" name="codProd" class="form-control form-control-sm col-sm-4" id="codProd" placeholder="Ej: AA-0001">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="nameProd">Nombre del Producto</label>
            <input type="text" name="nameProd" class="form-control form-control-sm col-sm-10" id="nameProd" placeholder="Nombre del producto">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="descrProd">Descripción</label>
            <input type="text" name="descrProd" class="form-control form-control-sm col-sm-10" id="descrProd" placeholder="Descripción del producto">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="priceUnit">Precio</label>
            <input type="number" name="priceUnit" class="form-control form-control-sm col-sm-4" id="priceUnit" step="0000.0001" placeholder="000.000">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="cantExist">Cantidad</label>
            <input type="number" name="cantExist" class="form-control form-control-sm col-sm-4" id="cantExist" placeholder="0000">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="codCateg">Categoria</label>
            <!-- <input type="text" name="codCateg" class="form-control form-control-sm col-sm-10" id="codCateg" placeholder="Electrodomestico"> -->
            <select id="codCateg" name="codCateg" class="form-control form-control-sm col-sm-10">
                <option value="Camas">Camas</option>
                <option value="Cocinas">Cocinas</option>
                <option value="Electrodomesticos">Electrodomesticos</option>
                <option value="Electronicos">Electronicos</option>
                <option value="Lavadoras">Lavadoras</option>
                <option value="Muebles">Muebles</option>
                <option value="Refrigeracion">Refrigeracion</option>
                <option value="TVs">TVs</option>
            </select> 
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="codAlmac">Almacen</label>
            <!-- <input type="text" name="codAlmac" class="form-control form-control-sm col-sm-10" id="codAlmac" placeholder="Santa Ana"> -->
            <select id="codAlmac" name="codAlmac" class="form-control form-control-sm col-sm-10">
                <option value="Santa Ana">Santa Ana</option>
                <option value="San Salvador">San Salvador</option>
                <option value="San Miguel">San Miguel</option>
            </select> 
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <img class="form-group col" id="imagenSeleccionada" style="max-height: 300px;"> 
            <label class="form-group col" for="imaProd">Imagen</label>
            <input type="file" class="form-group col" id="imaProd" name="imaProd">
        </div>
    </div>
</div>
<div class="modal-footer">
    <a href="{{ route('productos') }}" class="link btn btn-secondary">Cancelar</a>
    <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
</div>

<!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script>   
    $(document).ready(function (e) {   
        $('#imaProd').change(function(){            
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#imagenSeleccionada').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script>