@props([
    'name',
    'transitionName' => 'drawer',
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
    x-transition:enter="{{ $transitionName }}-enter"
    x-transition:enter-start="{{ $transitionName }}-enter-start"
    x-transition:enter-end="{{ $transitionName }}-enter-end"
    x-transition:leave="{{ $transitionName }}-leave"
    x-transition:leave-start="{{ $transitionName }}-leave-start"
    x-transition:leave-end="{{ $transitionName }}-leave-end"
    x-show="isOpen"
    id="{{ $name }}"
    {{ $attributes->merge(['class' => "drawer placement-{$placement}"]) }}
    role="region"
    tabindex="-1"
    x-cloak
>
    {!! $slot !!}
</div>

@once
    @push('head')
        <link rel="stylesheet" href="{{ asset('../vendor/humble-guys/humble-drawer-component/public/resources/dist/style.css?v=0.0.3') }}">
        <script module defer src="{{ asset('../vendor/humble-guys/humble-drawer-component/public/resources/dist/humble-drawer-component.umd.js?v=0.0.3') }}"></script>
    @endpush   
@endonce 