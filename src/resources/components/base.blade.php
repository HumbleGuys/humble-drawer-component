@props([
    'name',
    'transitionName' => null,
    'activeBodyClass' => '',
    'defaultOpen' => false,
    'placement' => 'right'
])

<div
    x-data="drawer({
        id: '{{ $name }}',
        activeBodyClass: '{{ $activeBodyClass }}',
        defaultOpen: {{ json_encode($defaultOpen) }}
    })"
    x-show="isOpen"
    class="drawer {{ $placement }}"
    role="region"
    tabindex="-1"
    x-cloak
>
    {!! $slot !!}
</div>

@once
    @push('head')
        <link rel="stylesheet" href="{{ asset('../vendor/humble-guys/humble-drawer-component/public/resources/dist/assets/index.c8fd9a66.css') }}">
        <script module defer src="{{ asset('../vendor/humble-guys/humble-drawer-component/public/resources/dist/assets/index.212d43d8.js') }}"></script>
    @endpush   
@endonce 