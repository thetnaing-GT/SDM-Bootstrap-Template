<select name="{{ $name }}" class="form__select form-control" {{ $attributes }}>
    {{-- @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} {{ $attributes }}>
            {{ $label }}</option>
    @endforeach --}}
    {{ $slot }}
</select>
