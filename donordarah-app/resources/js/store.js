import Vue from 'vue';
import Vuex from 'vuex';



Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        apiURL: 'http://',
        serverPath: 'http://localhost:8080/'
    },
    mutations: {
        
    },
    actions:{}
});