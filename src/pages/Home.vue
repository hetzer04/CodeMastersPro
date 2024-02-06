<script setup>
import CubeSvg from "../assets/svg/cubeSvg.vue"
import closeSvg from "../assets/svg/closeSvg.vue"
import slashSvg from "../assets/svg/slashSvg.vue"
</script>

<template>
    <section class="flex flex-col justify-center items-center gap-10 bg-slate-400 spacing w-full p-5">
        <div
            class="bg-slate-900 h-min w-{375} gap-5 flex flex-col justify-center text-green-700 rounded border-2 border-black">
            <div class="flex items-center justify-between bg-slate-800 p-2 rounded">
                <div class="flex gap-1 items-center">
                    <CubeSvg />CMD
                </div>
                <div class="flex items-center bg-slate-700 rounded">
                    <div class="p-2">
                        <slashSvg class="text-slate-950" />
                    </div>
                    <div class="p-2 bg-red-400 rounded">
                        <closeSvg class="text-slate-950" />
                    </div>
                </div>
            </div>
            <div class="flex flex-col p-7 ">
                <span class="text-xl">C:\ get greetings</span>
                <span class="indent-5 text-2xl">-> Добро пожаловать в школу программирования</span>
                <span class="indent-5 text-2xl">-> CodeMastersPro</span>
                <span class="indent-5 text-2xl">-> Создавай будущие с помощью кода</span>
            </div>
        </div>
        <a href=""
            class="w-{375} border-2 border-black hover:border-green-800 hover:text-green-800 hover:bg-slate-900 p-2 rounded text-center">Выбрать
            курс</a>
    </section>
    <section class="flex flex-col justify-center items-center gap-10 bg-slate-900 spacing w-full p-5">
        <span class="text-5xl text-purple-600">Направления</span>
        <div class="flex gap-5">
            <a href="#" class="w-96 rounded overflow-hidden bg-slate-300 flex flex-col items-center">
                <img :src="'web.jpg'" />
                <span class="p-2">WEB разработчик</span>
            </a>
            <a href="#" class="w-96 rounded overflow-hidden bg-slate-300 flex flex-col items-center">
                <img :src="'java.jpg'" />
                <span class="p-2">JAVA разработчик</span>
            </a>
        </div>
    </section>
</template>

<style>
.spacing {
    height: calc(100vh - 100px);
    min-height: 400px;
}</style>