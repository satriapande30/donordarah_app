// import { component } from 'vue/types/umd'
import DataTable from './components/DataTable'
import pendonor from './components/Pendonor'
import Dashboard from './components/Dashboard'
import DataPetugas from './components/DataPetugas'

export const routes = [
    {
        name:'pendonor',
        path:'/vue/pendonor',
        component:pendonor 
    },

    {
        name:'datapendonor',
        path:'/vue/datapendonor',
        component:DataTable
    },

    {
        name:'dasboard',
        path:'/vue/dashboard',
        component:Dashboard
    },

    {
        name:'datapetugas',
        path:'/vue/datapetugas',
        component:DataPetugas
    }
]