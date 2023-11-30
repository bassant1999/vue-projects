<script setup>
    defineProps({
        greetingMessage: String,
        anther: String
        })
</script>

<template>
    <li>
        <slot></slot>
    </li>
</template>


<style lang="scss" scoped>

</style>