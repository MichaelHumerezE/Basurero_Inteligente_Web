@csrf
<div class="row">
    <div class="col-12">
        <div class="form-floating">
            <input type="text" placeholder="tipo" class="form-control" name="tipo"
                value="{{ isset($basura) ? $basura->tipo : old('tipo') }}">
            <label>Nombre</label>
        </div>
    </div>
</div>
