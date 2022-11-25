<div class="form-floating mb-3">
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}">
    <label for="{{ $name }}">{{ $title }} @isset($isrequired)
            <sup class="text-danger">*</sup>
        @endisset
    </label>
</div>
