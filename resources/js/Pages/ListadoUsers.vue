<script setup>
    defineProps({
        users: Object,
    })
    let baseImage = "https://picsum.photos/200/300?random=1"
</script>

<template>
    <h2>Listado de usuarios</h2>
    <ul>
        <li v-for="user in users" :key="users.id">
            {{ user.name }}
            {{ user.email }}
            {{ user.avatar }}
        </li>
    </ul>
</template>
