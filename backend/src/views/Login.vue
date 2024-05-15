<template>
    <!-- <h1>Login</h1> -->

    <div class="flex items-center min-h-screen bg-white dark:bg-gray-900">
        <div class="container mx-auto">
            <div class="max-w-md mx-auto my-10">
                <GuestLayout title="Sign in">
                <div class="text-center">
                    <!-- <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Sign in</h1> -->
                    <p class="text-gray-500 dark:text-gray-400">Sign in to access your account</p>
                </div>
                <div class="m-7">
                    <form class="space-y-6" method="POST" @submit.prevent="login">
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="you@company.com" required="" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" v-model="user.email"/>
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600 dark:text-gray-400">Password</label>
                                <!-- <a href="/" class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500 dark:hover:text-indigo-300">Forgot password?</a> -->
                                <router-link :to="{name: 'requestPassword'}" class="font-medium text-indigo-600 hover:text-indigo-500"> Forgot your
                                    your password
                                </router-link>
                            </div>
                            <input type="password" name="password" id="password" placeholder="Your Password"  required="" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" v-model="user.password"/>
                        </div>
                        <div class="mb-6">
                            <button type="submit"
                            class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none"
                            :disabled="loading">Sign in</button>
                        </div>
                        <p class="text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="/register" class="text-indigo-400 focus:outline-none focus:underline focus:text-indigo-500 dark:focus:border-indigo-800" >Sign up</a>.</p>
                    </form>
                </div>
            </GuestLayout>
            </div>
        </div>
    </div>


</template>

<script setup>
import { storeKey } from 'vuex';
import GuestLayout from '../components/GuestLayout.vue';
import { ref } from 'vue';
import store from '../store';
import router from '../router';

let loading = ref(false);
let errorMsg = ref("");

const user = {
    email: '',
    password: ''
}

function login(){
    loading.value = true;
    store.dispatch('login', user)
    .then(() => {
        loading.value = false;
        router.push({name: 'app.dashboard'})
    })
    .catch(({response}) => {
        loading.value = false;
        errorMsg.value = response.data.message;
    })
}

</script>
<style scoped>

</style>
