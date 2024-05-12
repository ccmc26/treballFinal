<script setup>
import { ref, computed } from 'vue'


const test = computed(() => store.state.test)

defineProps({
  msg: String,
})

const count = ref(0)
</script>

<template>

    {{ test }}

</template>

<style scoped>
.read-the-docs {
  color: #888;
}
</style>
