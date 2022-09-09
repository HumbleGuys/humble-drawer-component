import { defineConfig } from 'vite';

export default defineConfig(({ command }) => {

    return {
        publicDir: false,

        build: {
            manifest: true,
            outDir: 'public/resources/dist',

            lib: {
                name: "humble-drawer-component",
                entry: 'src/resources/index.js',
                fileName: 'humble-drawer-component'
            },

            rollupOptions: {
                input: 'src/resources/index.js'
            }
        },

        plugins: [
            {
                name: 'blade',
                handleHotUpdate ({ file, server }) {
                    if (file.endsWith('.blade.php')) {
                        server.ws.send({
                            type: 'full-reload',
                            path: '*'
                        });
                    }
                }
            }
        ]
    }
});
