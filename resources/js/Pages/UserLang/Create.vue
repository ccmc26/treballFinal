<script setup>
    import { useForm } from '@inertiajs/vue3';

    const form = useForm({
        id_user:'',
        id_language:'',
        level:''
    })
</script>

<template>
    <h1>Crear una Llengua</h1>
    <form @submit.prevent="form.post('/uslang')">
        <div>
            <label for="id_user">User</label>
            <input type="text" v-model="form.id_user" placeholder="id_user" id="id_user"/>
        </div>

        <div>
            <label for="id_lang">Llengua</label>
            <input type="text" v-model="form.id_language" placeholder="id_lang" id="id_lang"/>
        </div>

        <div>
            <label for="level">Nivell</label>
            <input type="text" v-model="form.level" placeholder="level" id="level"/>
        </div>
        <div class="btn-group" role="group" aria-label="...">
            <button type="submit" :disabled="form.processing" class="btn btn-default">Afegir registre</button>
        </div>

    </form>
</template>
