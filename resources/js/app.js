import Vue from 'vue';
import router from './router.js';
import App from './components/App'

window.axios = require('axios');
require('./bootstrap');

const app = new Vue({
    el: '#app',
    components: {
        App
    },

    mounted: function() {
        axios.get('http://127.0.0.1:8000/api/today')
                .then(response => this.today = response.data);

        axios.get('http://127.0.0.1:8000/api/sheep/1')
                .then(response => this.apdock = response.data);

        axios.get('http://127.0.0.1:8000/api/sheep/2')
                .then(response => this.bpdock = response.data);
        
        axios.get('http://127.0.0.1:8000/api/sheep/3')
                .then(response => this.cpdock = response.data);

        axios.get('http://127.0.0.1:8000/api/sheep/4')
                .then(response => this.dpdock = response.data);
    },

    data: {
        today: null,
        apdock: null,
        bpdock: null,
        cpdock: null,
        dpdock: null,
    },

    router
});
