<select class="form-select {{ $class }}" name="{{ $name }}" id="{{ $id }}">
    <option selected>{{ $default }}</option>
    {{ $slot }}
</select>