/**
 * Offline
 */
if ('serviceWorker' in navigator) {
    navigator.serviceWorker
        .register('./service-worker.js')
        .then(function () {
            console.log('Service Worker Registered');
        });
}

let core;
core={}
core.init = function () {
    // core.showOnlineFlag();
    // core.loadPosts();
}
// core.showOnlineFlag = function () {
//     $online_flag = document.querySelector(".online-flag");
//     if (navigator.onLine) {
//         $online_flag.style.display = "none";
//     } else {
//         $online_flag.style.display = "block";
//     }
// }

/**
 * Database
 */
window.db = new Dexie("offline_test");
db.version(1).stores({
    entries: '++id'
});
db.open();

/**
 * Vue
 */
require('./bootstrap');
window.Vue = require('vue');
window.events = new Vue();

Vue.component('insert-form', require('./components/InsertForm.vue'));
Vue.component('entries', require('./components/Entries.vue'));

const app = new Vue({
    el: '#app'
});

