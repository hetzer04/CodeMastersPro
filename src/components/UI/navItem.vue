<script setup>
defineProps({
  text: String,
  url: String,
});
</script>

<template>
  <router-link :to="url" class="hover:border-slate-200 border-transparent border-2 rounded p-2 text-center">{{ text }}</router-link>
</template>
