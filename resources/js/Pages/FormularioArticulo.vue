<script setup>
    import { useForm } from '@inertiajs/vue3';
    const form = useForm({
        name: '',
        stock: 0,
        discount: 0,
        photo: '',
        description: ''
    })
</script>

<template>
    <h1>Puja un nou article</h1>

    <form @submit.prevent="form.post('/articulos')">
        <div>
            <label for="">Nom: </label>
            <input type="text" v-model="form.name" placeholder="Nom" id="name">
        </div>

        <div>

        </div>

    </form>
</template>
