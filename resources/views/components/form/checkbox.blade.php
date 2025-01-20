@props(['name', 'value' => '', 'label', 'attributes' => [], 'class' => ''])

<div class="sdm__checkbox {{ $attributes->get('class') }}">
    <input type="checkbox" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}"
        class="sdm__checkbox__input" {{ $attributes }} />
    <label for="{{ $name }}" class="sdm__checkbox__label {{ $class }}">
        {{ $label }}
        @if (trim($slot) !== '')
            <span>
                ({{ $slot }})
            </span>
        @endif
    </label>
</div>
