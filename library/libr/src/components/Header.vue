<script setup>
import { RouterLink, RouterView } from 'vue-router'
import { store } from '../store'

</script>

<template>
  <header>
      <nav>
        <RouterLink to="/">Home </RouterLink>
        <RouterLink v-if="store.status == 0" to="/login">Login </RouterLink>
        <RouterLink to="/">Ab </RouterLink>
        <RouterLink to="/logout">Logout </RouterLink>


      </nav>
      <div>
        <RouterLink v-if="store.status == 1 && store.type == 0" to="/addBook">ADD Book</RouterLink>
      </div>
  </header>

  <RouterView />
</template>

<style lang="scss" scoped>

</style>