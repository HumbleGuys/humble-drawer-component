const drawer = ({ id, activeBodyClass, defaultOpen = false }) => ({
    isOpen: false,

    init () {
        if (defaultOpen) {
            this.open();
        }

        Alpine.effect(() => {
            if (this.$store.drawer.id === id) {
                this.isOpen = true;
                document.body.style.overflow = 'hidden';

                if (activeBodyClass) {
                    document.body.classList.add(activeBodyClass);
                }
            } else {
                this.isOpen = false;
                document.body.style.overflow = '';

                if (activeBodyClass) {
                    document.body.classList.remove(activeBodyClass);
                }
            }
        });

        document.addEventListener('keydown', (event) => {
            if (!this.isOpen) {
                return;
            }

            if (event.key === 'Escape') {
                this.close();
            }
        });
    },

    toggle (id) {
        this.$store.drawer.toggle(id);
    },

    close () {
        this.$store.drawer.close();
    },

    open () {
        this.$store.drawer.open(id);
    }
});

window.Alpine.data('drawer', drawer);

window.Alpine.store('drawer', {
    id: null,

    toggle (id) {
        this.id = this.id === id ? null : id;
    },

    open (id) {
        this.id = id;
    },

    close () {
        this.id = null;
    }
});