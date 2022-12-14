const d = ({ id: e, activeBodyClass: i, defaultOpen: s = !1 }) => ({
  isOpen: !1,
  init() {
    s && this.open(), Alpine.effect(() => {
      this.$store.drawer.id === e ? (this.isOpen = !0, document.body.style.overflow = "hidden", i && document.body.classList.add(i), this.$dispatch("opened")) : !this.$store.drawer.id && this.isOpen && (this.isOpen = !1, document.body.style.overflow = "", i && document.body.classList.remove(i), this.$dispatch("closed"));
    }), document.addEventListener("keydown", (t) => {
      !this.isOpen || t.key === "Escape" && this.close();
    });
  },
  toggle(t) {
    this.$store.drawer.toggle(t);
  },
  close() {
    this.$store.drawer.close();
  },
  open() {
    this.$store.drawer.open(e);
  }
});
document.addEventListener("alpine:init", () => {
  window.Alpine.data("drawer", d), window.Alpine.store("drawer", {
    id: null,
    toggle(e) {
      this.id = this.id === e ? null : e;
    },
    open(e) {
      this.id = e;
    },
    close() {
      this.id = null;
    }
  });
});
