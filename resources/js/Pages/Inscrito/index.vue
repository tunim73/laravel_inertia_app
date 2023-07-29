<script setup>
    import {computed} from "vue";
    import { Head, Link, router } from '@inertiajs/vue3';
    import Table from "@/Pages/Inscrito/Partials/Table.vue";
    import Banner from "@/Components/Banner.vue";

    defineProps({
        inscritos: Object
    })



</script>

<template>
    <body>
        <Banner />
        <Table :inscritos="inscritos"/>
    </body>

</template>

<style scoped>

</style>
