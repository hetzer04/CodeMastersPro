<script setup>
import NavItem from "./UI/navItem.vue";
import ArrowRightSvg from "../assets/svg/arrowRightSvg.vue";

defineProps({
  showMenu: Boolean,
});
</script>

<template>
  <Transition>
    <div v-if="showMenu" class="absolute top-full bg-slate-950 w-full h-fit text-white flex flex-col justify-between p-7 -z-10 gap-10">
      <nav class="flex flex-col gap-7 py-7">
        <NavItem :text="'Направления'" :url="'#'" />
        <NavItem :text="'Преподователи'" :url="'#'" />
        <NavItem :text="'Контакты'" :url="'#'" />
      </nav>
      <a
        href="#"
        class="flex items-center justify-center gap-1 uppercase border-2 rounded p-2 px-7"
        ><span>Войти</span><ArrowRightSvg
      /></a>
    </div>
  </Transition>
</template>

<style>
.v-enter-active,
.v-leave-active {
  transition: all 0.5s ease-in-out;
}

.v-enter-from,
.v-leave-to{
  top: -200%;
}

.v-leave-from,
.v-enter-to{
  top: 100%;
}

</style>
