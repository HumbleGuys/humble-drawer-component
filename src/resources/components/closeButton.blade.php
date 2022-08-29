<button
    type="button"
    {{ $attributes->merge(['title' => 'Stäng', 'aria-label' => 'Stäng']) }}
    @click="close"
>
    {!! $slot !!}
</button>