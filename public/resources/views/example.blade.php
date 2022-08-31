<x-layout>
    <x-drawer::base 
        name="right"
        placement="right"
        active-body-class="right-drawer-is-open"
        class="rightDrawer"
        :default-open="false"
        @opened="function () {
            console.log('opened event triggered')
        }"
        @closed="function () {
            console.log('closed event trigged')
        }"
    >
        <x-drawer::backdrop class="rightDrawer__backdrop" />

        <x-drawer::inner class="rightDrawer__inner">
            <x-drawer::closeButton class="rightDrawer__closeButton" />

            Right
        </x-drawer::inner>
    </x-drawer::base>

    <x-drawer::base 
        name="left"
        placement="left"    
    >
        <x-drawer::backdrop />

        <x-drawer::inner>
            <x-drawer::closeButton>
                X
            </x-drawer::closeButton>

            Left
        </x-drawer::inner>
    </x-drawer::base>

    <x-drawer::base 
        name="top"
        placement="top"    
    >
        <x-drawer::backdrop />

        <x-drawer::inner>
            Top
        </x-drawer::inner>
    </x-drawer::base>

    <x-drawer::base 
        name="bottom"
        placement="bottom"    
    >
        <x-drawer::backdrop />

        <x-drawer::inner>
            Bottom
        </x-drawer::inner>
    </x-drawer::base>

    <x-drawer::base 
        name="customTrans"
        transition-name="customTrans"
        placement="right"    
    >
        <x-drawer::backdrop />

        <x-drawer::inner>
            Custom transition
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

    <div>
        <button 
            @click="$store.drawer.toggle('customTrans')"
            x-data    
        >
            show custom transition
        </button>
    </div>
</x-layout>