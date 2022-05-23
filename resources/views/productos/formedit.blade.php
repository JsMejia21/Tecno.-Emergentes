<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="codProd">Código</label>
            <input type="text" name="codProd" class="form-control form-control-sm col-sm-4" id="codProd" value="{{ $productos->codProd }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="nameProd">Nombre del Producto</label>
            <input type="text" name="nameProd" class="form-control form-control-sm col-sm-10" id="nameProd" value="{{ $productos->nameProd }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="descrProd">Descripción</label>
            <input type="text" name="descrProd" class="form-control form-control-sm col-sm-10" id="descrProd" value="{{ $productos->descrProd }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="priceUnit">Precio</label>
            <input type="number" name="priceUnit" class="form-control form-control-sm col-sm-4" id="priceUnit" step="0000.0001" value="{{ $productos->priceUnit }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="cantExist">Cantidad</label>
            <input type="number" name="cantExist" class="form-control form-control-sm col-sm-4" id="cantExist" step="1" value="{{ $productos->cantExist }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="codCateg">Categoria</label>
            <!-- <input type="text" name="codCateg" class="form-control form-control-sm col-sm-10" id="codCateg" placeholder="Electrodomestico"> -->
            <select id="codCateg" name="codCateg" class="form-control form-control-sm col-sm-10">
                <!-- <option value="Camas">Camas</option> -->
                <option value="Camas"<?php echo ($productos->codCateg=='Camas')?'selected="selected"':''; ?>>Camas</option>
                <option value="Cocinas"<?php echo ($productos->codCateg=='Cocinas')?'selected="selected"':''; ?>>Cocinas</option>
                <option value="Electrodomesticos"<?php echo ($productos->codCateg=='Electrodomesticos')?'selected="selected"':''; ?>>Electrodomesticos</option>
                <option value="Electronicos"<?php echo ($productos->codCateg=='Electronicos')?'selected="selected"':''; ?>>Electronicos</option>
                <option value="Lavadoras"<?php echo ($productos->codCateg=='Lavadoras')?'selected="selected"':''; ?>>Lavadoras</option>
                <option value="Muebles"<?php echo ($productos->codCateg=='Muebles')?'selected="selected"':''; ?>>Muebles</option>
                <option value="Refrigeracion"<?php echo ($productos->codCateg=='Refrigeracion')?'selected="selected"':''; ?>>Refrigeracion</option>
                <option value="TVs"<?php echo ($productos->codCateg=='TVs')?'selected="selected"':''; ?>>TVs</option>
                <!-- <option value="Cocinas">Cocinas</option> 
                <option value="Electrodomesticos">Electrodomesticos</option>
                <option value="Electronicos">Electronicos</option>
                <option value="Lavadoras">Lavadoras</option>
                <option value="Muebles">Muebles</option>
                <option value="Refrigeracion">Refrigeracion</option>
                <option value="TVs">TVs</option> --> 
            </select> 
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="codAlmac">Almacen</label>
            <!-- <input type="text" name="codAlmac" class="form-control form-control-sm col-sm-10" id="codAlmac" placeholder="Santa Ana"> -->
            <select id="codAlmac" name="codAlmac" class="form-control form-control-sm col-sm-10">
                <option value="Santa Ana"<?php echo ($productos->codAlmac=='Santa Ana')?'selected="selected"':''; ?>>Santa Ana</option>
                <option value="San Salvador"<?php echo ($productos->codAlmac=='San Salvador')?'selected="selected"':''; ?>>San Salvador</option>
                <option value="San Miguel"<?php echo ($productos->codAlmac=='San Miguel')?'selected="selected"':''; ?>>San Miguel</option>
                <!-- <option value="Santa Ana">Santa Ana</option>
                <option value="San Salvador">San Salvador</option>
                <option value="San Miguel">San Miguel</option>-->
            </select> 
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <img src="#" class="form-group col" id="imagenSeleccionada" style="max-height: 300px;">
            <?php var_dump($productos->imaProd); ?>
            <label class="form-group col" for="imaProd">Imagen</label>
            <input type="file" class="form-group col" id="imaProd" name="imaProd">
        </div>
    </div>
</div>
<div class="modal-footer">
    <a href="{{ route('productos') }}" class="link btn btn-secondary">Cancelar</a>
    <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
</div>
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