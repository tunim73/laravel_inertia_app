<script setup>
    import {computed} from "vue";
    import { Head, Link, router } from '@inertiajs/vue3';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import Table from "@/Pages/Inscrito/Partials/Table.vue";
    import Banner from "@/Components/Banner.vue";

    defineProps({
        inscritos: Object
    })

</script>

<template>
    <AppLayout title="Lista de inscritos">   
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div>
                <h1 class="mb-8 text-3xl font-bold">
                <Link
                    class="text-venice-blue-400 hover:text-venice-blue-600"
                    href="/"
                    >Inscritos</Link
                >
                <span class="text-venice-blue-400 font-medium">/</span> Lista
                </h1>
            </div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <SectionTitle>
                <template #title> Gerência de inscritos </template>
                <template #description>
                    
                </template>
                </SectionTitle>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow">
                        <JetPrimaryButton class="mb-2">+ Criar Itens</JetPrimaryButton>
                        <Table :inscritos="inscritos"/>
                    </div>
                </div>
            </div>
        </div>       
    </AppLayout>

</template>