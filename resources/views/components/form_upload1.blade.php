<div class="form-group row">
    <label class="col-md-3 col-form-label"><strong>{{ $label }}</strong></label>
    <div class="col-md-9">
        <input type="text" class="form-control" id="{{ $id }}" name="{{ $id }}" value="{{ $value ?? '' }}">
    </div>
</div>