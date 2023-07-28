<script setup>
    import {computed} from "vue";
    import Table from "@/Pages/Inscrito/Partials/Table.vue";

    defineProps({
        inscritos: Object
    })



</script>

<template>
    <body>
        <Table :inscritos="inscritos"/>
    </body>

</template>

<style scoped>

</style>
