<x-layout>
    Drawer

    <x-drawer::base name="test">
        <x-drawer::backdrop />

        <x-drawer::inner style="background-color: #fff">
            INNER
        </x-drawer::inner>
    </x-drawer::base>

    <button 
        @click="$store.drawer.toggle('test')"
        x-data    
    >
        show
    </button>
</x-layout>