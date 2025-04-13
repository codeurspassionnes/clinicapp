<template>
    <h1>Bienvenu {{  username }}</h1>
</template>
<script setup>
const props = defineProps({
    username: String
})
</script>