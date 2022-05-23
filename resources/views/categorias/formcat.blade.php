<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="codCat">Código</label>
            <input type="text" name="codCat" class="form-control form-control-sm col-sm-4" id="codCat" placeholder="Ej: AA-0001">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="nameCat">Nombre de la categoria</label>
            <input type="text" name="nameCat" class="form-control form-control-sm col-sm-10" id="nameCat" placeholder="Nombre de la categoria">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="descrCat">Descripción</label>
            <input type="text" name="descrCat" class="form-control form-control-sm col-sm-10" id="descrCat" placeholder="Descripción de la categoria">
        </div>
    </div>
</div>
    <div class="modal-footer">
        <a href="{{ route('categorias') }}" class="link btn btn-secondary">Cancelar</a>
        <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
    </div>
