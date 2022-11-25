<div class="form-floating mb-3">
    <textarea class="form-control" name="{{ $name }}" id="{{ $name }}" row="30" placeholder="{{ $placeholder }}" @isset($isrequired) required @endisset>{{ $value }}</textarea>
    <label for="{{ $name }}">{{ $title }} 
        @isset($isrequired)
            <sup class="text-danger">*</sup>
        @endisset
    </label>
</div>
