<x-layout>
    <x-drawer::base 
        name="right"
        placement="right"    
    >
        <x-drawer::backdrop />

        <x-drawer::inner style="background-color: #fff">
            Right
        </x-drawer::inner>
    </x-drawer::base>

    <x-drawer::base 
        name="left"
        placement="left"    
    >
        <x-drawer::backdrop />

        <x-drawer::inner style="background-color: #fff">
            Left
        </x-drawer::inner>
    </x-drawer::base>

    <x-drawer::base 
        name="top"
        placement="top"    
    >
        <x-drawer::backdrop />

        <x-drawer::inner style="background-color: #fff">
            Top
        </x-drawer::inner>
    </x-drawer::base>

    <x-drawer::base 
        name="bottom"
        placement="bottom"    
    >
        <x-drawer::backdrop />

        <x-drawer::inner style="background-color: #fff">
            Bottom
        </x-drawer::inner>
    </x-drawer::base>


    <div>
        <button 
            @click="$store.drawer.toggle('right')"
            x-data    
        >
            show right
        </button>
    </div>

    <div>
        <button 
            @click="$store.drawer.toggle('left')"
            x-data    
        >
            show left
        </button>
    </div>

    <div>
        <button 
            @click="$store.drawer.toggle('top')"
            x-data    
        >
            show top
        </button>
    </div>

    <div>
        <button 
            @click="$store.drawer.toggle('bottom')"
            x-data    
        >
            show bottom
        </button>
    </div>
</x-layout>