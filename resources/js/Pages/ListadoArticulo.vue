<script setup>
    defineProps({
        articulos: Object,
    })
    let baseImage = "https://picsum.photos/200/300?random=1"
</script>

<template>
    <h2>Listado de articulos</h2>
    <ul>
        <li v-for="articulo in articulos" :key="articulo.id">
            {{ articulo.id }}
            {{ articulo.name }}
            {{ articulo.stock }}
            {{ articulo.discount }}
            {{ articulo.photo }}
            {{ articulo.description }}
        </li>
    </ul>
</template>
