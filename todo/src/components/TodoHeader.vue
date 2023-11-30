<script setup>
import {RouterLink} from "vue-router";
</script>

<template>
    <div>
        <ul class="nav-routes">
            <RouterLink to ="/">
                Home
            </RouterLink>
            <RouterLink to ="/about">
                About
            </RouterLink>
        </ul>

    </div>
</template>


<style lang="scss" scoped>

</style>