@props(['attributes' => []])

<select {{ $attributes->merge(['class' => 'form-control sdm__select']) }}>
    {{ $slot }}
</select>
