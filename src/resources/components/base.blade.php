@props([
    'name',
    'transitionName' => null,
    'activeBodyClass' => '',
    'defaultOpen' => false
])

<div
    x-data="drawer({
        id: '{{ $name }}',
        activeBodyClass: '{{ $activeBodyClass }}',
        defaultOpen: {{ json_encode($defaultOpen) }}
    })"
    x-show="isOpen"
    class="drawer"
    role="region"
    tabindex="-1"
    x-cloak
>
    {!! $slot !!}
</div>

@once
    @push('head')
        <link rel="stylesheet" href="{{ asset('../vendor/humble-guys/humble-drawer-component/src/resources/css/drawer.css') }}">
        <script module defer src="{{ asset('../vendor/humble-guys/humble-drawer-component/src/resources/js/drawer.js') }}"></script>
    @endpush   
@endonce 