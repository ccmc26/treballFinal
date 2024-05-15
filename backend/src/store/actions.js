import axiosClient from "../axios";
import { setUser } from "./mutations";

export function getUser({commit}){
    return axiosClient.get('/user', data)
        .then(({data}) => {
            commit('setUser', data)
            return data
        })
}

export function login({commit}, data){
    return axiosClient.post('/login', data)
        .then(({data}) => {
            commit('setUser', data.user);
            commit('setToken', data.token);
            return data;
    })
}

export function logout({commit}){
    return axiosClient.post('/logout')
        .then((response) => {
            commit('setToken', null)

            return response;
        })
}
