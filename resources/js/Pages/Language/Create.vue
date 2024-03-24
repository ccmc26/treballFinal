<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name:'',
    N_max:'',
    dificultad:''
})

</script>

<template>
    <h1>Crear una Llengua</h1>
    <form @submit.prevent="form.post('/language')">
        <div>
            <label for="nom">Nom</label>
            <input type="text" v-model="form.name" placeholder="nom" id="nom"/>
            <!--  -->
            <div v-if="form.errors.nom">
                {{ form.errors.nom }}
            </div>
        </div>

        <div>
            <label for="n_max">NivellMàxim</label>
            <input type="text" v-model="form.N_max" placeholder="n_max" id="n_max"/>
            <!-- Pa pillar els errors -->
            <div v-if="form.errors.titulo">
                {{ form.errors.n_max }}
            </div>
        </div>

        <div>
            <label for="dificultad">Dificultat</label>
            <select v-model="form.dificultad" placeholder="dificultad" id="dificultad">
                <option>dificil</option>
                <option>facil</option>
                <option>media</option>
            </select>
            <div v-if="form.errors.dificultad">
                {{ form.errors.dificultad }}
            </div>
        </div>
        <div class="btn-group" role="group" aria-label="...">
            <button type="submit" :disabled="form.processing" class="btn btn-default">Afegir Llengua</button>
        </div>

    </form>

</template>
