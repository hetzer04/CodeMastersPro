<script setup>
import Header from "./components/header.vue";
</script>

<template>
  <Header/>
  <main class="w-screen h-dvh p-5 overflow-auto">
    <router-view />
  </main>
</template>