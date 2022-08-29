<div class="drawer">
    {!! $slot !!}
</div>

@once
    @push('head')
        <link rel="stylesheet" href="{{ asset('../vendor/humble-guys/humble-drawer-component/src/resources/css/drawer.css') }}">
        <script src="{{ asset('../vendor/humble-guys/humble-drawer-component/src/resources/js/drawer.js') }}"></script>
    @endpush   
@endonce 