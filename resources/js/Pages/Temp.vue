<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

defineProps({
    user: Object,
})

</script>

<template #header>
    <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
    </h2> -->

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        ¡Bienvenido {{ $page.props.auth.user.name }}!
    </h2>

</template>
