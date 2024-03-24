<script setup>
    import { Link } from '@inertiajs/vue3'
    defineProps({
        user_language: Object,
    })
</script>

<template>

    <h2>Llistat de alumnes</h2>
    <table>
        <thead>
            <tr>
                <th>ID Inscrip.
                </th>
                <th>ID Usuario</th>
                <th>ID Idioma</th>
                <th>Nivel</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="uslang in user_language" :key="uslang.id">
                <td>{{ uslang.id }}</td>
                <td>{{ uslang.id_user }}</td>
                <td>{{ uslang.id_language }}</td>
                <td>{{ uslang.level }}</td>
                <td>
                    <Link :href="`/uslang/${uslang.id}/edit`"> Editar </Link>
                    <Link :href="`/uslang/${uslang.id}`" method="DELETE">Eliminar</Link>
                </td>
            </tr>
        </tbody>
    </table>
    <Link :href="`/uslang/create`">Crear</Link>

</template>
