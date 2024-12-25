@props(['type' => 'button', 'class' => 'btn-primary'])

<button type="{{ $type }}" {{ $attributes }} {{ $attributes->merge(['class' => 'btn ' . $class]) }}>
    <span class="indicator-label"> {{ $slot }} </span>
    <span class="indicator-progress">Processing ...
        <span class="align-middle spinner-border spinner-border-sm ms-2"></span></span>
</button>
