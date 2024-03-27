<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

    defineProps({
        articulos: Object,
    })
    let baseImage = "https://picsum.photos/200/300?random=1"
</script>

<template>
    <AppLayout title="productos">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                ¡Bienvenido {{ $page.props.auth.user.name }}!
            </h2>

        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                </div>
            </div>
        </div>
    </AppLayout>
</template>
