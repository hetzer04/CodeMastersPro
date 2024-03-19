<script setup>
import ArrowRightSvg from "../assets/svg/arrowRightSvg.vue";
import HamburgerMenuSvg from "../assets/svg/hamburgerMenuSvg.vue";
import logo from '../../public/logo_black.png'

import { ref } from "vue";

const showMenu = ref(false);
</script>

<template>
  <header class="flex flex-wrap w-full h-dvh overflow-hidden ease-in-out duration-1000">
    <div class="flex flex-col items-center justify-center">Главная</div>
    <div class="flex flex-col items-center justify-center">О нас</div>
    <div class="flex flex-col items-center justify-center">Курсы</div>
    <div class="flex flex-col items-center justify-center">Контакты</div>
  </header>
</template>
