<script setup>
import { useForm } from'@inertiajs/vue3'

const props = defineProps({
    uslang: Object,
})

const form = useForm({
        id_user: props.uslang.id_user,
        id_language: props.uslang.id_language,
        level: props.uslang.level
    })

</script>

<template>
    <form @submit.prevent="form.put(`/uslang/${props.uslang.id}`)">
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
        <button type="submit" :disabled="form.processing">Actualitzar registre</button>
    </form>
</template>

