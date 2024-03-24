<script setup>
    import { Link } from '@inertiajs/vue3'
    defineProps({
        languages: Object,
    })
</script>

<template>

    <h2>Llistat de llengües</h2>
    <ul>
        <li v-for="language in languages" :key="language.id">
            <h2>{{ language.name }}</h2>
            <p>{{ language.N_max }}</p>
            <p>{{ language.dificultad }}</p>

            <Link :href="`/language/${language.id}/edit`">Editar</Link>
            <Link :href="`/language/${language.id}`" method="DELETE">Eliminar</Link>
        </li>
    </ul>
</template>
