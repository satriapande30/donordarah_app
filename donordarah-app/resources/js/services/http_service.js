import store from '../store';
import axios from 'axios';

export function http() {
    return axios.create({
        baseURL: 'http://localhost:8080/'
    });
}

export function httpfile() {
    return axios.create({
        baseURL: 'http://localhost:8080/',
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    });
}
