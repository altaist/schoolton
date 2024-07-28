import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { Quasar } from 'quasar'
import quasarOptions from './quasar_options';

// Import icon libraries
import '@quasar/extras/material-icons/material-icons.css'

// Import Quasar css
import 'quasar/src/css/index.sass'

const appName = import.meta.env.VITE_APP_NAME || 'Schoolton';
window.TWA = window.Telegram ? window.Telegram.WebApp : null;

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./pages/${name}.vue`, import.meta.glob('./pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(Quasar, quasarOptions)
        app.config.globalProperties.TWA = window.TWA
        return app.mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

const currentLang = {
    'comming_soon': 'Comming soon'
}


window.t = (key) => {
    return currentLang[key] || key;
}
