<script setup>
defineProps({
  text: String,
  url: String,
});
</script>

<template>
  <a :href="url" class="hover:border-slate-200 border-transparent border-2 rounded p-2 text-center">{{ text }}</a>
</template>
