<script setup>
import ArrowRightSvg from "../assets/svg/arrowRightSvg.vue";
import HamburgerMenuSvg from "../assets/svg/hamburgerMenuSvg.vue";
import NavItem from "./UI/navItem.vue";
import HamburgerMenu from "./hamburgerMenu.vue";

import { ref } from "vue";

const showMenu = ref(false);
</script>

<template>
  <header class="sticky top-0 mx-auto">
    <div
      class="flex items-center justify-between text-white p-6 lg:px-8 bg-slate-950"
    >
      <a href="/">
        <img
          :src="'logo_black.png'"
          alt="Описание изображения"
          class="w-40 rounded p-2 bg-slate-50"
        />
      </a>
      <nav class="hidden md:flex flex-1 justify-center gap-5">
        <NavItem :text="'Направления'" :url="'#'" />
        <NavItem :text="'Преподователи'" :url="'#'" />
        <NavItem :text="'Контакты'" :url="'#/about'" />
      </nav>
      <a
        href="#"
        class="hidden md:flex items-center gap-1 uppercase border-2 rounded p-2 px-7 hover:bg-slate-200 hover:text-black"
        ><span>Войти</span><ArrowRightSvg
      /></a>
      <HamburgerMenuSvg
        class="visible md:hidden"
        @click="showMenu = !showMenu"
      ></HamburgerMenuSvg>
    </div>
    <HamburgerMenu :showMenu="showMenu" />
  </header>
</template>
